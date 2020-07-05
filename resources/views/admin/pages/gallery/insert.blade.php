@extends('admin.layouts.app')

@section('content')
	<div class="page-header row no-gutters py-4">
		<div class="col-12 col-sm-4 text-center text-sm-left mb-0">
		    <span class="text-uppercase page-subtitle">Gallery</span>
		    <h3 class="page-title">Gallery</h3>
		</div>
	</div>	

	<div class="row">
		<div class="col-lg-12">
		    <div class="card card-small mb-4">
		        <div class="card-header border-bottom">
					<a href="{{ url('/admin/gallery') }}" class="btn btn-primary float-right">Back to Image List</a>
		            <h6 class="m-0">Add Images</h6>
		        </div>
		        <ul class="list-group list-group-flush">
		            <li class="list-group-item p-3">
		                <div class="row">
		                    <div class="col">
								<form action="{{ url('/admin/gallery/insert') }}" method="POST">
									{{ csrf_field() }}
									<div class="col-md-12"> 
										<div class="file-loading">
											<input class="image" id="image" name="image" type="file" multiple>
										</div>
									</div>
								</form>
		                    </div>
		                </div>
		            </li>
		        </ul>
		    </div>
		</div>
	</div>
@endsection