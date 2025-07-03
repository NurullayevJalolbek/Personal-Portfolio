<?php

namespace App\Http\Controllers\Auth;

use App\Http\Requests\Auth\LoginRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\LoginHistory;
use Illuminate\Http\Request;

class AuthenticatedSessionController extends Controller
{
    public function create(Request $request)
    {
        $url = null;

        return view('auth.login-cover', compact('url'));
    }

    public function store(LoginRequest $request)
    {
        $log = $this->createLoginHistory($request->username, false);
        $request->authenticate();
        $request->session()->regenerate();
        $log->update([
            'status' => 'success',
            'user_id' => auth()->user()->id,
        ]);

        return redirect()->intended(route('admin.dashboard'));
    }

    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect(route('login'));
    }

    protected function createLoginHistory($login, $status = 'unsuccess')
    {
        return LoginHistory::create([
            'login' => $login,
            'ip' => request()->ip(),
        ]);
    }
}
