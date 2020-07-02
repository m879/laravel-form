<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Candidate;

class ATGController extends Controller
{
    public function login(){
        return view("login");
    }
 
    

    public function register(Request $request){
        $this->validate($request,[
            'name' =>'required',
            'email'=>'required',
            'pswd' =>'required|digits:6'
        ]);
   
    $candidates=new Candidate;
    $candidates->name=$request->input('name');
    $candidates->email=$request->input('email');
    $candidates->pswd=$request->input('pswd');
    $candidates->save();
    return redirect('/')->with('response','Register Successfully');
    
    }


}
