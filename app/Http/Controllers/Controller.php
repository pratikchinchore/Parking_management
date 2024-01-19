<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\contact;
use App\Models\Register;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function home(){

    }
    public function store(Request $request)
  {
    $contact = new contact();
    $contact->name = $request->name;
    dd($request->name);
    $contact->email = $request->email;
    $contact->subject = $request->subject;
    $contact->message = $request->message;
    $contact->save();
    return response()->json(['success'=>'Data is successfully added']);
  }

public function create(Request $request){
     $register = new Register();
     $register -> name =$request['name'];  //input name from form
     $register -> email=$request ['email'] ;// input email from form


}
}
