<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MainControll extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function send(Request $request)
    {
        $data = [
            'name' => $request->get('name'),
            'body' => $request->get('body')
        ];

        Mail::to($request->get('email'))->send(new TestMail($data));
        return redirect()->back();
    }

}
