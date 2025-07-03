<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;
use App\Traits\Crud;

class AdminAboutController extends Controller
{
    use Crud;

    public $modelClass = About::class;

    public function edit()
    {
        $model = $this->modelClass::firstOrFail();
        return view('admin.about.edit', compact('model'));
    }

    public function update(Request $request, About $about)
    {
        $this->cUpdate($request, $about?->id);
        return redirect()->route('admin.about.edit')
            ->withSuccess(__('message.Successfully updated'));
    }

}
