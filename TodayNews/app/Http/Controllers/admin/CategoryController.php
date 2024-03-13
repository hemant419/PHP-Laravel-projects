<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\category;

class CategoryController extends Controller
{
     public function index()
    {
        $get=Category::get();
        $select['data']=$get;
        return view("admin.viewCategory",$select);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $select['title']="Add Category";
        $select['url']="admin/category";
        
        return view("admin.addCategory",$select);
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
            'category_name'=>'required'
        ],[
            'category_name.required'=>"Category must insert"
        ]);
            $category= new Category();
            $category->category_name=$request->category_name;
            $category->category_status=1;
            $category->save();

            return redirect("admin/category/create")->with("success","Category has saved");

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
        $select['title']="Edit Category";
        $select['url']="admin/category/$id";
        $find=Category::find($id);
        $select['edit']=$find;
        return view("admin.addCategory",$select);
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
            'category_name'=>'required'
        ],[
            'category_name.required'=>"Category must insert"
        ]);
        $category=Category::find($id);
        $category->category_name=$request->category_name;
        
        $category->save();

        return redirect("admin/category")->with("success","Category has saved");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category=Category::find($id);
        $category->delete();

        return redirect("admin/category")->with("success","Category has removed");
    }
}
