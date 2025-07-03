<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Developer\DeveloperUpdateRequest;
use App\Services\Developer\Contracts\iDeveloperService;
use App\Http\Requests\Developer\DeveloperRequest;
use App\Enums\General\StatusStringEnum;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Developer;

class AdminDeveloperController extends Controller
{
    public function index(Request $request, iDeveloperService $service)
    {
        $datas = $service->filter($request);
        $statuses = StatusStringEnum::list();

        return view('admin.developers.index', [
            'datas' => $datas,
            'statuses' => $statuses,
        ]);
    }

    public function create(iDeveloperService $service)
    {
        $model = new Developer();
        $statuses = StatusStringEnum::list();

        return view('admin.developers.create', [
            'model' => $model,
            'statuses' => $statuses,
        ]);
    }

    public function store(DeveloperRequest $request, iDeveloperService $service)
    {
        $service->store($request);
        return redirect()->route('admin.developers.index')
            ->withSuccess(__('message.Successfully created'));
    }

    public function edit(Developer $Developer)
    {
        $model = $Developer;
        $statuses = StatusStringEnum::list();

        return view('admin.developers.edit', [
            'model' => $model,
            'statuses' => $statuses,
        ]);
    }

    public function update(DeveloperUpdateRequest $request, Developer $Developer, iDeveloperService $service)
    {
        $service->update($request, $Developer->id);
        return redirect()->route('admin.developers.index')
            ->withSuccess(__('message.Successfully updated'));
    }

    public function destroy(Developer $Developer, iDeveloperService $service)
    {
        $service->delete($Developer->id);
        return success_response(__('message.Successfully deleted'));
    }
}

