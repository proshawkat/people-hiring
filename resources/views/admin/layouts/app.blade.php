<!doctype html>
<html class="no-js h-100" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ config('app.name', 'A-one IT Solutions') }}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="icon" href="{{ asset('front_assets/images/favicon.png') }}" type="image/x-icon" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" id="main-stylesheet" data-version="1.3.1" href="{{ asset('back_assets/styles/shards-dashboards.1.3.1.min.css') }}">
    <link rel="stylesheet" href="{{ asset('back_assets/styles/extras.1.3.1.min.css') }}">
    <link href="{{ asset('back_assets/fileinput/css/fileinput.css') }}" media="all" rel="stylesheet" type="text/css"/>
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <link rel="stylesheet" href="toolbarconfigurator/lib/codemirror/neo.css">
  </head>
  <body class="h-100">
    <div class="container-fluid">
      <div class="row h-100">
        <!-- Main Sidebar -->
        @if(url('/login') != url()->current() && url('/register') != url()->current())
        <aside class="main-sidebar col-12 col-md-3 col-lg-2 px-0">
          <div class="main-navbar">
            <nav class="navbar align-items-stretch navbar-light bg-white flex-md-nowrap border-bottom p-0">
              <a class="navbar-brand w-100 mr-0" href="{{ url('/') }}" style="line-height: 25px;">
                <div class="d-table m-auto">
                  <img id="main-logo" class="d-inline-block align-top mr-1" style="max-width: 25px;" src="{{ asset('back_assets/images/favicon.png') }}" alt="Shards Dashboard">
                </div>
              </a>
              <a class="toggle-sidebar d-sm-inline d-md-none d-lg-none">
                <i class="material-icons">&#xE5C4;</i>
              </a>
            </nav>
          </div>
          <form action="#" class="main-sidebar__search w-100 border-right d-sm-flex d-md-none d-lg-none">
            <div class="input-group input-group-seamless ml-3">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <i class="fas fa-search"></i>
                </div>
              </div>
              <input class="navbar-search form-control" type="text" placeholder="Search for something..." aria-label="Search">
            </div>
          </form>
          <div class="nav-wrapper">
            <h6 class="main-sidebar__nav-title">Dashboards</h6>
            <ul class="nav nav--no-borders flex-column">
              <li class="nav-item">
                <a class="nav-link " href="{{ route('home') }}">
                  <i class="material-icons">&#xE917;</i>
                  <span>Analytics</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="{{ route('admin.order') }}">
                  <i class="material-icons">&#xE8D1;</i>
                  <span>Ordered</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="{{ route('admin.client') }}">
                  <i class="material-icons">&#xE8D1;</i>
                  <span>Clients</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="{{ route('admin.services') }}">
                  <i class="material-icons">&#xE8D1;</i>
                  <span>Services</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="{{ route('admin.gallery') }}">
                  <i class="material-icons">&#xE8D1;</i>
                  <span>Gallery</span>
                </a>
              </li>
                <li class="nav-item">
                    <a class="nav-link " href="{{ route('admin.contact') }}">
                        <i class="material-icons">&#xE8D1;</i>
                        <span>Contact</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="{{ route('admin.subscriber') }}">
                        <i class="material-icons">&#xE8D1;</i>
                        <span>Subscribers</span>
                    </a>
                </li>
            </ul>
          </div>
        </aside>
        <!-- End Main Sidebar -->
        <main class="main-content col-lg-10 col-md-9 col-sm-12 p-0 offset-lg-2 offset-md-3">
            <div class="main-navbar sticky-top bg-white">
                <nav class="navbar align-items-stretch navbar-light flex-md-nowrap p-0">
                    <form action="#" class="main-navbar__search w-100 d-none d-md-flex d-lg-flex">
                        <div class="input-group input-group-seamless ml-3">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fas fa-search"></i>
                                </div>
                            </div>
                            <input class="navbar-search form-control" type="text" placeholder="Search for something..." aria-label="Search">
                        </div>
                    </form>
                    <ul class="navbar-nav border-left flex-row ">
                        <li class="nav-item border-right dropdown notifications">
                            <a class="nav-link nav-link-icon text-center" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <div class="nav-link-icon__wrapper">
                                    <i class="material-icons">&#xE7F4;</i>
                                    <span class="badge badge-pill badge-danger">{{ \App\Order::where(['n_status' => 0])->get()->count() }}</span>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-small" aria-labelledby="dropdownMenuLink">
                                @foreach(\App\Order::where(['n_status' => 0])->orderBy('id', 'desc')->get()->take(5) as $order)
                                    <a class="dropdown-item" href="#">
                                        <div class="notification__icon-wrapper">
                                            <div class="notification__icon">
                                                <i class="material-icons">&#xE6E1;</i>
                                            </div>
                                        </div>
                                        <div class="notification__content">
                                            <span class="notification__category">{{ $order->first_name }} {{ $order->last_name }}</span>
                                            <p>{ Service } Total order amount <span class="text-success text-semibold">{{ $order->total }}</span></p>
                                        </div>
                                    </a>
                                @endforeach
                                <a class="dropdown-item notification__all text-center" href="{{ route('admin.order') }}"> View all Notifications </a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-nowrap px-3" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                <img class="user-avatar rounded-circle mr-2" src="{{ asset('back_assets/images/avatars/0.jpg') }}" alt="User Avatar"> <span class="d-none d-md-inline-block">{{ Auth::user()->name }}</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-small">
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-danger" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    </ul>
                    <nav class="nav">
                        <a href="#" class="nav-link nav-link-icon toggle-sidebar d-sm-inline d-md-none text-center border-left" data-toggle="collapse" data-target=".header-navbar" aria-expanded="false" aria-controls="header-navbar">
                            <i class="material-icons">&#xE5D2;</i>
                        </a>
                    </nav>
                </nav>
            </div>
            <!-- / .main-navbar -->
            <div class="main-content-container container-fluid px-4">
                <!-- Page Header -->
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
        @endif

                @yield('content')

        @if(url('/login') != url()->current() && url('/register') != url()->current())
            </div>

            <footer class="main-footer d-flex p-2 px-3 bg-white border-top">
                <span class="copyright ml-auto my-auto mr-2">Copyright © 2020 CSE 1714</span>
            </footer>
        </main>
        @endif

      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
    <script src="https://unpkg.com/shards-ui@latest/dist/js/shards.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Sharrre/2.0.1/jquery.sharrre.min.js"></script>
    <script src="{{ asset('back_assets/scripts/extras.1.3.1.min.js') }}"></script>
    <script src="{{ asset('back_assets/scripts/shards-dashboards.1.3.1.min.js') }}"></script>
    <script src="{{ asset('back_assets/fileinput/js/fileinput.js') }}"></script>
    <script src="{{ asset('back_assets/fileinput/themes/fas/theme.js') }}"></script>
    @yield('ad_js')
    <script>
        $("#image").fileinput({
            theme: 'fas',
            uploadUrl: '/admin/gallery/insert',
            overwriteInitial: false,
            initialPreviewAsData: true,
            allowedFileExtensions:['jpg', 'jpeg', 'png', 'gif'],
            uploadExtraData: function(){
                return {
                    _token: $("input[name='_token']").val(),
                }
            }
        });
      </script>
  </body>
</html>
