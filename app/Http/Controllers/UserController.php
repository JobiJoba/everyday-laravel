<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function index()
    {
        return view('users.index');
    }

    public function withInteger($anInteger)
    {
        return view('users.index', ['anInteger' => $anInteger]);
    }

    public function test()
    {

    }
}
