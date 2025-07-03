<?php

namespace App\Http\Controllers\General;

use App\Services\Statistic\Contracts\iStatisticService;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User\Role;
use App\Models\Student;
use App\Models\User;

class StatisticController extends Controller
{
    public function index(Request $request, iStatisticService $service)
    {
        $roles = Role::with([
            'translations'
        ])
            ->userGroup()
            ->withCount('user_roles as user_count')
            ->get();

        $userCount = User::count();
        $studentCount = Student::count();

        return view('statistic.index', [
            'roles' => $roles,
            'userCount' => $userCount,
            'studentCount' => $studentCount,
        ]);
    }
}
