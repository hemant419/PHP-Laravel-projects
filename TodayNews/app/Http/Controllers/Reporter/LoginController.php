<?php

namespace App\Http\Controllers\Reporter;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    
    public function showreporterLoginForm()
    {
        return view("reporter.login");
    }
    public function reporterlogin(Request $request)
    {
        
        $this->validate($request,[
            'email'=>'required',
            'password'=>'required',
        ]);
        
        if(Auth::guard('reporter')->attempt($request->only('email','password'))){
            // dd(Auth::guard('admin'));    
            return redirect("reporter/home");
        }else
        {
            return redirect()->back()->withInput()->with('err','Invalid Email or Password');
        }
    }
}
