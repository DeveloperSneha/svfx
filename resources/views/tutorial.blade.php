<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>SimarVFX</title>
  <link rel="shortcut icon" href="{{asset('img/svg/svfx.svg')}}"/>
  <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"  />
  <link href="{{asset('css/animate.min.css')}}" rel="stylesheet" type="text/css"  />
  <link href="{{asset('css/owl-carousel.css')}}" rel="stylesheet" type="text/css"  />
  <!-- <link href="{{asset('css/filter.css')}}" rel="stylesheet" type="text/css"  /> -->
  
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,900&display=swap" rel="stylesheet">
  <link href="{{asset('css/cubetutorial.min.css')}}" rel="stylesheet" type="text/css"  />
  <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css"  />
  
</head>
<style>
  .cbp-item {
    display: inline-block;
  }
</style>
<body>
  @if ($message = Session::get('success'))
    <div class="alert alert-success">
      <h3 style="text-align:center;">{!! $message !!}</h3>
    </div>
    <?php Session::forget('success');?>
    @endif
    @if ($message = Session::get('error'))
    <div class="alert alert-danger">
      <h3 style="text-align:center;">{!! $message !!}</h3>
    </div>
    <?php Session::forget('error');?>
    @endif
  <!----------------------- header -------------------->
  <div class="header-buttom">
    <div class="header-bottom">
      <div class="container-fluid">
        <div class="row">
          <nav class="navbar navbar-expand-md navbar-light"> <a href="{{url('/')}}" class="navbar-brand"> <img src="{{asset('img/svg/simarvfx logo.svg')}}" alt="logo" style="height: 55px;"> </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse"> <span class="navbar-toggler-icon"></span> </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
              <div class="navbar-nav">
                <ul>
                  <li class="active"><a href="#services">services</a></li>
                  <li><a href="#tutorial">tutorial</a> </li>
                  <li><a href="#clients">clients</a></li>
                  <li><a href="http://devilingsupply.com/" target="_blank">Merch</a></li>
                  <li><a href="#">tutorials</a></li>
                  <li><a href="#contact">contact</a></li>
                </ul>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </div>
  <!--------------------- Header End ------------------> 
  <section id="howework" class="howework" data-aos="fade-up">
  <div class="container-fluid">
    <div class="row">
      <div class="heading-design">
          <i><img src="{{asset('img/svg/tutorial.svg')}}" style="width: 135px;"> </i>
          <h2>tutorial</h2>
          <p>See our creativity in action</p>
      </div>
    </div>
  </div>
  <div id="js-grid-juicy-projects" class="cbp"> 
  @foreach($tutorials as $tutorial)    
    <div class="cbp-item {{$tutorial->service->slug}}">
      <div class="cbp-slider-inline">
        <div class="cbp-slider-wrapper">
          <div class="cbp-slider-item cbp-slider-item--active">
            <a href="{{$tutorial->video}}" class="cbp-lightbox">
              <iframe src="{{$tutorial->video}}" alt="" width="337px" height="490px"></iframe>
            </a>
          </div>
        </div>
      </div>
    </div>
    @endforeach  
  </div> 
