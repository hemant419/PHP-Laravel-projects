<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\subcategory;
use App\Models\category;

class subcategoryController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth:admin');
    }
     public function index()
    {
        $get=Subcategory::join('categories',"subcategories.category_id",'=','categories.category_id')->get(['subcategories.*','categories.*']);
        $select['data']=$get;
        return view("admin.viewsubcategory",$select);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $select['title']="Add SubCategory";
        $select['url']="admin/subcategory";
        $select['category']=Category::get();
        return view("admin.addSubcategory",$select);
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
            'subcategory_name'=>'required',
            'category_id'=>'required'
        ],[
            'subcategory_name.required'=>"Category must insert",
            'category_id.required'=>"Category must insert"
        ]);
            $subcategory= new subcategory();
            $subcategory->subcategory_name=$request->subcategory_name;
            $subcategory->category_id=$request->category_id;
            $subcategory->subcategory_status=1;
            $subcategory->save();

            return redirect("admin/Subcategory/create")->with("success","SubCategory has saved");

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
        $select['title']="Edit SubCategory";
        $select['url']="admin/subcategory/$id";
        $find=subcategory::find($id);
        $select['edit']=$find;
        $select['category']=Category::get();
        return view("admin.addsubcategory",$select);
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
            'subcategory_name'=>'required'
        ],[
            'subcategory_name.required'=>"Category must insert"
        ]);
        $subcategory=subcategory::find($id);
        $subcategory->subcategory_name=$request->subcategory_name;
        $subcategory->category_id=$request->category_id;
        
        $subcategory->save();

        return redirect("admin/subcategory")->with("success","SubCategory has saved");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subcategory=subcategory::find($id);
        $subcategory->delete();

        return redirect("admin/Subcategory")->with("success","SubCategory has removed");
    }
}
