<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Court extends Model
{
    public function type () {
        return $this->belongsTo(Court_Type::class, 'court__type_id');
    }
}
