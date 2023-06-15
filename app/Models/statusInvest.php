<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class statusInvest extends Model
{
    use HasFactory;

    public function invest() {
        return $this->belongsTo(invest::Class, 'invest_id');
    }

    protected $fillable = [
        'status',
        'nominal',
        'user_id',
        'invest_id'
    ];
}
