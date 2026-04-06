<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lapangan extends Model
{
    protected $table = 'lapangans';

    public function jadwals()
    {
        return $this->hasMany(Jadwal::class);
    }
}