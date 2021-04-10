@extends('layouts.admin_app')

@section('content')
<div class="container">
    <div class="row layout-top-spacing" id="cancel-row">
                    
                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                        <div class="widget-content widget-content-area br-6">
                            <div class="table-responsive mb-4 mt-4">
                                <table id="zero-config" class="table table-hover" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>S.No</th>
                                            <th>Title</th>
                                            <th>Category</th>
                                            <th>Created Date</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($blogs as $key=>$value)
                                    <tr>
                                        <td>{{ ++$key }}</td>
                                        <td>{{ $value->title }}</td>
                                        <td>{{ $value->category_name }}</td>
                                        <td>{{ $value->date }}</td>
                                        <td>{{ $value->status }}</td>
                                        <td> <a href="{{ url('edit_blog/'.$value->id) }}"class="btn btn-success">Edit</a>
                                                <a href="{{ url('delete_blog/'.$value->id) }}"class="btn btn-danger">Delete</a></td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
</div>
@endsection
