<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    public function men(){
        return $this->belongsTo('App\Models\Man', 'man_id', 'id');
    }
}
