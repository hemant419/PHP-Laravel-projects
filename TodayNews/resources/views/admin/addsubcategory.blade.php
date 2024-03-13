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
                  <h1>SubCategory</h1>
                  
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
                           <form method="post" action="{{url($url)}}" class="col-sm-12">
                              @csrf
                              @isset($edit)
                              @method("PUT")
                              @endisset
                              <div class="form-group">
                                 <label for="">Select Category</label>
                                 <select name="category_id" class="form-control">
                                    <option value="">Select Category</option>
                                    @foreach($category as $c)
                                    <option value="{{$c->category_id}}"
                                       @if($errors->any())
                                          @if(old('category_id')==$c->category_id)
                                          {{"selected"}}
                                          @endif
                                       @elseif(isset($edit))
                                          @if($edit->category_id==$c->category_id)
                                          {{"selected"}}
                                          @endif
                                       @endif
                                    >{{$c->category_name}}</option>
                                    @endforeach
                                 </select>
                                 @error('category_id')
                                 <span>{{$message}}</span>
                                 @enderror
                              </div>
                              <div class="form-group">
                                 <label for="">SubCategory Name</label>
                                 <input type="text" class="form-control" name="subcategory_name" value="@if($errors->any()){{old('subcategory_name')}}@elseif(isset($edit)){{$edit->subcategory_name}}@endif">
                                 @error('subcategory_name')
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