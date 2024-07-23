<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class usercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("register");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "name"=> ["required","string","max:155"],
            "email" => ["required", "string", "email", "max:255", "unique:users"],
            "username"=> ["required","string","max:155","unique:users"],
            "password"=> ["required","string","min:8" ,"confirmed"],
            "sex"=> ["required","string","in:male,female"],
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
         }

        $user = User::create([

            "name"=> $request->name,
            "username"=> $request->username,
            "email" => $request->email,
            "password"=> Hash::make($request->password) ,
            "sex"=> $request->sex,
        ]); 

        return redirect()->route("welcome")->with("success","");
    } 

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
