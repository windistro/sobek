<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bebek extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'umur',
        'status',
        'telurWeekly',
        'kandang_id',
    ];
}
