<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class registerController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Register'
        ]);
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:25',
            'name' => ['required','min:5','max:15'],
            'email' => ['required','email:dns','unique:users'],
            'password' => ['required','min:5','max:20']
        ]);

        //$validatedData['password'] = bycrypt($validatedData['password']);
        $validatedData['password'] = Hash::make($validatedData['password']);
        User::create($validatedData);
        $request->session()->flash('success', 'Registration Successfull! Please Login');
        return redirect('/login');
    }
}
