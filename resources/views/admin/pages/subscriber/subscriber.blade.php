@extends('admin.layouts.app')

@section('content')
<div class="page-header row no-gutters py-4">
	<div class="col-12 col-sm-4 text-center text-sm-left mb-0">
	    <span class="text-uppercase page-subtitle">Overview</span>
	    <h3 class="page-title">Subscribers Tables</h3>
	</div>
</div>

<div class="row">
    <div class="col">
        <div class="card card-small mb-4">
            <div class="card-header border-bottom">
                <h6 class="m-0">Subscribers list</h6>
            </div>
            <div class="card-body p-0 pb-3 text-center">
                <table class="table mb-0">
                    <thead class="bg-light">
                        <tr>
                            <th scope="col" class="border-0">#</th>
                            <th scope="col" class="border-0">Email</th>
                        </tr>
                    </thead>
                    <tbody>
                    	@foreach($subscriber as $or)
	                        <tr>
                                <td>{{ $or->id }}</td>
	                            <td>{{ $or->email }}</td>
	                        </tr>
	                    @endforeach
                    </tbody>
                </table>
                {{ $subscriber->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
