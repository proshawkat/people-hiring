@extends('admin.layouts.app')

@section('content')
<main class="main-content col">
    <div class="main-content-container container-fluid px-4 my-auto h-100">
        <div class="row no-gutters h-100">
          <div class="col-lg-3 col-md-5 auth-form mx-auto my-auto">
            <div class="card">
              <div class="card-body">
                <img class="auth-form__logo d-table mx-auto mb-3" src="{{ asset('back_assets/images/favicon.png')}}" alt="Shards Dashboards - Register Template">
                <h5 class="auth-form__title text-center mb-4">{{ __('Access Your Account') }}</h5>
                <form method="POST" action="{{ route('login') }}">
                  @csrf
                  <div class="form-group">
                    <label for="exampleInputEmail1">{{ __('E-Mail Address') }}</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter email">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                  <div class="form-group mb-3 d-table mx-auto">
                    <div class="custom-control custom-checkbox mb-1">
                      <input type="checkbox" class="custom-control-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} id="remember">
                      <label class="custom-control-label" for="remember">{{ __('Remember Me') }}</label>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-pill btn-accent d-table mx-auto">{{ __('Access Account') }}</button>
                </form>
              </div>
            </div>
            <div class="auth-form__meta d-flex mt-4">
                <!-- @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
                <a class="ml-auto" href="{{ route('register') }}">Create new account?</a> -->
            </div>
          </div>
        </div>
    </div>
</main>
@endsection
