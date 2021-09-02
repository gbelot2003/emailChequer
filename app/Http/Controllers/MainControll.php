<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use App\Models\Emailconter;
use Illuminate\Http\Request;
use App\Helper\HelperFunctions;
use Illuminate\Support\Facades\Mail;

class MainControll extends Controller
{
    public function index()
    {
        $data = Emailconter::all();
        return view('welcome', compact('data'));
    }

    public function import(Request $request)
    {
        $this->validate($request, [
            'select_file'  => 'required|mimes:xls,xlsx,csv'
        ]);

        $path = $request->file('select_file')->getRealPath();

        dd($path);

    }

    public function send(Request $request)
    {
        $helper = new HelperFunctions();

        $conter = Emailconter::create([
            'email' => $request->get('email'),
            'status' => false,
            'eid' => $helper->generateRandomString(25)
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
}
