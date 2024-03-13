<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\reporter_register;
use Hash;
class reportercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $get=reporter_register::get();
        $select['data']=$get;
        return view("admin.viewreporter",$select);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $select['title']="Add Reporter";
        $select['url']="admin/reporter";
        
        return view("admin.addreporter",$select);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'reporter_name'=>'required',
            'email'=>'required',
            'password'=>'required',
            'reporter_mobile'=>'required',
            'reporter_image'=>'required'
        ],[
            'reporter_name.required'=>"Reporter name is note inserted",
            'email.required'=>"Email is note inserted",
            'password.required'=>"Password is note inserted",
            'reporter_mobile.required'=>"Reporter mobile is note inserted",
            'reporter_image.required'=>"Reporter image is note inserted"
        ]);
        $image=$request->file("reporter_image");
        $image->move("image/",$image->getClientOriginalName());
        $reporter= new reporter_register();
        $reporter->reporter_name=$request->reporter_name;
        $reporter->email=$request->email;
        $reporter->password=Hash::Make($request->password);
        $reporter->reporter_mobile=$request->reporter_mobile;
        $reporter->reporter_gender=$request->reporter_gender;
        $reporter->reporter_image=$image->getClientOriginalName();
        $reporter->reporter_status=1;
        $reporter->save();

            return redirect("admin/reporter/create")->with("success","Reporter has added");


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $select['title']="Edit Reporter";
        $select['url']="admin/reporter/$id";
        $find=reporter_register::find($id);
        $select['edit']=$find;
        return view("admin.addreporter",$select);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'reporter_name'=>'required',
            'email'=>'required',
            'reporter_mobile'=>'required',
            'reporter_gender'=>'required'
           
        ],[
            'reporter_name.required'=>"Reporter name is note inserted",
            'email.required'=>"Email is note inserted",
            'reporter_mobile.required'=>"Reporter mobile is note inserted",
            'reporter_gender.required'=>"Reporter gender is note inserted"
            
        ]);
        $reporter=reporter_register::find($id);
        $reporter->reporter_name=$request->reporter_name;
        $reporter->email=$request->email;
        $reporter->reporter_mobile=$request->reporter_mobile;
        $reporter->reporter_gender=$request->reporter_gender;
        if($request->hasFile('reporter_image')){ 
            $image=$request->file("reporter_image");
            $image->move("image/",$image->getClientOriginalName());
            $reporter->reporter_image=$image->getClientOriginalName();
        }
        $reporter->save();

        return redirect("admin/reporter")->with("success","Reporter has saved");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
