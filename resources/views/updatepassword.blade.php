@extends('app')
@section('content')
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif 
<div class="row">
    <div class="col-xl-12">
        <section class="hk-sec-wrapper">
            <div class="row">
                <div class="col-sm-9">
                    <h5 class="hk-sec-title">Update Password</h5>
                </div>
            </div>
            <div class="row">
                <div class="col-sm">
                {!! Form::open(['url' => 'updatepassword','method'=>'post','class'=>'form-horizontal']) !!}
                    <div class="panel-body">
                        <div class="form-group">
                            {!! Form::label('Old Password :', null, ['class' => 'col-sm-4 control-label']) !!}
                            <div class="col-sm-3">
                                {!! Form::text('old_password', null, ['class' => 'form-control','required'=>'required','autocomplete'=>'off']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('New Password :', null, ['class' => 'col-sm-4 control-label']) !!}
                            <div class="col-sm-3">
                                <input id="password" type="password" class="form-control" name="password" required="required" autocomplete="off">
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('Confirm Password :', null, ['class' => 'col-sm-4 control-label']) !!}
                            <div class="col-sm-3">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required="required" autocomplete="off">
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                {!! Form::close() !!}
                </div>
            </div>
        </section>
    </div>
</div>
</div>
@stop