<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hadiah extends Model
{
    protected $table = 'hadiah';
    
    public function anggotas()
    {
        return $this->belongsToMany(Anggota::class, 'anggota_hadiah', 'hadiah_id', 'anggota_id');
    }
}
