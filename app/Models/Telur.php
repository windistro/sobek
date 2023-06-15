<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Telur extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function kandang() {
        return $this->belongsTo(Kandang::Class, 'kandang_id');
    }

    protected $fillable = [
        'telurEarned',
        'tanggal',
        'kandang_id'
    ];
}
