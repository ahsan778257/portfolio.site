<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerInfoController extends Controller
{
    public function index(){


        return view('front-end.homes.home');
    }
    public function customerInfoSave(Request $request){
           $customers = new Customer();
           $customers->first_name    =   $request->first_name;
           $customers->last_name     =   $request->last_name;
           $customers->email         =   $request->email;
           $customers->message       =   $request->message;
           $customers->save();


        return redirect('/')->with('message', 'Your message successfully send');
    }
}
