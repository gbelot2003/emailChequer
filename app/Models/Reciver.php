<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reciver extends Model
{
    use HasFactory;

    protected $fillable = ['email', 'name'];
}
