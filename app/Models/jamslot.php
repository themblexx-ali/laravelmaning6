<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JamSlot extends Model
{
    protected $fillable = [
        'tipe_hari',
        'jam',
    ];
}
