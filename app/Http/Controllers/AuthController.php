<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index(): View
    {
        return view('login/login');
    }
    public function signIn(Request $request): RedirectResponse
    {
        //dd($request->all());
        $data = $request->validate([
            'username' => 'required|string',
            'password'=>'required|min:6'
        ]);
        $user = DB::table('users')->where('username', $data['username'])->first();
         if ($user && $data['password'] == $user->password) {
        $request->session()->put('user', [
            'id' => $user->id,
            'username' => $user->username,
        ]);
         return redirect()->route('content.dashboard');
    }
   
    return back()->withErrors([
        'username' => 'Username atau password salah!'
    ])->onlyInput('username');
    
    }
    public function signInValidate(Request $request){
      $data = $request->validate([
        'username' => 'required|string',
        'password' => 'required|min:6'
    ]);

    // Cek apakah username ada di database
    $user = User::where('username', $data['username'])->first();

    if (!$user) {
        return response()->json([
            'status' => 'error',
            'message' => 'These credentials do not match our records (username not found).'
        ], 404);
    }

    // Cek apakah password cocok
    if (!$data['password'] == $user->password) {
        return response()->json([
            'status' => 'error',
            'message' => 'Incorrect password.'
        ], 401);
    }

    // Jika keduanya cocok
    return response()->json([
        'status' => 'success',
        'message' => 'Credentials verified successfully.',
        'user' => $user
    ]);
}
    public function signOut()
    {
        Session::flash('msgOut', 'You have successfully signed out');
        return redirect('/');
    }
}
