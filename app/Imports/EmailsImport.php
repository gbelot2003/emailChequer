<?php

namespace App\Imports;

use App\Mail\TestMail;
use App\Models\Emailconter;
use App\Helper\HelperFunctions;
use Illuminate\Support\Facades\Mail;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Contracts\Queue\ShouldQueue;
use Maatwebsite\Excel\Concerns\WithChunkReading;

class EmailsImport implements ToModel, WithChunkReading, ShouldQueue
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $helper = new HelperFunctions();

        $conter = Emailconter::create([
            'email'     => $row[0],
            'status'    => false,
            'eid'       => $helper->generateRandomString(25)
        ]);

        $data = [
            'name' => $row[1],
            'body' => "this is a text helper for email testing",
            'eid' => $conter->eid
        ];

        Mail::to($conter->email)->send(new TestMail($data));
    }

    /**
     * Let process by 100 at time
     *
     * @return integer
     */
    public function chunkSize(): int
    {
        return 100;
    }
}
