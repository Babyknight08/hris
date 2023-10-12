<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(){
        return view('user');
    }
    
    public function table(){
        $data = User::orderBy('id', 'DESC')->get();
        return ['data' => $data];
    } 

    public function store(Request $request) {
        $data = $request->validate([
            'username' => 'required',
            'password' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'address' => 'required',
            'email_address' => 'required',
        ]);
    
        User::create($data); 
    }

    public function view(Request $request) {
        $data = User::find($request->id)->first();
        return response()->json($data);
    }
    
}
