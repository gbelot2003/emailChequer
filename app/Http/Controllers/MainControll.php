<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use App\Models\Emailconter;
use Illuminate\Http\Request;
use App\Helper\HelperFunctions;
use App\Imports\EmailsImport;
use Illuminate\Support\Facades\Mail;
use Maatwebsite\Excel\Facades\Excel;

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
            'select_file'  => 'required|mimes:xls,xlsx'
        ]);

        $path1 = $request->file('select_file')->store('temp');
        $path = storage_path('app').'/'.$path1;


        Excel::import(new EmailsImport, $path);

        return redirect('/')->with('success', 'All good!');

    }
}
