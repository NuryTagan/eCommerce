<?php

namespace App\Http\Controllers;

use App\Models\Personel;
use Illuminate\Http\Request;

class PersonelController extends Controller
{
    public function addpersonel(Request $request){
        $data = $request->validate([
            'name'=>'required',
            'surname'=>'required',
            'email'=>'required | email'
        ]);

        Personel::insert([
            'name'=> $request->name,
            'surname'=> $request->surname,
            'email'=> $request->email,
        ]);

        return redirect('listpersonel');
    }

    public function listpersonel(){
        $listpersonel = Personel::paginate(5);
        return view('listpersonel', compact('listpersonel'));
    }

    public function deletepersonel(Request $request, $id){
        Personel::destroy($id);
        return redirect('listpersonel');
    }

    public function editpersonel($id){
        $editpersonel = Personel::find($id);
        return view('editpersonel', compact('editpersonel'));
    }

    public function updatepersonel(Request $request, $id){
        
        $updatedpersonel = Personel::find($id);

        // $updatedpersonel->name = $request->name;
        // $updatedpersonel->surname = $request->surname;
        // $updatedpersonel->email = $request->email;
        // $updatedpersonel->save();

        $updatedpersonel->update([
            'name'=>$request->name,
            'surname'=>$request->surname,
            'email'=>$request->email,
        ]);

        return redirect('listpersonel');

    }

    public function search(Request $request){
        
        $listpersonel = Personel::where('name', 'like', '%'. $request->name .'%')->orWhere('surname', 'like', '%'. $request->name .'%')->get();
        return view('listpersonel', compact('listpersonel'));
    }

    public function deletemulti(Request $request){
        Personel::destroy($request->ids);
        return redirect('listpersonel');
    }
}
