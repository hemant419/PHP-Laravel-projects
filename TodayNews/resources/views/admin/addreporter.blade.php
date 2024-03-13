@extends('layout.admin')
@section('head')
@endsection
@section('content')
<div class="content-wrapper">

            <!-- Content Header (Page header) -->
            <section class="content-header">
               <!-- <div class="header-icon">
                  <i class="fa fa-users"></i>
               </div> -->
               <div class="header-title">
                  <h1>Reporter</h1>
                  
               </div>
            </section>
            <!-- Main content -->
            <section class="content">
               <div class="row">
                  <!-- Form controls -->
                  <div class="col-sm-12">
                     <div class="panel panel-bd lobidrag">
                        <div class="panel-heading">
                           <div class="btn-group" id="buttonlist"> 
                              <a class="btn btn-add " href="#"> 
                              <i class="fa fa-list"></i>{{$title}}</a>  
                           </div>
                        </div>
                        <div class="panel-body">
                              @if(session('success'))
                              <div class="alert alert-success">
                                 <strong>{{session('success')}}</strong>
                              </div>
                              @endif
                           <form method="post" action="{{url($url)}}" class="col-sm-12" enctype="multipart/form-data">
                              @csrf
                              @isset($edit)
                              @method("PUT")
                              @endisset
                              <div class="form-group">
                                 <label for="">Reporter Name</label>
                                 <input type="text" class="form-control" name="reporter_name" value="@if($errors->any()){{old('reporter_name')}}@elseif(isset($edit)){{$edit->reporter_name}}@endif">
                                 @error('reporter_name')
                                 <span>{{$message}}</span>
                                 @enderror
                              </div>
                              <div class="form-group">
                                 <label for="">Reporter Email</label>
                                 <input type="text" class="form-control" name="email" value="@if($errors->any()){{old('email')}}@elseif(isset($edit)){{$edit->email}}@endif">
                                 @error('email')
                                 <span>{{$message}}</span>
                                 @enderror
                              </div>
                              <!-- <div class="form-group">  
                                 <label for="">Password</label>
                                 <input type="text" class="form-control" name="password" >
                                 @error('password')
                                 <span>{{$message}}</span>
                                 @enderror
                              </div> -->
                              <div class="form-group">  
                                 <label for="">Reporter Mobile</label>
                                 <input type="text" class="form-control" name="reporter_mobile" value="@if($errors->any()){{old('reporter_mobile')}}@elseif(isset($edit)){{$edit->reporter_mobile}}@endif">
                                 @error('reporter_mobile')
                                 <span>{{$message}}</span>
                                 @enderror
                              </div>
                              <div class="form-group">  
                                 <label for="">Reporter Gender</label>
                                 <input type="radio" id="male" name="reporter_gender" value="Male"  @if(isset($edit)) @if($edit->reporter_gender=="Male") {{"checked"}} @endif @endif>
                                 <label for="male">Male</label>
                                 <input type="radio" id="female" name="reporter_gender" value="Female" @if(isset($edit)) @if($edit->reporter_gender=="Female") {{"checked"}} @endif @endif>
                                 <label for="female">Female</label><br>
                        
                                 @error('reporter_gender')
                                 <span>{{$message}}</span>
                                 @enderror
                              </div>
                              <div class="form-group">  
                                 <label for="">Reporter Image</label>
                                 <input type="File" class="form-control" name="reporter_image" value="@if($errors->any()){{old('reporter_image')}}@elseif(isset($edit)){{$edit->reporter_image}}@endif">
                                 @error('reporter_image')
                                 <span>{{$message}}</span>
                                 @enderror
                                 @isset($edit)
                                 <img src='{{url("image/$edit->reporter_image")}}'  width="45" height="45" alt="user">
                                 @endisset
                              </div>
                    
                              <div class="reset-button">
                                 
                                 <input type="submit" value='Add' class="btn btn-primary">
                              </div>
                           </form>
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