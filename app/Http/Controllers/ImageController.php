<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function uploadimage(Request $request){
       $path = $request->file('file')->store('public');
       $pathArr = explode('/', $path);
       $imagepath = $pathArr[1];
       $image = new Image();
       $image->path = $imagepath;
       return redirect('imglist');

        
    }

    public function imglist(){
        $imglist = Image::all();

        return view('displayimage', compact('imglist'));
    }
}
