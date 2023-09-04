<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegistrationController extends Controller
{
    public function save(Request $request)
    {
       $validate = $request->validate([
            'email' => ['required', 'string', 'email', 'max:255'],
            'name' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:1', 'confirmed'],
        ]);

        if (User::where('email', $validate['email'])->exists()) {
            return redirect(route('user.registration'))->withErrors([
                'email' => "Пользователь уже зарегистрирован"
            ]);
        }
        $user = User::create($validate);

        if ($user) {
            auth()->login($user);
            return redirect(route('user.private'));
        }
        return redirect(route('user.registration'))->withErrors([
            'email' => "Ошибка сохранения пользователя"
        ]);

    }
}
