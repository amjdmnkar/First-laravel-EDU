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
    public function show($id)
{
    $names = ['1' => 'John', '2' => 'Jane', '3' => 'Doe'];

    $username = 'unknown';

    if (array_key_exists($id, $names)) {
        $username = $names[$id];
    }

    return view('UserShow', ['name' => $username]);
}

public function index()
{
    $names = ['1' => 'John', '2' => 'Jane', '3' => 'Doe'];

    return view('users', ['names' => $names]);
}
}