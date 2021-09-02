<?php

namespace App\Imports;

use App\Models\Emailconter;
use Maatwebsite\Excel\Concerns\ToModel;

class EmailsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Emailconter([
            'email' => $row[0],
        ]);
    }
}
