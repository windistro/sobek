<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BahanBaku extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'nama',
        'jenis',
        'stok',
        'catatan',
        'user_id'
    ];
}
