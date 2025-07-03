<?php

namespace App\Services\Developer;

use App\Services\Developer\Contracts\iDeveloperService;
use Illuminate\Http\Request;
use App\Models\Developer;
use App\Traits\Crud;

class DeveloperService implements iDeveloperService
{
    use Crud;

    public $modelClass = Developer::class;

    public function filter(Request $request)
    {
        return $this->modelClass::whereSearch(['fullname', 'phone'])
            ->whereEqual('status')
            ->sort()
            ->paginate(10);
    }

    public function store(Request $request)
    {
        $request->offsetSet('phone', nudePhone($request->get('phone')));
        $model = $this->cStore($request);

        return $model;
    }

    public function edit($id)
    {
        return $this->cEdit($id);
    }

    public function update(Request $request, $id)
    {
        $request->offsetSet('phone', nudePhone($request->get('phone')));
        $model = $this->cUpdate($request, $id);
        // $model->update(['user_id' => auth()->user()->id]);

        return $model;
    }

    public function delete($id)
    {
        return $this->cDelete($id);
    }
}
