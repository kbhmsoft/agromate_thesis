<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- <title>{{ config('app.name', 'Laravel') }}</title> -->
    <title> ভূমি রাজস্ব মামলা ম্যানেজমেন্ট সিষ্টেমে </title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('styles')
</head>
<body>
    <div id="app" style="background-image: url(https://ldtax.gov.bd/assets/images/background.jpg); background-repeat: no-repeat; background-attachment: fixed;">
        <nav class="navbar navbar-expand-md navbar-light shadow-sm" style="background-color:#005200;">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('media/logos/civil-suit-logo.png') }}" style="width: 360px;" alt="" />
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest

                            
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link text-white"  data-toggle="modal" data-target="#exampleModalLong""><b>{{ __('লগইন') }}</b></a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            
                                <span class="nav-link text-white" >
                                    <a href="{{ route('dashboard') }}">{{ Auth::user()->name }}</a> &nbsp;|&nbsp;
                                <a class="text-white" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('লগ আউট ') }}
                                </a></span>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <div class="modal fade" id="exampleModalLong" data-backdrop="static" tabindex="-1" role="dialog"aria-labelledby="staticBackdrop" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body p-0">
                        <div class="card" tabindex="0">
                            <div class="card-header border-0">
                                <div class="card-title">
                                </div>
                                <div class="card-toolbar">
                                    <a href="#" data-dismiss="modal"
                                        class="btn btn-icon btn-sm float-right bg-light-info btn-hover-light-info draggable-handle">
                                        <i class="ki ki-close"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="">
                                    <!--begin::Signin-->
                                    <div class="login-form">
                                        <!--begin::Form-->
                                        <form action="javascript:void(0)"  class="form fv-plugins-bootstrap fv-plugins-framework" id="kt_login_singin_form"
                                            action="" novalidate="novalidate">
                                            @csrf
                                            <!--begin::Title-->
                                            <div class="pb-5 pb-lg-15 text-center">
                                                <h3 class="font-weight-bolder text-dark font-size-h2 font-size-h1-lg">লগইন
                                                </h3>
                                                <div class="text-muted font-weight-bold font-size-h4">এখনও কোন অ্যাকাউন্ট নেই?
                                                    <a href="{{ url('/registration') }}" class="text-info font-weight-bolder">সাইনআপ</a>
                                                </div>
                                            </div>
                                            <!--begin::Title-->
                                            <!--begin::Form group-->
                                            <div class="form-group fv-plugins-icon-container has-success">
                                                <label class="font-size-h6 font-weight-bolder text-dark">ইমেইল, ইউজারনেম, এন আই ডি</label>
                                                <input class="form-control h-auto border-info px-5 py-5 is-valid"
                                                    placeholder="ইমেইল, ইউজারনেম, এন আই ডি" type="text" name="email" autocomplete="off">
                                                <div class="fv-plugins-message-container"></div>
                                            </div>
                                            <!--end::Form group-->
                                            <!--begin::Form group-->
                                            <div class="form-group fv-plugins-icon-container has-success">
                                                <div class="d-flex justify-content-between mt-n5">
                                                    <label class="font-size-h6 font-weight-bolder text-dark pt-5">পাসওয়ার্ড</label>
                                                    <a href="custom/pages/login/login-3/forgot.html"
                                                        class="text-info font-size-h6 font-weight-bolder text-hover-info pt-5">
                                                    </a>
                                                </div>
                                                <input class="form-control h-auto border-info px-5 py-5 is-valid"
                                                    placeholder="পাসওয়ার্ড" type="password" name="password"
                                                    autocomplete="off">
                                                <div class="fv-plugins-message-container"></div>
                                                <div class="row">
                                                    <div class="col-md-8"></div>
                                                    <div class="col-md-4">
                                                        <a href="{{ url('/forget/password') }}" type="button" 
                                                 value="">{{ __('পাসওয়ার্ড রিসেট') }}</a>
                                                    </div>
                                                </div>
                                                  
                                            </div>
                                            <!--end::Form group-->
                                            <!--begin::Action-->
                                            <div class="pb-lg-0 pb-5">
                                                <button onclick="labelmk()" id="kt_login_singin_form_submit_button"
                                                    class="text-center btn btn-info font-size-h6 px-8 py-4 my-3 mr-3"
                                                    wait-class="spinner spinner-right spinner-white pr-15">লগইন</button>
                                            </div>
                                            <!--end::Action-->
                                            <input type="hidden">
                                        </form>
                                        <!--end::Form-->
                                    </div>
                                    <!--end::Signin-->
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <main class="py-4">
            @yield('content')
        </main>

        <footer class="navbar navbar-expand-md navbar-light shadow-sm" style="background-color:#005200;text-align: center;text-align: center; color: #fff;font-weight: 600;font-size: 15px;" >
            <div class="container">
                <p >Copyrights © {{ date('Y',strtotime(now())) }} All Rights Reserved <a href="#">Ministry of Land</a>, Government of the People's Republic of Bangladesh</p>
            </div>
          <div>
             
            <a href="http://mysoftheaven.com"><img style="width: 200px;height: auto;" src="https://ldtax.gov.bd/assets/images/auto.png" alt=""></a>
          </div>
        </footer>

    </div>
    @push('scripts')
    <script type="text/javascript">
        function labelmk(){
        var _token = $("#kt_login_singin_form input[name='_token']").val();
        var email = $("#kt_login_singin_form input[name='email']").val();
        var password = $("#kt_login_singin_form input[name='password']").val();

        if(email == '' || password == ''){
            // toastr.info('Email or password not will be null!', "Error");
            return;
        }
        $.ajax({
            url: "{{ url('') }}/csLogin",
            type: 'POST',
            data: {
                _token: _token,
                email: email,
                password: password,
            },
            success: function(data) {
                console.log(data);
                if ($.isEmptyObject(data.error)) {
                    // toastr.success(data.success, "Success");
                    $('#exampleModalLong').modal('toggle');
                    console.log(data.success);
                    setTimeout(function(){
                        // location.reload();
                        $(location).attr('href', "{{ url('') }}/dashboard");
                    }, 1000);
                } else {
                    // toastr.error(data.error, "Error");
                    console.log(data.error);
                    
                    // printErrorMsg(data.error);
                }
            }
        });
    }
    </script>
    @pushend
</body>
</html>
