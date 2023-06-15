<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bebek extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function kandang() {
        return $this->belongsTo(Kandang::Class, 'kandang_id');
    }
    
    protected $fillable = [
        'umur',
        'kategori',
        'kelamin',
        'kandang_id',
        'tag',
        'tempat',
        'jumlah',
        'user_id'
    ];
}
