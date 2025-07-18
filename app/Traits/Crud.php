<?php

namespace App\Traits;

use App\Models\UserAction;
use Illuminate\Http\Request;

trait Crud
{
    const CREATE = 'create', UPDATE = 'update', SHOW = 'show', DELETE = 'delete';

    public function cStore(Request $request)
    {
        $model = new $this->modelClass;
        $model = $this->modelClass::create($request->only($this->onlySaveFields($model)));
        $model = $this->attachTranslates($model, $request);
        $this->attachFiles($model, $request);
        $this->saveUserAction($model, self::CREATE);

        return $model;
    }

    public function cEdit($id)
    {
        return $this->modelClass::findOrFail($id);
    }

    public function cUpdate(Request $request, $id)
    {
        $model = $this->modelClass::findOrFail($id);
        $model->update($request->only($this->onlySaveFields($model)));
        $model = $this->attachTranslates($model, $request);
        $this->attachFiles($model, $request);
        $this->saveUserAction($model, self::UPDATE);

        return $model;
    }

    public function cDelete($id)
    {
        $model = $this->modelClass::findOrFail($id);

        if (isset($model->translatable)) {
            $model->deleteTranslations();
        }
        if (isset($model->fileFields)) {
            $model->deleteFiles();
        }
        $this->saveUserAction($model, self::DELETE);

        return $model->delete();
    }

    public function attachFiles($model, Request $request)
    {
        if (isset($model->fileFields)) {
            $model->attachFiles($request);
        }
        return $model;
    }

    public function attachTranslates($model, Request $request)
    {
        if (isset($model->translatable)) {
            foreach ($model->translatable as $field) {
                if (is_array($request->{$field})) {
                    $model->setTranslations($field, $request->{$field});
                } elseif (is_string($request->{$field})) {
                    $model->setTranslation($field, $request->{$field});
                }
            }
        }
        return $model;
    }

    public function onlySaveFields($model): array
    {
        $only = $model->getFillable();

        if (isset($model->fileFields)) {
            $only = array_diff($model->getFillable(), $model->fileFields);
        }
        if (isset($model->translatable)) {
            $only = array_diff($only, $model->translatable);
        }

        return $only;
    }

    protected function saveUserAction($model, $action)
    {
        UserAction::create([
            'user_id' => auth()->user()?->id,
            'table_name' => $model->getTable(),
            'model_id' => $model->id,
            'action' => $action,
            'ip' => request()->ip(),
        ]);
    }
}
