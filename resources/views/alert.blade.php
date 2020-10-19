<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.css"  rel="stylesheet">
    <style type="text/css">
        .confirm {
            display: inline-block;
            padding: 8px 30px;
            background: #5cc1ff;
            color: white;
            font-weight: 900;
            border-radius: 12px;
            border: 2px solid lightgrey;
            outline: none!important;
        }
        .confirm:focus {
               outline: none!important;
        }
        @media(max-width: 768px){
            .sweet-alert {
                background-color: #fff;
                width: 72%!important;
                padding: 42% 12% 42%!important;
                border-radius: 5px;
                text-align: center;
                left: 2%!important;
                top: 2%!important;
                margin-left: 0px!important;
                margin-top: 0px!important;
                overflow: hidden;
                z-index: 2000;
                height:50%!important;
            }
            
        }
    </style>
</head>
<body style="background:black">
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.js"></script>
 <script type="text/javascript">
        // swal({
        //     title:'Success!',
        //     text:"Thanks for order",
        //     // timer:9000,
        //     type:'success'
        // },function() {
        //   window.location="{{url('/')}}";
        // });
    </script> 
  @if(Session::has('success'))
    <script type="text/javascript">
        swal({
            title:'Success!',
            text:"{{Session::get('success')}}",
            timer:10000,
            type:'success'
        },function(){
          //location.reload();
          window.location = "{{url('/')}}";
        }).catch(swal.noop);
    </script>
    <?php Session::forget('success');?>
    @endif
    @if(Session::has('error'))
     <script type="text/javascript">
        swal({
            title:'Oops!',
            text:"{{Session::get('error')}}",
            type:'error',
            timer:10000
        },function() {
          //location.reload();
          window.location = "{{url('/')}}";
        }).catch(swal.noop);
    </script>
    @endif
</body>