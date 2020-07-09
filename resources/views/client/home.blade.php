@extends('layouts.master')

@section('content')
    <style>
        .nav-pills .nav-link.active, .nav-pills .show > .nav-link {
            color: #fff;
            background-color: #13171a;
        }
        a.nav-link{
            color: #4A4A4A;
        }
    </style>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-3" style="background-color: #f3f3f3; border-radius: 10px; padding-top: 1rem;">
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link {{  request()->path() == 'client/message' ? 'active' : '' }}" href="{{ route('client.message') }}">Message</a>
                        <a class="nav-link {{  request()->path() == 'client/services' ? 'active' : '' }}" href="{{ route('client.services') }}">Service tacked</a>
                        <a class="nav-link {{  request()->path() == 'client/settings' ? 'active' : '' }}" href="{{ route('client.settings') }}">Settings</a>
                        <a class="nav-link" href="{{ route('logout') }}"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </div>
                <div class="col-9" style="min-height: 77vh;">
                    @include('message')
                    @yield('client_dashboard_content')
                </div>
            </div>
        </div>
    </section>
@endsection
