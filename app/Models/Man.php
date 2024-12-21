<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Man extends Model
{
    public function cars(){
        return $this->hasMany('App\Models\Car', 'man_id', 'id');
    }
}
