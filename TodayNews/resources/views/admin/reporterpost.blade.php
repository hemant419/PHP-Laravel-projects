@extends('layout.admin')
@section('head')
@endsection
@section('content')
<div class="content-wrapper">

            <!-- Content Header (Page header) -->
            <section class="content-header">
               
               <div class="header-title">
                  <h1>Reporter Post</h1>
                  
               </div>
               
            </section>
            <!-- Main content -->
            <section class="content">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="panel panel-bd lobidrag">
                        <div class="panel-heading">
                           <div class="btn-group" id="buttonexport">
                              <a href="#">
                                 <h4>View Post</h4>
                              </a>
                           </div>
                        </div>
                        <div class="panel-body">
                        <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                           
                           <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                           <div class="table-responsive">
                              @if(session('success'))
                              <div class="alert alert-success">
                                 <strong>{{session('success')}}</strong>
                              </div>
                              @endif
                              <table id="dataTableExample1" class="table table-bordered table-striped table-hover">
                                 <thead>
                                    <tr class="info">
                                       <th>No</th>
                                       <th>Post Id</th>
                                       <th>Reporter Id</th>
                                       <th>Category Id</th>
                                       <th>Subcategory Id</th>
                                       <th>Post Image</th>
                                       <th>Post Title</th>
                                       <th>Post Description</th>
                                       <th>Post Status</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                     @foreach($data as $k=>$value)

                                    <tr>
                                        <td>{{$k+1}}</td>
                                        <td>{{$value->post_id}}</td>
                                        <td>{{$value->reporter_id}}</td>
                                        <td>{{$value->category_id}}</td>
                                        <td>{{$value->subcategory_id}}</td>
                                        <td> <img src='{{url("image/$value->post_image")}}'  width="45" height="45" alt="user"></a> </td>
                                        <td>{{$value->post_title}}</td>
                                        <td>{{$value->post_description}}</td>
                                        <td>{{$value->post_status}}</td>
                                   <!-- <td> <img src='{{url("image/$value->reporter_image")}}'  width="45" height="45" alt="user"></a> </td> -->
                                        <td>
                                            <a href='{{url("admin/reporter/$value->reporter_id/edit")}}' class="btn btn-success">Edit</a>
                                            <form action='{{url("admin/reporter/$value->reporter_id/")}}' method="post" onsubmit='return confirm("Are you sure remove this item ?")'>
                                                @csrf
                                                @method('DELETE')
                                                <input type="submit" class="btn btn-danger" value="Delete" >
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               
            </section>
            <!-- /.content -->
         </div>
         @endsection
         @section("script")
         @endsection