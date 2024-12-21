<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{

    public function upload(Request $request) {
        $path = $request->file('file')->storeAs('public', 'sample.jpg');
        $fileArray = explode('/', $path);
        $fileName = $fileArray[0];
        return view('displayimage', ['path'=>$fileName]);
    }

















    public function user(Request $request) {
        return $request->input();
    }


    public function queries(){
        // $data = Student::where('id', '1')->get();
        // $data = Student::get();
        
        // $data = Student::first();
        

        // $data = Student::where('id', '1')->delete();

        // if($data){
        //     echo "deleted";
        // }
        // else{
        //     echo "Not Deleted";
        // }

        // $data = Student::find(5);
        
        // $data = [$data];

        // $data = Student::insert([
        //     'name'=>'Nury',
        //     'age'=>'36',
        //     'email'=>'tnurguly88@mail.ru'
        // ]);

        //  if($data){
        //     echo "inserted";
        // }
        // else{
        //     echo "Not inserted";
        // }

        // $data = Student::where('name', 'Nury')->update(['age'=>'36']);

        //  if($data){
        //     echo "updated";
        // }
        // else{
        //     echo "Not updated";
        // }

        $data = Student::where('name', 'Nury')->delete();

         if($data){
            echo "deleted";
        }
        else{
            echo "Not deleted";
        }

        

        // return view('student', ['users'=>$data]);
    }


    public function eXercise(){
        // $response = DB::table('users_data')->where('username', 'sdf')->update(['city'=>'Begencli']);

        // if($response){
        //     echo "Data is Updated";
        // }

        // else{
        //     echo "Data not Updated";
        // }

        $response = DB::table('users_data')->where('username', 'metbugat')->delete();

        if($response){
            echo "Data is DELETED";
        }

        else{
            echo "Data not DELETED";
        }

    }




    public function sentToDB(Request $request){
        // $request->validate([
        //     'username'=>'required | min:5 | max:10',
        //     'city'=>'required',
        //     'email'=>'required | email'
        // ]);
       
        // DB::table('users_data')->insert([
        //     'username'=>$request->username,
        //     'city'=>$request->city,
        //     'email'=>$request->email
        // ]);

        // $dataDB = DB::table('users_data')->get();
      
        // return view('displayDB', compact('dataDB'));
        

        // $response = DB::table('users')->get();
        // $response = DB::table('users')->first();
        // $response = [$response];
        // $response = DB::table('users')->where('id', '2')->get();
        // $response = DB::table('students_collage')->where('id', '1')->get();
        // return view ('ChatGpt', compact('response'));

    }


// public function getstudent(){
//     $data = \App\Models\Student::all();
//     // $sdata = new \App\Models\Student;

//     return view('about', compact('data'));
// }

// public function sentAPI(){
//     $response = Http::get(' https://jsonplaceholder.typicode.com/users/1');
//     return $response;
//     $response = $response->body();
//     return view('ChatGpt', ['data'=>json_decode($response)]);
// }


        // public function users(){
        //     $data = DB::select('select * from users');
        //     return view('about', compact('data'));
        // }





























// public function onlyadd (Request $request){
//     $data = $request->validate([
//        'name'=>'required',
//        'surname'=>'required',
//        'email'=>'required | email', 
//        'password'=>'required | min:8'
//     ]);

//     echo $data['name'];
    
//     echo $data['surname'];
//     echo $data['email'];
//     echo $data['password'];
    // return view('Last', compact('data'));  












//     public function addU(Request $data){
//         $data->validate([
//             'username'=>'required | min:8',
//             'city'=>'required',
//             'email'=>'required | email'
//         ], [
//              'city.city'=>'Select true city'

//         ]);
        
        
//         return $data;

//     }


//     public function entered() {
//         $name = "Nury";
//         $data = ['Nury', 'Serdar', 'Meret'];

//         return view('about', compact('data', 'name'));
//     }

// //    public function store(Request $request) {
// //         $request->validate([
// //             'name'=>'required | max:10',
// //             'email'=>'required | email',
// //             'password'=>'required'
// //         ]);
    
// //         return "You are entered";
// //    }


//     // public function checkuser(Request $request){
//     //     $data = $request->validate([
//     //         'username'=>'require',
//     //         'city'=>'required',
//     //         'email'=>'required | email | '

//     //     ]);

//     //     return('$data');
//     // }

//     public function show(){
//         return '<h1>This is show site</h1>';
//     }

//     public function add(){
//         return 'This is adding site';
//     }
    
//     public function delete(){
//         to_route('userform');
//     }

 

//     public function about($name){
//         return view('about', compact('name'));
//     }



















// public function addUser(Request $request){

//     $request->validate([ 
//         'username'=>'required | min:3 |max:15 | ends_with:a',
//         'city'=>'required | uppercase',
//         'email'=>'required | email | max:11'

//     ],
// [
//     'username.ends_with'=>'must end with a',
//     'city'=>'Enter uppet case',//Your custom message
//     'email'=>'Enter correct email adress'

// ]);
//     return $request;
    
// }



}