</section>
  <!------------------------- Footer ------------------------------>
  <footer style="background:url({{asset('/img/footer.png')}});">
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: none;">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Terms & Conditions</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
              <h6>By accessing or using our Services, you confirm your agreement to be bound by these Terms. If you do not agree to these Terms, you may not access or use our Services.</h6>
            <p class="text-left text-dark">
              <strong>1. Deposits</strong><br>
              Payments are 100% upfront. We only start working on your order after receiving
              the payment;<br><br>
              <strong>2. Payment options</strong><br>
              At the moment we only accept PayPal. Any other methods of payment are not
              accepted. You can easily create a PayPal account using any debit/credit cards
              through our PayPal payment gateway (it only takes 2 min);<br><br>
              <strong>3. Refunds</strong><br>
              Refunds are only accepted if requested no later than 48 hours after confirming
              your purchase. Any other refund requests will not be accepted;<br><br>
              <strong>4. Digital files</strong><br>
              All files will be delivered via email after final approval by the client. Formats
              we work with: JPEG, MP4, PNG, PSD, AI &amp; PDF (vector files only available
              for logos and clothing artwork).<br><br>
              <strong>5. Communication</strong><br>
              We will handle all questions and requests via email or Instagram DM’s. Please
              allow up to 12 hours for us to reply;<br><br>
              <strong>6. Rush delivery</strong><br>
              We please request that you be patient and wait the designated time frame for us
              to complete the work. We will not rush the work and compromise our service
              quality in anyway. Please don’t insist;<br><br>
              <strong>7. Trademarking</strong><br>
              We do not trademark any logos. However, you can feel free to register your logo
              and brand name with the trademarking office in your country. We only design
              100% custom/original logos, so you won’t have any copyright issues;<br><br>
              <strong>8. Stock Images</strong><br>
              For any Cover Art services, have in mind that we can use Royalty Free Stock
              Images for the design. These images are 100% Royalty Free, so no need to
              worry about any copyright allegations;<br><br>
              <strong>9. Revisions</strong><br>
              We only allow up to 3 free revisions on the design. For each revision we request
              up to 24 hours to send you an update. Please have your ideas ready for your
              design. If you are undecided/unsure about how you would like your design and
              are looking for us to take creative control of your project, making your payment
              will serve as a bonding agreement that you are accepting that the final design
              will be at the discretion of SimarVFX with the exception of minor changes.
              Any large change of direction after the fore mentioned will be priced
              accordingly – starting at, but not limited to $50. Refunds won’t be accepted in
              that case. If more than 3 revisions are needed, extra fees may be applied ($25 per
              revision);<br><br>
              <strong>10. Domains/Hosting</strong><br>
              We do not provide any of these services. Please purchase a domain name and
              website hosting package before purchasing any website services. We also do not
              work with any website creation tools such as Wix or Weebly. We only create
              custom WordPress websites;<br><br>
              <strong>11. Images and pictures provided by clients</strong>
              Please always provide HD images and pictures. We are not able to fix any low
              resolution or blurred pics;<br><br>
              <strong>12. Website warranty</strong><br>
              You have 1 Month of free support and warranty for your website. Please have in
              mind that we only offer free support for problems originated from our end. Any
              issues caused by code editing or any other website editing done by the client will
              be only fixed upon payment of a support fee;
            </p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">I Agree</button>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="text-center footermenu">
          <ul>
            <li><a href="" data-toggle="modal" data-target="#exampleModal">Terms & Conditions</a></li>
            <li><a href="#faq">FAQ</a><li>
            <li><a href="#contact">Contact us</a></li>
          </ul>
        </div>
        <div class="text-center col-sm-12">
          <img src="{{asset('img/svg/Footer Cashapp and paypal.svg')}}" style="height: 120px;" />
          <p>@copyright 2020- All rights reseved | Developed By <a href="https://www.webyugg.com/">Webyugg</a></p>
          <img src="{{asset('img/svg/simarvfx logo.svg')}}"  style="height: 48px;" />
        </div>
      </div>
    </div>
  </footer>
  <!-------------------------End Footer---------------------------->
  
  <script src="{{asset('js/jquery.min.js')}}" type="text/javascript"></script>  
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="{{asset('js/bootstrap.min.js')}}" type="text/javascript"></script>
  <script await type="text/javascript" src="{{asset('js/jquery.cubetutorial.min.js')}}"></script>
  <script src="{{asset('js/owl-carousel.js')}}" type="text/javascript"></script>
  <script src="{{asset('js/modernizr.js')}}"></script> 
  <script src="{{asset('js/jquery.mixitup.min.js')}}"></script>
  <script src="{{asset('js/aos.js')}}"></script>
  <script src="{{asset('js/main.js')}}"></script>  
</body>
</html>
