<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <title>SimarVFX</title>
        <link rel="shortcut icon" href="{{asset('img/svfx.jpg')}}"/>
        <link rel="icon" href="favicon.ico" type="image/x-icon">

        <!-- Toggles CSS -->
        <link href="{{asset('vendors/jquery-toggles/css/toggles.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('vendors/jquery-toggles/css/themes/toggles-light.css')}}" rel="stylesheet" type="text/css">

        <!-- Custom CSS -->
        <link href="{{asset('dist/css/style.css')}}" rel="stylesheet" type="text/css">
    </head>
    <body>
        <!-- Preloader -->
        <div class="preloader-it">
            <div class="loader-pendulums"></div>
        </div>
        <!-- /Preloader -->

        <!-- HK Wrapper -->
        <div class="hk-wrapper">

            <!-- Main Content -->
            <div class="hk-pg-wrapper hk-auth-wrapper">
                <header class="d-flex justify-content-between align-items-center">
                   
                    <div class="btn-group btn-group-sm">
                      <!--  <a href="{{url('/login')}}" class="btn btn-outline-secondary" style="color:#263238;border-color:#8fc64c;">Center Login</a>
                        <a href="{{url('/inst/login')}}" class="btn btn-outline-secondary" style="color:#263238;border-color:#8fc64c;">School Login</a>
                        <a href="{{url('/teacher/login')}}" class="btn btn-outline-secondary" style="color:#263238;border-color:#8fc64c;">Teacher Login</a>
                        <a href="{{url('/student/login')}}" class="btn btn-outline-secondary" style="color:#263238;border-color:#8fc64c;">Student Login</a> -->
                    </div>
                </header>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-12 pa-0">
                            <div class="auth-form-wrap pt-xl-0 pt-70">
                                <div class="auth-form w-xl-30 w-lg-55 w-sm-75 w-100">
                                    <a class="auth-brand text-center d-block mb-20" href="#">
                                        <img class="brand-img" src="{{asset('dist/img/logo-dark.png')}}" alt="brand" style="width: 100%;" />
                                    </a>
                                    <form method="POST" action="{{ route('login') }}"class="form">
                                        {{ csrf_field() }}
                                        <h1 class="display-4 text-center mb-10">Welcome Back :)</h1>
                                        <p class="text-center mb-30">Sign in to your account and enjoy unlimited perks.</p> 
                                        <div class="form-group">
                                            <input type="text" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Enter Email" value="{{ old('email') }}" required autofocus>
                                            @if ($errors->has('email'))
                                            <label id="minmaxlength-error" class="error" for="minmaxlength">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </label>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input type="password"  placeholder="Password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required />
                                                <div class="input-group-append">
                                                    <span class="input-group-text"><span class="feather-icon"><i data-feather="eye-off"></i></span></span>
                                                </div>
                                                @if ($errors->has('password'))
                                                <label id="minmaxlength-error" class="error" for="minmaxlength">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </label>
                                                @endif
                                            </div>
                                        </div>

                                        <button class="btn btn-primary btn-block" type="submit">Login</button>
                                        <p class="font-14 text-center mt-15">Having trouble logging in?</p>
                                        <div class="option-sep"></div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Main Content -->

        </div>
        <!-- /HK Wrapper -->

        <!-- JavaScript -->

        <!-- jQuery -->
        <script src="{{asset('vendors/jquery/dist/jquery.min.js')}}"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="{{asset('vendors/popper.js/dist/umd/popper.min.js')}}"></script>
        <script src="{{asset('vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>

        <!-- Slimscroll JavaScript -->
        <script src="{{asset('dist/js/jquery.slimscroll.js')}}"></script>

        <!-- Fancy Dropdown JS -->
        <script src="{{asset('dist/js/dropdown-bootstrap-extended.js')}}"></script>

        <!-- FeatherIcons JavaScript -->
        <script src="{{asset('dist/js/feather.min.js')}}"></script>

        <!-- Init JavaScript -->
        <script src="{{asset('dist/js/init.js')}}"></script>
    </body>
</html>
