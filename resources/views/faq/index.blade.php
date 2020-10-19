@extends('app')
@section('content')
<div class="row">
    <div class="col-sm-12">
        <section class="hk-sec-wrapper">
            <h5 class="hk-sec-title">@if($faq)Update @else Add @endif FAQ</h5>
            @if(isset($faq))
                {!! Form::model( $faq, ['route' => ['faqs.update', $faq->idFaq], 'method' => 'patch','class'=>'form-horizontal','files'=>'true'] ) !!}
                @else
            {!! Form::open(['url' => 'faqs', 'class' => 'form-horizontal','files'=>'true']) !!}
            @endif
            <div class="row">
                <div class="col-sm-2 form-control-label required">
                    <label for="classname">Question</label>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        {!! Form::text('question',null,['class' => 'form-control']) !!}
                        @if ($errors->has('question'))
                            <label id="minmaxlength-error" class="error" for="minmaxlength">
                                <strong>{{ $errors->first('question') }}</strong>
                            </label>
                        @endif
                    </div>
                </div>
                <div class="col-sm-2 form-control-label required">
                    <label for="classname">Answer</label>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        {!! Form::text('answer',null,['class' => 'form-control']) !!}
                        @if ($errors->has('answer'))
                            <label id="minmaxlength-error" class="error" for="minmaxlength">
                                <strong>{{ $errors->first('answer') }}</strong>
                            </label>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-8 offset-sm-2">
                    @if(isset($faq))
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
                        <h5 class="hk-sec-title">All FAQs Details</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm">
                        <div class="table-wrap">
                            <table id="datable_3" class="table table-hover w-100 display dataTable no-footer dtr-inline" role="grid" style="width: 1040px;">
                                <thead>
                                    <tr role="row">
                                        <th class="sorting_asc">Question</th>
                                        <th class="sorting">answer</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($faqs as $faq)
                                    <tr role="row" class="odd">
                                        <td  tabindex="0" class="sorting_1">{{$faq->question}}</td>
                                        <td>{{$faq->answer}}</td>
                                        <td>
                                            <a href="{{route('faqs.edit',$faq->idFaq)}}" title="Edit"><i class="fa fa-edit" style="color:#233c46"></i></a>
                                            <a href="#" class="delete-button" data-id="{{$faq->idFaq}}" title="Delete"><i class="fa fa-trash" style="color:red;"></i></a>
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
                            url: '{{ url('/faqs') }}/'+id,
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

