<?php

namespace App\Http\Controllers;

use ErrorException;
use App\Mail\TestMail;
use App\Models\Emailconter;
use Illuminate\Http\Request;
use App\Helper\HelperFunctions;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class PersonalmailController extends Controller
{
    public function index()
    {
        $data = Emailconter::all();
        return view('personal', compact('data'));
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

        try {
            $cdata = Emailconter::where('eid', $eid)->firstOrFail();
            $cdata->status = true;
            $cdata->save();
        } catch (ErrorException $e) {
            Log::info('Error on entry.');
        }



    }
}
