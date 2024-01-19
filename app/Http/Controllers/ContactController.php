<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\contact;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class ContactController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function store(Request $request)
    {
        contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);
        return redirect('/allotment');
         }


}
