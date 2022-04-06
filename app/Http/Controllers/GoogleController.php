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
}
