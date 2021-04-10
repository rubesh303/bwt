@extends('layouts.admin_app')

@section('content')
<div class="container">
   <div class="row layout-top-spacing layout-spacing">
                    <div class="col-lg-12">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>Add Category</h4>
                                    </div>                  
                                </div>
                            </div>
                            @if(session()->has('message'))
                            <div class="alert alert-success">
                                {{ session()->get('message') }}
                            </div>
                            @endif
                            <div class="widget-content widget-content-area">
                             <form class="col-md-8 mx-auto"action="{{ url('updateblog') }}"method="post"enctype="multipart/form-data">

                                 @csrf
                                    <input type="hidden"name="id"value="{{$blog->id}}">
                                    <div class="form-group row align-items-center">
                                        <label class="col-sm-4 col-form-label text-label">Blog Title*</label>
                                        <div class="col-sm-8">
                                            <div class="input-group">
                                                <input type="text"value="{{$blog->title}}" class="form-control"name="title" placeholder="Blog Title">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row align-items-center">
                                        <label class="col-sm-4 col-form-label text-label">Select Category*</label>
                                        <div class="col-sm-8">
                                            <div class="" data-select2-id="22">
                                                <select class="form-control  basic"name="category_id">
                                                 @foreach($categories as $cate)
                                                 <?php if($cate->id==$blog->category_id){
                                                 	$selected="selected";
                                                 }else{
                                                 	$selected="";
                                                 }
                                                 ?>
                                                 <option value="{{ $cate->id }}"{{$selected}}>{{ $cate->category_name }}</option>
                                                 @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row align-items-center">
                                        <label class="col-sm-4 col-form-label text-label">Blog Image*</label>
                                        <div class="col-sm-8">
                                            <div class="input-group">
                                              <input type="file"name="bimg" class="form-control-file" id="exampleFormControlFile1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row align-items-center">
                                        <label class="col-sm-4 col-form-label text-label">Date*</label>
                                        <div class="col-sm-8">
                                            <div class="input-group">
                                                <input type="date"name="bdate"value="{{$blog->title}}" class="form-control" placeholder="date">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row align-items-center">
                                        <label class="col-sm-4 col-form-label text-label">Description*</label>
                                        <div class="col-sm-8">
                                            <div class="input-group">
                                                <textarea class="summernote" name="desc" id="summernote">{{$blog->desc}}</textarea>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="float-right pt-5">
                                    <input type="submit" class="btn btn-sm  btn-outline-primary"value="SUBMIT">
                                    <button type="button" class="btn btn-sm  btn-outline-danger">CANCEL</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
</div>
@endsection
