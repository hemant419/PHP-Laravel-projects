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
                  <h1>Category</h1>
                  
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
                              <i class="fa fa-list"></i> {{$title}}</a>  
                           </div>
                        </div>
                        <div class="panel-body">
                              @if(session('success'))
                              <div class="alert alert-success">
                                 <strong>{{session('success')}}</strong>
                              </div>
                              @endif
                           <form method="post" action="{{url($url)}}" class="col-sm-12">
                              @csrf
                              @isset($edit)
                              @method("PUT")
                              @endisset
                              <div class="form-group">
                                 <label for="">Category Name</label>
                                 <input type="text" class="form-control" name="category_name" value="@if($errors->any()){{old('category_name')}}@elseif(isset($edit)){{$edit->category_name}}@endif">
                                 @error('category_name')
                                 <span>{{$message}}</span>
                                 @enderror
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