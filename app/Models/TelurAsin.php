<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TelurAsin extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'totalTelurAsin',
        'tanggalPembuatan',
        'tanggalKadaluarsa',
        'user_id'
    ];
}
