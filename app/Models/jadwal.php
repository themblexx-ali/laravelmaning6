<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    protected $table = 'jadwals';

    protected $fillable = [
        'lapangan_id',
        'nama_hari',
        'tipe_hari',
        'status',
    ];
    
    public function lapangan()
    {
        return $this->belongsTo(Lapangan::class);
    }
}
