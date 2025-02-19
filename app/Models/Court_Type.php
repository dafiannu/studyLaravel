<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Court_Type extends Model
{
    public function type () {
        return $this->hasMany(Court::class); 
    }
}
