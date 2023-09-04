<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $formFields = $request->only(['email', 'password']);
        $pas = User::where('email', $formFields['email'])->first()->value('password');

        if (Hash::check('password', $pas)) {
            return redirect(route('user.private'));
        }
        if (Auth::attempt($formFields)) {
            return redirect(route('user.private'));
        }

        return redirect(route('user.login'))->withErrors([
            'email' => "Не удалось авторизоваться"
        ]);
    }
}
