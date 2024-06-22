<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    protected $table = 'anggota';
    
    public function hadiahs()
    {
        return $this->belongsToMany(Hadiah::class, 'anggota_hadiah', 'anggota_id', 'hadiah_id');
    }
}
