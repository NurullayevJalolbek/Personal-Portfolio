<?php

namespace App\Services\Post;

use App\Services\Post\Contracts\iPostService;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Traits\Crud;
use Str;

class PostService implements iPostService
{
    use Crud;

    public $modelClass = Post::class;

    public function filter($request)
    {
        return $this->modelClass::whereSearch(['title', 'description'])
            ->sort()
            ->paginate(5);
    }

    public function store(Request $request)
    {
        $model = $this->cStore($request);
        $slug = $this->generateSlugForModel($model);
        $model->update(['slug' => $slug]);
        return $model;
    }

    public function edit($id)
    {
        return $this->cEdit($id);
    }

    public function update(Request $request, $id)
    {
        $model = $this->cUpdate($request, $id);
        return $model;
    }

    public function delete($id)
    {
        return $this->cDelete($id);
    }

    public function generateSlugForModel($model, $column = 'title')
    {
        $slug = $model->id . '-' . time();
        $slug = Str::slug($model->$column) . $slug;
        return $slug;
    }
}
