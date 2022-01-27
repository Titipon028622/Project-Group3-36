@extends('layouts.app')

@section('content')

    <link href="{{asset('back_end/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('back_end/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="{{asset('back_end/https://fonts.googleapis.com/css2?family=Mali:wght@300&display=swap')}}" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="{{asset('back_end/vendor/select2/select2.min.css" rel="stylesheet')}}" media="all">
    <link href="{{asset('back_end/vendor/datepicker/daterangepicker.css')}}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{asset('back_end/css/mainlo.css')}}" rel="stylesheet" media="all">

<body>
    <div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins">
        <div class="wrapper wrapper--w780">
            <div class="card card-3">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Registration Info</h2>
                    <form method="POST" action="{{ route('register')}}">
                        @csrf
                        <div class="input-group">
                            <input placeholder="Username" id="username" type="username" class="input--style-3 @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}"     ="username">
                            @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="input-group">
                            <input placeholder="Email" id="email" type="email" class="input--style-3 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="input-group">
                            <input placeholder="Password" id="password" type="password" class="input--style-3 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                            @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="input-group">
                            <input placeholder="Confirm Password" id="password-confirm" type="password" class="input--style-3" name="password_confirmation" required autocomplete="new-password">
                        </div>
                        <div class="input-group">
                            <input placeholder="Name" id="name" type="text" class="input--style-3 @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                        <div class="input-group">
                            <input placeholder="Phone" id="phone" type="phone" class="input--style-3 @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone">
                            @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="p-t-10">
                            <button type="submit" class="buttonn button11">{{ __('Register') }}</button>
                                              
                             
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="{{asset('back_end/vendor/jquery/jquery.min.js')}}"></script>
    <!-- Vendor JS-->
    <script src="{{asset('back_end/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('back_end/vendor/datepicker/moment.min.js')}}"></script>
    <script src="{{asset('back_end/vendor/datepicker/daterangepicker.js')}}"></script>

    <!-- Main JS-->
    <script src="{{asset('js/global.js')}}"></script>

@endsection
