@extends('layout.admin')
@section('head')
@endsection
@section('content')
<div class="content-wrapper">

            <!-- Content Header (Page header) -->
            <section class="content-header">
               
               <div class="header-title">
                  <h1>Reporter</h1>
                  
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
                                 <h4>View Reporter</h4>
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
                                       <th>Reporter Name</th>
                                       <th>Email</th>
                                       <th>Reporter Mobile</th>
                                       <th>Reporter Gender</th>
                                       <th>Reporter Image</th>
                                       <th>Action</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                     @foreach($data as $k=>$value)

                                    <tr>
                                        <td>{{$k+1}}</td>
                                        <td>{{$value->reporter_name}}</td>
                                        <td>{{$value->email}}</td>
                                        <td>{{$value->reporter_mobile}}</td>
                                        <td>{{$value->reporter_gender}}</td>
                                        <td> <img src='{{url("image/$value->reporter_image")}}'  width="45" height="45" alt="user"></a>
                       </td>
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