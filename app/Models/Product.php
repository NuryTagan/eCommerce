<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function seller(){
        return $this->belongsTo('App\Models\Seller', 'seller_id', 'id');
    }

    
    
}