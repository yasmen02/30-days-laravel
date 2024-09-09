<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;


class UserController extends Controller
{
    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('users.show', compact('user'));
    }
}
