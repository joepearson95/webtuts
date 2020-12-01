<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Hash;
use Socialite;
use Str;
use App\Models\User;

class AccountController extends Controller
{
    public function index() {
        return view('account/account');
    }

    public function github() {
        return Socialite::driver('github')->redirect();
    }
    public function githubRedirect() {
        $user = Socialite::driver('github')->user();

        $user = User::firstOrCreate([
            'email' => $user->email
        ], [
            'name' => $user->name,
            'password' => Hash::make(Str::random(24))
        ]);

        Auth::login($user, true);
        return redirect('/home');
    }
}
