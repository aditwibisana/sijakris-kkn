<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use PhpParser\Node\Stmt\TryCatch;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class GoogleController extends Controller
{
    public function loginPage()
    {
        return view('pages.auth.login');
    }
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }
    public function handleGoogleCallback(Request $request)
    {
        try {
            $user = Socialite::driver('google')->user();
            dd($user);
            //$find_user = User::where('google_id', $user->getId())->first();
            //if ($find_user) {
            //
            //    Auth::login($find_user);
            //    DB::table('users')->where('google_id', $user->getId())->update([
            //        'last_login_at' => Carbon::now()->toDateTimeString(),
            //        'last_login_ip' => $request->getClientIp(),
            //    ]);
            //    return redirect()->intended('dashboard');
            //} else {
            //    $newUser = User::create([
            //        'name' => $user->getName(),
            //        'email' => $user->getEmail(),
            //        'avatar' => $user->getAvatar(), 'path',
            //        'google_id' => $user->getId(),
            //        'password' => bcrypt('12345678'),
            //        'last_login_at' => Carbon::now()->toDateTimeString(),
            //        'last_login_ip' => $request->getClientIp(),
            //    ]);
            //    Auth::login($newUser);
            //    return redirect()->intended('dashboard');
            //}
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
