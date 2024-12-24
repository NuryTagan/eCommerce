<?php

namespace App\Http\Controllers;

use App\Models\Man;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $men = Man::all();
        return ["RESULT"=>$men];
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        Man::insert([
            'name'=>$request->name,
            'email'=>$request->email
        ]);
        return "CREATED Function";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   
        return "Store Function";
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = Man::find($id);
        return ["result"=>$data];
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {

        $post = Man::find($id);

        if (!$post) {
            return response()->json([
                'error' => 'Post not found.'
            ], 404);
        }
    
        return response()->json([
            'success' => true,
            'data' => $post
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return "UPDATED Function";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
