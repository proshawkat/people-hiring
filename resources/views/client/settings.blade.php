@extends('client.home')

@section('client_dashboard_content')
    <div class="">
        <div class="card-body" style="background: #f1f1f1; border-radius: 10px; min-height: 730px;">
            <div class="row">
                <div class="col-md-12">
                    <form method="POST" action="{{ route('client.profile.update') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <div class="col-md-12">
                                <label for="company_name">Company name</label>
                                <input id="company_name" type="text" class="form-control @error('company_name') is-invalid @enderror"
                                       name="company_name" value="{{ Auth::guard('clients')->user()->company_name }}" placeholder="Company name" required autocomplete="company_name" autofocus>

                                @error('company_name')
                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <label for="name">Your name</label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                       name="name" value="{{ Auth::guard('clients')->user()->name }}" placeholder="Name" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <label for="email">Email</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                       name="email" value="{{ Auth::guard('clients')->user()->email }}" placeholder="Email" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <label for="phone">Phone</label>
                                <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror"
                                       name="phone" value="{{ Auth::guard('clients')->user()->phone }}" placeholder="Phone" required autocomplete="phone">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <label for="gender">Gender</label>
                                <select class="form-control" name="gender" id="gender">
                                    <option value="male" {{ Auth::guard('clients')->user()->gender == 'male' ? 'selected' : '' }}>Male</option>
                                    <option value="female" {{ Auth::guard('clients')->user()->gender == 'female' ? 'selected' : '' }}>Female</option>
                                </select>
                                @error('gender')
                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <label for="avatar">Photo</label>
                                <br>
                                <input type="file" name="avatar" id="avatar">
                               <div class="w-100 mt-1">
                                   @if( Auth::guard('clients')->user()->avatar)
                                       <img height="100" src="{{ url('storage/client/', Auth::guard('clients')->user()->avatar) }}" alt="">
                                   @endif
                               </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-gradient">
                                    {{ __('Update Your Profile') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /.card -->
    </div>
@endsection
