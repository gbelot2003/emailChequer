<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use App\Models\Emailconter;
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
        $conter = Emailconter::create([
            'email' => $request->get('email'),
            'status' => false,
            'eid' => $this->generateRandomString()
        ]);

        $data = [
            'name' => $request->get('name'),
            'body' => $request->get('body'),
            'eid' => $conter->eid
        ];

        Mail::to($request->get('email'))->send(new TestMail($data));
        return redirect()->back();
    }

    public function confirmation()
    {
        $request = \request('email');
        $request = \request('eid');
        if (isset($request)){
            Emailconter::create([
                'email' => $request,
                'eid' => $request
            ]);
        }
    }

    public function generateRandomString($length = 10) {
        return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
    }

}
