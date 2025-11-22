<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//メール認証機能
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Auth\Events\Registered;


use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail; // Mailファサード

class AuthController extends Controller
{
    //ログイン画面の表示
    public function login()
    {
        return view('auth.login');
    }

    //会員登録処理
    public function register(Request $request)
    {
        $input = $request->all();

        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class),
            ],
        ])->validate();

        $user = User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
        ]);

        event(new Registered($user));
        Auth::login($user);

        return redirect('/register/success');
    }

    //会員登録後の処理
    public function success()
    {
        return view('auth.confirm');
    }

    //プロフィール表示
    public function profile()
    {
        return view('profile');
    }

    //プロフィール更新処理
    // public function update()
    // {

    // }
}
