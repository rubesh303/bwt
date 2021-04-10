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
                                            <th>Category Name</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                         @foreach($categories as $key=>$value)
                                        <tr>

                                            <td>{{ ++$key }}</td>
                                            <td>{{ $value->category_name }}</td>
                                            <td class="table-action">
                                                <a href="{{ url('edit_category/'.$value->id) }}"class="btn btn-success">Edit </a>
                                            </td>
                                        </tr>
                                       @endforeach
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
</div>
@endsection
