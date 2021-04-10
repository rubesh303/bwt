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
                                <form action="{{ url('updatecategory') }}"method="post"class="col-md-8 mx-auto">
                                      @csrf
                                    <div class="form-group row align-items-center">
                                        <label class="col-sm-4 col-form-label text-label">Category Name*</label>
                                        <input type="hidden"name="id"value="{{$category->id}}">
                                        <div class="col-sm-8">
                                            <div class="input-group">
                                                <input type="text"name="category_name"value="{{$category->category_name}}" class="form-control" placeholder="Category Name">
                                            </div>
                                        </div>
                                    </div>


                                    <div class="float-right pt-5">
                                    <input type="submit" class="btn btn-sm  btn-outline-primary"value="Update">
                                    <button type="button" class="btn btn-sm  btn-outline-danger">CANCEL</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
</div>
@endsection
