<?php

namespace App\Http\Controllers\Users;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisteredUser extends Controller
{
    //
    public function create(){
        return view('auth.register');
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'=>'required|string|max:255',
            'email'=>'required|string|email|max:255',
            'password'=>'required|string|min:8',
            'confirm_password'=>'required|string|min:8|same:password',
        ]);
        // dd($validated);
        $user = User::create($validated);

        Auth::login($user);
        return redirect('/login');
    }
}
