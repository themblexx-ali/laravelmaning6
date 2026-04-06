<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class booking extends Model
{
    protected $fillable = [
        'nama',
        'no_hp',
        'tanggal',
        'jam_slot_id',
        'pembayaran',
    ];
}
