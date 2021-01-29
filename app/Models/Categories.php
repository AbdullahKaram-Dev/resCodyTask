<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;


    public function children()
    {
        return $this->hasMany(static::class, 'parent_id');
    }


    public function parent()
    {
        return $this->belongsTo(static::class);
    }

}
