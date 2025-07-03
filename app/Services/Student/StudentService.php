<?php

namespace App\Services\Student;

use App\Services\Student\Contracts\iStudentService;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Traits\Crud;

class StudentService implements iStudentService
{
    use Crud;

    public $modelClass = Student::class;

    public function filter(Request $request)
    {
        return $this->modelClass::whereSearch(['surname', 'name', 'patronymic_name', 'phone'])
            ->whereEqual('country_id')
            ->whereEqual('program_id')
            ->whereEqual('status')
            ->with('user')
            ->sort()
            ->customPaginate();
    }

    public function store(Request $request)
    {
        $request->offsetSet('phone', nudePhone($request->get('phone')));
        $model = $this->cStore($request);
        $model->update(['user_id' => auth()->user()->id]);

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
