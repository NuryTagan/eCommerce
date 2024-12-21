<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function addstudent(Request $request) {
        $student = new Student();
        $student->username = $request->username;
        $student->email = $request->email;
        $student->password = $request->password;

        $student->save();

        if($request){
            return redirect('list');
            
        }
        else{
            echo "Not created!";
        }

        // return $request->username;
    }


    public function list(){
        $student = Student::paginate(3);
        return view('DisplaySTD', compact('student'));
    }

    
    public function search(Request $request){
        $studentData = Student::where('username', 'like', "%$request->search%")->get();
        
        return view('DisplaySTD', ['student'=>$studentData, 'search'=>$request->search]);
    }

    public function deleteMultiple(Request $request){
        $result = Student::destroy($request->ids);
        
        if($request){
            return redirect('list');
        }
        else {
            "Student not deleted";
        }
    }
}
