@extends('admin.layouts.app')

@section('content')
	<div class="page-header row no-gutters py-4">
		<div class="col-12 col-sm-4 text-center text-sm-left mb-0">
		    <span class="text-uppercase page-subtitle">Gallery</span>
		    <h3 class="page-title">Gallery Edit</h3>
		</div>
	</div>	

	<div class="row">
		<div class="col-lg-12">
		    <div class="card card-small mb-4">
		        <div class="card-header border-bottom">
                    <a href="{{ url('/admin/gallery/create') }}" class="btn btn-primary float-right">Add Images</a>
                    <h6 class="m-0">Gallery Edit</h6>
		        </div>
		        <ul class="list-group list-group-flush">
		            <li class="list-group-item p-3">
		                <div class="row">
                            <div class="col-md-3"></div>
		                    <div class="col-md-6">
                                <img class="m-2 border" height="150" width="150" src="{{ asset('uploads/gallery/'.$gallery->image) }}" alt="{{ $gallery->image }}">
                                <form action="{{ url('/admin/gallery/update') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $gallery->id }}">
                                    <input type="file" id="gallery" name="gallery" class="form-control">
                                    <button type="submit" class="btn btn-primary mt-2 float-right">Update</button>
                                </form>
		                    </div>
		                </div>
		            </li>
		        </ul>
		    </div>
		</div>
	</div>
@endsection