<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Man;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Request;

class CarsController extends Controller
{
    public function persons(){
        return Car::all();
    }

    public function addmen(Request $request){
        
        $request->validate([
            'name'=>'required | min:3',
            'email'=>'required | email'
        ]);

            $data = new Man();
            $data->name = $request->name;
            $data->email = $request->email;
             
        if($data->save()){
            return "New person validated and added";
        }
        
    
    else
    {
        return "Not ADDED";
    }
        

       
       
}

public function updatecar(Request $request){
    $data = Car::find($request->id);

    $data->id = $request->id;
    $data->car_names = $request->car_names;
    $data->man_id = $request->man_id;

    if($data->save()){
        return "New Car saved";
    }

    else{
        return "New CAR not saved!!!";
    }
}

public function cardelete($id){
    $data = Car::find($id);
    
    if($data->delete()){
        return "CAr Deleted";
    }

    else{
        return "CAR NOT DELETED";
    }

}

public function searchcar($name){
    $data = Car::where('car_names', 'like', "%$name%")->get();
    

    if($data){
        return $data;
    }
    else{
        return "DATA Not Found!!!";
    }
    
}
}