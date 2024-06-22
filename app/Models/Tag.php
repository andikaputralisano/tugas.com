<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    /**
     * Get the article that owns the tag.
     */
    public function article()
    {
        return $this->belongsTo('App\Models\Article');
    }
}
