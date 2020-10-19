@extends('app')
@section('content')
<div class="row">
    <div class="col-sm-12">
        <section class="hk-sec-wrapper">
            <h5 class="hk-sec-title">Add Tutorial</h5>
            @if(isset($tutorial))
                {!! Form::model( $tutorial, ['route' => ['tutorials.update', $tutorial->idTutorial], 'method' => 'patch','class'=>'form-horizontal','files'=>'true'] ) !!}
                @else
            {!! Form::open(['url' => 'tutorials', 'class' => 'form-horizontal','files'=>'true']) !!}
            @endif
            <div class="row">
                <div class="col-sm-2 form-control-label required">
                    <label for="classname">Name</label>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        {!! Form::text('name',null,['class' => 'form-control']) !!}
                        @if ($errors->has('name'))
                            <label id="minmaxlength-error" class="error" for="minmaxlength">
                                <strong>{{ $errors->first('name') }}</strong>
                            </label>
                        @endif
                    </div>
                </div>
                <div class="col-sm-2 form-control-label required">
                    <label for="classname">Video Url</label>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        {!! Form::text('videoUrl',null,['class' => 'form-control']) !!}
                        @if ($errors->has('videoUrl'))
                            <label id="minmaxlength-error" class="error" for="minmaxlength">
                                <strong>{{ $errors->first('videoUrl') }}</strong>
                            </label>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row">
                
                <div class="col-sm-2 form-control-label required">
                    <label for="classname">tutorial Icon</label>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <input type="file" name="image">
                        @if ($errors->has('image'))
                        <label id="minmaxlength-error" class="error" for="minmaxlength">
                            <strong>{{ $errors->first('image') }}</strong>
                        </label>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-8 offset-sm-2">
                    @if(isset($tutorial))
                    {!!  Form::submit('Update',['class'=>'btn btn-raised btn-primary btn-round waves-effect'])!!}
                    @else
                    <button type="submit" class="btn btn-raised btn-primary btn-round waves-effect">Save</button>
                    @endif
                    {!! Form::close() !!} 
                </div>
            </div>
        </section>
    </div>
</div>
<div class="row">
        <div class="col-xl-12">
            <section class="hk-sec-wrapper">
                <div class="row">
                    <div class="col-sm-9">
                        <h5 class="hk-sec-title">All tutorials Details</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm">
                        <div class="table-wrap">
                            <table id="datable_3" class="table table-hover w-100 display dataTable no-footer dtr-inline" role="grid" style="width: 1040px;">
                                <thead>
                                    <tr role="row">
                                        <th class="sorting_asc">image</th>
                                        <th class="sorting">Name</th>
                                        <th class="sorting">videoUrl</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($tutorials as $tutorial)
                                    <tr role="row" class="odd">
                                        <td  tabindex="0" class="sorting_1"><img src="{{asset('/img/'.$tutorial->image)}}"></td>
                                        <td>{{$tutorial->name}}</td>
                                        <td>{{$tutorial->videoUrl}}</td>
                                        <td>
                                            <a href="{{route('tutorials.edit',$tutorial->idTutorial)}}" title="Edit"><i class="fa fa-edit" style="color:#233c46"></i></a>
                                            <a href="#" class="delete-button" data-id="{{$tutorial->idTutorial}}" title="Delete"><i class="fa fa-trash" style="color:red;"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>  
        </div>
    </div>
@stop
@section('script')
<script>
    $(document).ready(function(){
        $('.delete-button').click(function(event){
            // console.log('here');
            event.preventDefault();
            var id = $(this).data('id');
            var selector = $(this).parents('tr');
            var token = $('[name=_token]').val();
            bootbox.confirm({
                title: 'Delete',
                message: 'Are You Sure, You Want To Delete this item ',
                onEscape: true,
                backdrop: true,
                buttons: {
                    cancel: {
                        label: 'No',
                        className: 'btn waves-effect'
                    },
                    confirm: {
                        label: 'Yes',
                        className: 'btn waves-effect'
                    }
                },
                callback: function (result) {
                    if(result){
                        $.ajax({
                            url: '{{ url('/tutorials') }}/'+id,
                            type: 'post',
                            data: {_method: 'delete', _token :token},
                            success:function(msg) {
                                selector.remove();
                                toastr.success(msg);
                            },
                            error:function(msg){
                                toastr.error(msg.responseJSON);
                            }
                        });
                    }
                }
            });
        });
    });
</script>
@stop

