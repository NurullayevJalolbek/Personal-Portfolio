<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\LoginHistory;
use Illuminate\Http\Request;

class AdminLoginHistoryController extends Controller
{
    public $modelClass = LoginHistory::class;

    public function index(Request $request)
    {
        $datas = $this->modelClass::whereEqual('status')
            ->when($request->search, function ($query) {
                $query->where(function ($query) {
                    $query->where('login', 'ilike', '%' . request('search') . '%')
                        ->orWhere('ip', 'ilike', '%' . request('search') . '%');
                });
            })
            ->orderBy('id', 'desc')->paginate();

        $statuses = [
            'unsuccess' => __('locale.unsuccess'),
            'success' => __('locale.success'),
        ];

        return view('admin.login-histories.index', [
            'datas' => $datas,
            'statuses' => $statuses,
        ]);
    }
}
