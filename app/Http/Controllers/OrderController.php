<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function show($id)
    {
        return 'Show Order: ' . $id;
    }

    public function store()
    {
        return 'Store New Order';
    }
}