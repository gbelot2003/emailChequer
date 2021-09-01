<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainControll extends Controller
{
    public function index()
    {

        return view('welcome');
    }

    public function send(Request $request)
    {
        dd($request->all());
    }
}
