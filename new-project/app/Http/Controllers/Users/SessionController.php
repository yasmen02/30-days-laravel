<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;


class SessionController extends Controller
{
    public function create(){
        return view('auth.login');
    }

    /**
     * @throws ValidationException
     */
    public function store(){
        $attributes = request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);
//dd(! Auth::attempt($attributes));
        if (!Auth::attempt($attributes)) {
            throw ValidationException::withMessages([
                'email' => 'Sorry, those credentials do not match.'
            ]);
        }

        request()->session()->regenerate();

        return redirect('/items');
    }
    public function destroy(){
       Auth::logout();
       return redirect('/');
    }
}
