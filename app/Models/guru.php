<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class guru extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = ['nama', 'umur'];
    protected $table = "guru";
    protected $dates = ['deleted_at'];
}
