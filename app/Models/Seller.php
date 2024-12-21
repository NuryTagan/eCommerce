<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    use HasFactory;

    public function product(){
        return $this->hasMany('App\Models\Product', 'seller_id', 'id');
    }
}
