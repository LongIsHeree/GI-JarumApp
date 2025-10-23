<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class AuthController extends Controller
{
    public function index(): View
    {
        return view('login/login');
    }
    public function signIn(Request $request)
    {
        return redirect()->route('content.dashboard');
    }
    public function signOut()
    {
        Session::flash('msgOut', 'You have successfully signed out');
        return redirect('/');
    }
}
