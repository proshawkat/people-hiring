@extends('admin.layouts.app')

@section('content')
    <div class="page-header row no-gutters py-4">
        <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
            <span class="text-uppercase page-subtitle">Overview</span>
            <h3 class="page-title">Client Tables</h3>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="card card-small mb-4">
                <div class="card-header border-bottom">
                    <h6 class="m-0">Client list</h6>
                </div>
                <div class="card-body p-0 pb-3 text-center">
                    <table class="table mb-0">
                        <thead class="bg-light">
                        <tr>
                            <th scope="col" class="border-0">#</th>
                            <th scope="col" class="border-0">Photo</th>
                            <th scope="col" class="border-0">Company Name</th>
                            <th scope="col" class="border-0">Name</th>
                            <th scope="col" class="border-0">Email</th>
                            <th scope="col" class="border-0">Phone</th>
                            <th scope="col" class="border-0">Gender</th>
                            <th scope="col" class="border-0">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($clients as $k => $value)
                            <tr>
                                <td>{{ ++$k }}</td>
                                <td>
                                    @if($value->avatar)
                                        <img height="100" src="{{ url('storage/client/', $value->avatar) }}" alt="">
                                    @else
                                        <img src="{{ asset('assets/img/client1.png') }}" alt="">
                                    @endif
                                </td>
                                <td>{{ $value->company_name }}</td>
                                <td>{{ $value->name }}</td>
                                <td>{{ $value->email }}</td>
                                <td>{{ $value->phone }}</td>
                                <td>{{ $value->gender }}</td>
                                <td>
                                    <a class="btn btn-success" href="{{ route('admin.client.message',$value->id ) }}">Message Reply</a>
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
