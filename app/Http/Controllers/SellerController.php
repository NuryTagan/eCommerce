<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Seller;
use Illuminate\Http\Request;

class SellerController extends Controller
{
    public function seller(){
        return Seller::find(1)->product;
    } 
    public function sellerMany(){
        return Seller::find(1)->product;
    }
}
