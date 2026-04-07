<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'nama',
        'no_hp',
        'tanggal',
        'jam_slot_id',
        
        'payment_method',
        'payment_status',
        'bukti_transfer',
        'total_harga'
    ];
}
