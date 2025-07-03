<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserAction;

class AdminUserActionController extends Controller
{
    public $modelClass = UserAction::class;

    public function index(Request $request)
    {
        $datas = $this->modelClass::whereEqual('action')
            ->whereEqual('table_name')
            ->when($request->search, function ($query) {
                $query->Where('ip', 'ilike', '%' . request('search') . '%');
            })
            ->orderBy('id', 'desc')->paginate();

        $statuses = [
            'create'    => __('locale.create'),
            'update'    => __('locale.update'),
            'delete'    => __('locale.delete'),
        ];

        $table_names = [
            'about'     => __('table.about'),
            'users'     => __('table.users'),
            'students'  => __('table.students'),
            'programs'  => __('table.programs'),
            'countries'  => __('table.countries'),
        ];

        return view('admin.user-actions.index', [
            'datas'         => $datas,
            'statuses'      => $statuses,
            'table_names'   => $table_names,
        ]);
    }
}
