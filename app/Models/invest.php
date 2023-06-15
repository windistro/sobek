<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class invest extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function user() {
        return $this->belongsTo(User::Class, 'user_id');
    }

    protected $fillable = [
        'peternakan',
        'deskripsi',
        'durasi',
        'user_id'
    ];
}
