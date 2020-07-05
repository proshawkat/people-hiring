@extends('admin.layouts.app')

@section('content')
	<div class="page-header row no-gutters py-4">
		<div class="col-12 col-sm-4 text-center text-sm-left mb-0">
		    <span class="text-uppercase page-subtitle">Overview</span>
		    <h3 class="page-title">Service</h3>
		</div>
	</div>	

	<div class="row">
		<div class="col-lg-12">
		    <div class="card card-small mb-4">
		        <div class="card-header border-bottom">
		            <h6 class="m-0">Add service</h6>
		        </div>
		        <ul class="list-group list-group-flush">
		            <li class="list-group-item p-3">
		                <div class="row">
		                    <div class="col">
		                        <form action="{{ url('admin/service/insert') }}" method="post" enctype="multipart/form-data">
		                            {{ csrf_field() }}
		                            <div class="form-row">
		                                <div class="form-group col-md-6">
		                                    <label for="title">Title</label>
		                                    <input type="text" class="form-control" id="title" name="title" placeholder="Service title" value="">
		                                </div>
		                                <div class="form-group col-md-6">
		                                    <label for="price">Price</label>
		                                    <input type="text" class="form-control" id="price" name="price" placeholder="Service price" value="">
		                                </div>
		                                <div class="form-group col-md-6">
		                                    <label for="image">Image</label>
		                                    <input type="file" class="form-control" id="image" name="image">
		                                </div>
		                            </div>
		                            <button type="submit" class="btn btn-accent">Save</button>
		                        </form>
		                    </div>
		                </div>
		            </li>
		        </ul>
		    </div>
		</div>
	</div>
@endsection