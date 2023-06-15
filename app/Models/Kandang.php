<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kandang extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function user() {
        return $this->belongsTo(User::Class, 'user_id');
    }

    public function bebek() {
        return $this->hasMany(Bebek::Class);
    }

    public function telur() {
        return $this->hasMany(Bebek::Class);
    }

    protected $fillable = [
        'name',
        'kategori',
        'kapasitas',
        'totalBebek',
        'user_id'
    ];
}
