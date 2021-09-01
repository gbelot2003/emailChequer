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
        $data = Emailconter::all();
        return view('welcome', compact('data'));
    }

    public function send(Request $request)
    {
        $conter = Emailconter::create([
            'email' => $request->get('email'),
            'status' => false,
            'eid' => $this->generateRandomString(25)
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
        $eid = \request('eid');
        $cdata = Emailconter::where('eid', $eid)->first();
        $cdata->status = true;
        $cdata->save();
    }

    public function generateRandomString($length = 10) {
        return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
    }

}
