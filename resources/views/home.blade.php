@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Welcome To Dashboard</div>

                <div class="card-body" style="background: black;">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <img src="{{asset('dist/img/logo-dark.png')}}">
                </div>
            </div>
        </div>
    </div>
</div>
<br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">SimarVFX</div>

                <div class="card-body">

                    Welcome to SimarVFX Admin Panel
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
