<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    use HasFactory;

    protected $table = 'pengguna';

    /**
     * Mendefinisikan relasi one-to-one antara pengguna dan telepon.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function telepon()
    {
        return $this->hasOne(Telepon::class);
    }
}
