<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
          
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required|string|min:3|max:50|regex:/^[a-zA-Z0-9_]+$/',
            'email' => 'required|email',
            'password' => 'required|string|min:6|max:20',
        ]);
    
        $username = filter_var($validatedData['username'], FILTER_SANITIZE_STRING);
        $email = filter_var($validatedData['email'], FILTER_SANITIZE_EMAIL);
        $password = htmlspecialchars($validatedData['password'], ENT_QUOTES, 'UTF-8');
    
        
        $user = new User();
        $user->username = $username;
        $user->email = $email;
        $user->password = bcrypt($password); 
        $user->save();
    
        return response()->json(['message' => 'User created successfully!']);
       
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
