<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Program\ProgramUpdateRequest;
use App\Services\Program\Contracts\iProgramService;
use App\Http\Requests\Program\ProgramRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Program;

class AdminProgramController extends Controller
{
    public function index(Request $request, iProgramService $service)
    {
        $datas = $service->filter($request);

        return view('admin.programs.index', [
            'datas' => $datas,
            'statuses' => [],
        ]);
    }

    public function create(iProgramService $service)
    {
        $model = new Program();

        return view('admin.programs.create', [
            'model' => $model,
            'statuses' => [],
        ]);
    }

    public function store(ProgramRequest $request, iProgramService $service)
    {
        $service->store($request);
        return redirect()->route('admin.programs.index')
            ->withSuccess(__('message.Successfully created'));
    }

    public function edit(Program $program)
    {
        $model = $program;

        return view('admin.programs.edit', [
            'model' => $model,
            'statuses' => [],
        ]);
    }

    public function update(ProgramUpdateRequest $request, Program $program, iProgramService $service)
    {
        $service->update($request, $program->id);
        return redirect()->route('admin.programs.index')
            ->withSuccess(__('message.Successfully updated'));
    }

    public function destroy(Program $program, iProgramService $service)
    {
        $service->delete($program->id);
        return success_response(__('message.Successfully deleted'));
    }
}
