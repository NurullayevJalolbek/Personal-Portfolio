<?php

namespace App\Http\Controllers;

use Laravel\Sanctum\PersonalAccessToken;
use App\Enums\General\LanguageCodeEnum;
use App\Http\Requests\ProfileRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use App\Models\User\Role;
use App\Models\User;

class ProfileController extends Controller
{
    public function dashboard(Request $request)
    {
        Gate::authorize('access', ['dashboard']);

        $roles = Role::with([
            'translations'
        ])
            ->userGroup()
            ->withCount('user_roles as user_count')
            ->get();

        $activeUser = PersonalAccessToken::select('tokenable_id')
            ->where('last_used_at', '>=', now()->subDays(7))
            ->distinct('tokenable_id')
            ->count();

        return view('dashboard', compact('roles', 'activeUser'));
    }

    public function profile(Request $request)
    {
        $model = User::findOrFail(Auth::id());

        return view('auth.profile', compact('model'));
    }

    public function update(ProfileRequest $request)
    {
        $user = User::findOrFail(Auth::id());
        $request->offsetSet('phone', nudePhone($request->phone));
        $user->update($request->only(['name', 'surname', 'patronymic', 'phone']));
        $user->attachFiles($request);
        if ($request->get('password')) {
            $user->update([
                'password' => $request->password
            ]);
        }

        return redirect()->route('admin.profile.edit')->withSuccess(__('message.Successfully updated'));
    }

    public function localization($lang)
    {
        if (!in_array($lang, LanguageCodeEnum::values())) {
            return redirect()->back()->withError(__('message.No such language exists in the system'));
        }

        session()->put('lang', $lang);

        return redirect()->back();
    }
}
