<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    protected $table = 'jadwals';

    public function lapangan()
    {
        return $this->belongsTo(Lapangan::class);
    }
}
