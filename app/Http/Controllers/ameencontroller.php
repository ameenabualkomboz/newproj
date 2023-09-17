<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use App\Rules\countword;
use App\Rules\WordCount;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ameencontroller extends Controller
{
   function ameen() { 

    return view('ameen');
    
   } 
   function ameendata(Request $request)  {

    // dd($request->input('name'));
    $name = $request->name;
    $email = $request->email;
    $age = $request->age;
    $phone = $request->phone;

    return view('ameendata',compact('name','email','age','phone'));
    
   }


   function form2() {
        return view('form2');
   }
   

   function form2_data(Request $request) {
        $request->validate([
        'name'=>'required|min:4|max:20',
        'email'=>'required|ends_with:@gmail.com',
        'age'=>'required|gt:20',
        'specialty'=>'required'  ,
        'message' => ['required', new wordCount(8) ]  
       ]);
    
    $name =$request->name;
    $email =$request->email;
    $age =$request->age;
    $specialty =$request->specialty;
    $message=$request->message;
    
    $data = $request->except('_token');
    Mail::to('admin@gmail.com')->send(new TestMail($data));


        return view('form2_data',compact('name','email','age','specialty','message'));
   }

   function form3() {
          return view('form3');
   }
   
   function form3_data(Request $request) {        
     dd($request->all());
     
   
}
   
function contact() {
     return view('contact.contactus');
     
}
     function contactdata(Request $request) {
     $request->validate([
          "name" => 'required',
          "email" => 'required|ends_with:@gmail.com',
          "password" => ['required','min:8','confirmed'],
          "phone" => 'required',
          'gender'=>'required',
          'hobbies'=>'required',
          "levles" => 'required',
          'bio'=>['required',new WordCount(3)]
     ]);   
      dd($request->all());
 
     }


     function orders() {
               return 'hallo';
     }
}

