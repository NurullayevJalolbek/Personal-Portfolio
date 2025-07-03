<?php

namespace App\Http\Controllers\Admin;

use App\Services\Student\Contracts\iStudentService;
use App\Http\Requests\Student\StudentUpdateRequest;
use App\Http\Requests\Student\StudentRequest;
use App\Enums\General\StatusStringEnum;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\Program;
use App\Models\Student;

class AdminStudentController extends Controller
{
    public function index(Request $request, iStudentService $service)
    {
        $datas = $service->filter($request);
        $statuses = StatusStringEnum::list();

        return view('admin.students.index', [
            'datas' => $datas,
            'statuses' => $statuses,
        ]);
    }

    public function create(iStudentService $service)
    {
        $model = new Student();
        $statuses = StatusStringEnum::list();
        $countries = Country::get();
        $programs = Program::get();

        return view('admin.students.create', [
            'model' => $model,
            'statuses' => $statuses,
            'countries' => $countries,
            'programs' => $programs,
        ]);
    }

    public function store(StudentRequest $request, iStudentService $service)
    {
        $service->store($request);
        return redirect()->route('admin.students.index')
            ->withSuccess(__('message.Successfully created'));
    }

    public function edit(Student $student)
    {
        $model = $student;
        $statuses = StatusStringEnum::list();
        $countries = Country::get();
        $programs = Program::get();

        return view('admin.students.edit', [
            'model' => $model,
            'statuses' => $statuses,
            'countries' => $countries,
            'programs' => $programs,
        ]);
    }

    public function update(StudentUpdateRequest $request, Student $student, iStudentService $service)
    {
        $service->update($request, $student->id);
        return redirect()->route('admin.students.index')
            ->withSuccess(__('message.Successfully updated'));
    }

    public function destroy(Student $student, iStudentService $service)
    {
        $service->delete($student->id);
        return success_response(__('message.Successfully deleted'));
    }
}
