<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'tanggal',
        'total',
        'terjual',
        'user_id'
    ];
}
