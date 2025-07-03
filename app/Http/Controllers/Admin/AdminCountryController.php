<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Country\CountryUpdateRequest;
use App\Services\Country\Contracts\iCountryService;
use App\Http\Requests\Country\CountryRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Country;

class AdminCountryController extends Controller
{
    public function index(Request $request, iCountryService $service)
    {
        $datas = $service->filter($request);

        return view('admin.countries.index', [
            'datas' => $datas,
            'statuses' => [],
        ]);
    }

    public function create(iCountryService $service)
    {
        $model = new Country();

        return view('admin.countries.create', [
            'model' => $model,
            'statuses' => [],
        ]);
    }

    public function store(CountryRequest $request, iCountryService $service)
    {
        $service->store($request);
        return redirect()->route('admin.countries.index')
            ->withSuccess(__('message.Successfully created'));
    }

    public function edit(Country $country)
    {
        $model = $country;

        return view('admin.countries.edit', [
            'model' => $model,
            'statuses' => [],
        ]);
    }

    public function update(CountryUpdateRequest $request, Country $Country, iCountryService $service)
    {
        $service->update($request, $Country->id);
        return redirect()->route('admin.countries.index')
            ->withSuccess(__('message.Successfully updated'));
    }

    public function destroy(Country $country, iCountryService $service)
    {
        $service->delete($country->id);
        return success_response(__('message.Successfully deleted'));
    }
}
