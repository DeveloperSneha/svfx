<!-- Changes Done By Sneha -->
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    @include('layouts.partial.head')
    <body>
        <!-- Preloader -->
<!--        <div class="preloader-it">
            <div class="loader-pendulums"></div>
        </div>-->
        <!-- /Preloader -->
        <!-- HK Wrapper -->
        <div class="hk-wrapper hk-vertical-nav">
            @include('layouts.partial.nav')
            <!-- Main Content -->
            <div class="hk-pg-wrapper">
                <!-- Container -->
                <div class="container mt-xl-60 mt-sm-30 mt-15">
                    @if(session()->has('message'))
                    <div class="alert alert-danger">
                        {{ session()->get('message') }}
                    </div>
                    @endif
                    @yield('content')
                </div>
                <!-- /Container -->
                @include('layouts.partial.footer')
            </div>
            <!-- /Main Content -->

        </div>
        <!-- /HK Wrapper -->
        @include('layouts.partial.script')
        @yield('script')
    </body>
</html>