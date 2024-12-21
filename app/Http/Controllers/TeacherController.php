<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    





    public function addteacher(Request $request){
        $data = Teacher::insert([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
        ]);
        
        $list = Teacher::all();

        return view('teacherslist', compact('list'));
    }

    public function list(){
        $list = Teacher::all();
        return view('teacherslist', compact('list'));
    }

    public function deleteMultiple(Request $request){
        $user = Teacher::destroy($request->ids);
        return redirect('list');
    }

    public function delete($id) {
      Teacher::destroy($id);
        
    }

    public function edit($id){
        $edited = Teacher::find($id);
        return view('editteacher', compact('edited'));
    }

    public function updatestudent(Request $request, $id){
        $updated = Teacher::find($id);


        $updated->name = $request->name;
        $updated->email = $request->email;
        $updated->phone = $request->phone;
        $updated->save();

        return redirect('list');
    }

    
    
}
