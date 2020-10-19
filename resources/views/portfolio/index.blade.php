@extends('app')
@section('content')
<div class="row">
    <div class="col-sm-12">
        <section class="hk-sec-wrapper">
            <h5 class="hk-sec-title">@if($portfolio) Edit Portfolio @else Add Portfolio @endif</h5>
            @if(isset($portfolio))
                {!! Form::model( $portfolio, ['route' => ['portfolios.update', $portfolio->idPortfolio], 'method' => 'patch','class'=>'form-horizontal','files'=>'true'] ) !!}
                @else
            {!! Form::open(['url' => 'portfolios', 'class' => 'form-horizontal','files'=>'true']) !!}
            @endif
            <div class="row">
                <div class="col-sm-5 form-control-label required">
                    <label for="classname">Service</label>
                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                        {!! Form::select('idService',$services,null,['class' => 'form-control']) !!}
                        @if ($errors->has('idService'))
                            <label id="minmaxlength-error" class="error" for="minmaxlength">
                                <strong>{{ $errors->first('idService') }}</strong>
                            </label>
                        @endif
                    </div>
                </div>                
                <div class="col-sm-5 form-control-label required">
                    <label for="classname">portfolio Image</label>
                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                        <input type="file" name="image">
                        @if ($errors->has('image'))
                        <label id="minmaxlength-error" class="error" for="minmaxlength">
                            <strong>{{ $errors->first('image') }}</strong>
                        </label>
                        @endif
                    </div>
                </div>
                <div class="col-sm-5">
                    <label for="classname">Video Embaded Code (Youtube)</label>
                </div>
                <div class="col-sm-5">
                    {!! Form::text('video',null,['class' => 'form-control']) !!}
                        @if ($errors->has('video'))
                            <label id="minmaxlength-error" class="error" for="minmaxlength">
                                <strong>{{ $errors->first('video') }}</strong>
                            </label>
                        @endif
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-sm-8 offset-sm-2" style="text-align: center;">
                    @if(isset($portfolio))
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
                        <h5 class="hk-sec-title">All portfolios Details</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm">
                        <div class="table-wrap">
                            <table id="datable_3" class="table table-hover w-100 display dataTable no-footer dtr-inline" role="grid" style="width: 1040px;">
                                <thead>
                                    <tr role="row">
                                        <th class="sorting_asc">Image</th>
                                        <th class="sorting">Service</th>
                                        <th class="sorting">Video</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($portfolios as $portfolio)
                                    <tr role="row" class="odd">
                                        <td  tabindex="0" class="sorting_1">@if($portfolio->image)<img src="{{asset('/img/logos/'.$portfolio->image)}}" style="width: 120px;">@endif</td>
                                        <td>{{$portfolio->service->serviceName}}</td>
                                        <td>{{$portfolio->video}}</td>
                                        <td>
                                            <a href="{{route('portfolios.edit',$portfolio->idPortfolio)}}" title="Edit"><i class="fa fa-edit" style="color:#233c46"></i></a>
                                            <a href="#" class="delete-button" data-id="{{$portfolio->idPortfolio}}" title="Delete"><i class="fa fa-trash" style="color:red;"></i></a>
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
                            url: '{{ url('/portfolios') }}/'+id,
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

