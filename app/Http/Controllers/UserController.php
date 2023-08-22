<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function profile()
    {
        return view('user.index', [
            'title' => "Profile",
            'active' => "profile",
            'user' =>  User::where('id', auth()->user()->id)->first()
        ]);
    }
}
