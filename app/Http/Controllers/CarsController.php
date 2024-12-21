<?php

namespace App\Http\Controllers;

use App\Models\Man;
use Illuminate\Http\Request;

class CarsController extends Controller
{
    public function persons(){
        return Man::find(1)->cars;
    }
}
