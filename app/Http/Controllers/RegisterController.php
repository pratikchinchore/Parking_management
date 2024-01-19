<?php

namespace App\Http\Controllers;

use App\Models\Register;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function store(Request $request)
    {
        Register::create([
            'name' => $request->name,
            'mobile' => $request->mobile,
            'company' => $request->company,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        return redirect('/allotment');

        // return redirect()->back()->with('success','Registration completed');
    }
}
