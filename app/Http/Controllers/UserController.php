<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function profile()
    {
        return 'User Profile';
    }

    public function settings()
    {
        return 'User Settings';
    }
}