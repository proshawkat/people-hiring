@extends('admin.layouts.app')

@section('content')
<div class="page-header row no-gutters py-4">
	<div class="col-12 col-sm-4 text-center text-sm-left mb-0">
	    <span class="text-uppercase page-subtitle">Overview</span>
	    <h3 class="page-title">Serivces Tables</h3>
	</div>
</div>

<div class="row">
    <div class="col">
        <div class="card card-small mb-4">
            <div class="card-header border-bottom">
                <div class="row">
                    <div class="col-md-6">
                        <h6 class="m-0">Active Users</h6>
                    </div>
                    <div class="col-md-6 text-right">
                        <a href="{{ route('admin.service.create') }}"><button class="btn btn-info">Add New Service</button></a>
                    </div>
                </div>
            </div>
            <div class="card-body p-0 pb-3 text-center">
                <table class="table mb-0 table-bordered">
                    <thead class="bg-light">
                        <tr>
                            <th scope="col" class="border-0">#</th>
                            <th scope="col" class="border-0">Title</th>
                            <th scope="col" class="border-0">Price</th>
                            <th scope="col" class="border-0">Image</th>
                            <th scope="col" class="border-0">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    	@foreach($services as $ser)
	                        <tr>
	                            <td>{{ $ser->id }}</td>
	                            <td>{{ $ser->title }}</td>
	                            <td>{{ $ser->price }}</td>
                                <td><img height="100" src="{{ asset('uploads/service/'.$ser->image) }}"></td>
                                <td>
                                    <a class="btn btn-success" href="{{ url('admin/service/edit/'.$ser->id) }}">Edit</a>
                                    <a class="btn btn-danger" href="{{ url('admin/service/delete/'.$ser->id) }}">Delete</a>
                                </td>
	                        </tr>
	                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
