<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:admin')->except("logout");
    }
    public function showAdminLoginForm()
    {
        return view("admin.login");
    }
    public function showUserLoginForm()
    {
        return view("login");
    }
    public function showreporterLoginForm()
    {
        return view("reporter.login");
    }
    public function adminlogin(Request $request)
    {
        
        $this->validate($request,[
            'email'=>'required',
            'password'=>'required',
        ]);
        
        if(Auth::guard('admin')->attempt($request->only('email','password'))){
            // dd(Auth::guard('admin'));    
            return redirect("admin/home");
        }else
        {
            return redirect()->back()->withInput()->with('err','Invalid Email or Password');
        }
    }
    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect("admin/login");  
    }
}
