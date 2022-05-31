<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyregisterController extends Controller
{
    public function create()
    {
        return view('register.create');
    }
    public function store()
    {
        $attributes = request()-> validate([
            'username' => 'required|min:3|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|min:7|max:255',
        ]);

        dd('success validation success');

        User::create($attributes);

    }
}
