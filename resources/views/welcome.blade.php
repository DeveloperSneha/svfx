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
  <link href="{{asset('css/cubeportfolio.min.css')}}" rel="stylesheet" type="text/css"  />
  <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css"  />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.css"  rel="stylesheet">
</head>
<style>
  .cbp-item {
    display: inline-block;
  }
</style>
<body>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.js"></script>
  @if(Session::has('success'))
    <script type="text/javascript">
        swal({
            title:'Success!',
            text:"{{Session::get('success')}}",
            timer:5000,
            type:'success'
        }).then((value) => {
          //location.reload();
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
            timer:5000
        }).then((value) => {
          //location.reload();
        }).catch(swal.noop);
    </script>
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
                  <li><a href="#portfolio">portfolio</a> </li>
                  <li><a href="#clients">clients</a></li>
                  <li><a href="http://devilingsupply.com/" target="_blank">Merch</a></li>
                  <li><a href="{{url('tutorial')}}">tutorials</a></li>
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

  <!----------------------- main slider ----------------------> 
  <section class="main-slider">
    <div id="slider-animation" class="carousel slide" data-ride="carousel"> 
      <!-- Indicators -->
      <ul class="carousel-indicators">
        <li data-target="#slider-animation" data-slide-to="0" class="active"></li>
        <li data-target="#slider-animation" data-slide-to="1"></li>
        <li data-target="#slider-animation" data-slide-to="2"></li>
        <li data-target="#slider-animation" data-slide-to="3"></li>
      </ul>
      <!-- The slideshow -->
      <div class="carousel-inner">
        @foreach($banners as $banner)
        <div class="carousel-item {{$banner->name}}">
          <img src="{{asset('img/banner/'.$banner->image)}}"  />
        </div>
        @endforeach
      </div>

      <div class="owl-nav">
        <a class="carousel-control-prev owl-prev" href="#slider-animation" data-slide="prev" style="font-size: 30px;">&#x3C; <span class="fa fa-angle-left"></span> </a> 
        <a class="carousel-control-next owl-next" href="#slider-animation" data-slide="next" style="font-size: 30px;">&#x3E;<span class="fa fa-angle-right"></span> </a> 
      </div>
    </div>
  </section>
  <!----------------------- End main slider ----------------------> 

  <!------------------------- Design Get ------------------------------->
  <section class="design-get">
    <div class="container">
      <div class="row">
        <div class="design-box">
          <h2>Design can change evereything</h2>
          <p>Leave your mark with unique and impactful designs</p>
          <div class="buttonshowa">
            <a href="#services"><img src="{{asset('img/button1.png')}}"  /></a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!---------------------- End Design Get ------------------------------->

  <!----------------------- Perfect design ------------------------------->
  <section class="perfact-design">
    <div class="container-fluid">
      <div class="row">
        <div class="heading-design">
          <i><img src="{{asset('img/svg/PERFECT DESIGN FOR EVEREYONE.svg')}}" style="width: 120px;" /> </i>
          <h2>Perfect Design for Everyone</h2>
        </div>
      </div>
      <div class="row margin-top-35">
        <div class="col-sm-3 lbx" >
          <!--<div class="boxleftside"></div>-->
        </div>
        <div class="col-sm-3">
          <div class="box-a">
            <i><img src="{{asset('img/perfect-icon-3.png')}}" style="width: 80px;height: 74px;"/></i>
            <h3 style="margin-left: 8%;">For Artists</h3>
            <ul>
              <li><img src="{{asset('/img/svg/arrow bullet.svg')}}" style="width: 14px;"> Atract more fans</li>
              <li><img src="{{asset('/img/svg/arrow bullet.svg')}}" style="width: 14px;"> Get more plays and views</li>
              <li><img src="{{asset('/img/svg/arrow bullet.svg')}}" style="width: 14px;"> Get noticed by Major labels</li>
            </ul>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="box-a">
            <i><img src="{{asset('img/svg/for music producers.svg')}}" style="width: 80px;height: 74px;"/></i>
            <h3 style="margin-left: 8%;">For Producers</h3>
            <ul>
              <li><img src="{{asset('/img/svg/arrow bullet.svg')}}" style="width: 14px;"> Build your fan base</li>
              <li><img src="{{asset('/img/svg/arrow bullet.svg')}}" style="width: 14px;"> Sell more beats</li>
              <li><img src="{{asset('/img/svg/arrow bullet.svg')}}" style="width: 14px;"> Get noticed by major artists</li>
            </ul>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="box-a">
            <i><img src="{{asset('img/svg/for entreprenuers.svg')}}" style="width: 80px;height: 74px;"/></i>
            <h3 style="margin-left: 8%;">For Entrepreneur</h3>
            <ul>
              <li><img src="{{asset('/img/svg/arrow bullet.svg')}}" style="width: 14px;"> Build brand awareness</li>
              <li><img src="{{asset('/img/svg/arrow bullet.svg')}}" style="width: 14px;"> Add value to your business</li>
              <li><img src="{{asset('/img/svg/arrow bullet.svg')}}" style="width: 14px;"> Sell more and Consistently</li>
            </ul>
          </div>
        </div>
        <div class="col-sm-3">
          <!--<div class="boxrightside"></div>-->
        </div>
        <div class="col-sm-12">
          <div class="row box-fulld">

            <h3>More Benefits</h3>
            <div class="col-lg-3 offset-3">
              <div class="box-a">
                <ul>
                  <li><img src="{{asset('/img/svg/arrow bullet.svg')}}" style="width: 14px;"> Avoid scammers and save time and money</li>

                  <li><img src="{{asset('/img/svg/arrow bullet.svg')}}" style="width: 14px;"> Work with an Experienced and well prepared team of marketers and designers</li>

                  <li><img src="{{asset('/img/svg/arrow bullet.svg')}}" style="width: 14px;"> 24/7 support via email</li>
                </ul>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="box-a">
                <ul>
                  <li><img src="{{asset('/img/svg/arrow bullet.svg')}}" style="width: 14px;"> Fast turnarounds</li>

                  <li><img src="{{asset('/img/svg/arrow bullet.svg')}}" style="width: 14px;"> Hire us online from anywhere around the world</li>

                  <li><img src="{{asset('/img/svg/arrow bullet.svg')}}" style="width: 14px;"> 100% secure/global online transactions via PayPal</li>
                </ul>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
  <!--------------------- End Parfect design ------------------------------->

  <!----------------------- what we do -------------------------------------------->
  <section class="whatwedo" id="services">
    <div class="container">
      <div class="row">
        <div class="heading-design">
          <i><img src="{{asset('img/svg/what we do mouse.svg')}}" style="width: 135px;"/> </i>
          <h2>What we Do</h2>
          <p>Services we can provide</p>
        </div>
      </div>
      <div class="row margin-top-35">
        @foreach($services as $var)
        <div class="col-sm-3">
          <div class="whatwedobox">
            <i><img src="{{asset('img/svg/'.$var['icon'])}}" /></i>
            <h3>{{$var['serviceName']}}</h3>
            <p>{{$var['description']}}</p>
            <h4>Prices from ${{$var['price']}} <img src="{{asset('img/pay.png')}}"/>  <img src="{{asset('img/svg/Square_Cash_app_logo.svg')}}"  /></h4>
            <a href="{{url($var['url'])}}">Start a Project <img src="{{asset('img/svg/start a project icon.svg')}}" style="width: 50px;"/></a>
          </div>
        </div>
        @endforeach        
      </div>
    </div>
  </section>
  <!----------------------- End what we do -------------------------------------------->

  <!------------------------ How we work ----------------------------------------------->
  <section class="howework">
    <div class="container">
      <div class="row">
        <div class="heading-design">
          <i><img src="{{asset('img/svg/how we work.svg')}}" style="width: 135px;" /> </i>
          <h2>how we work</h2>
          <p>The creative process behind great work</p>
        </div>
      </div>

      <div class="row topm-s ">
        <div class="col-sm-4">
          <div class="howework-box">
            <i><img src="{{asset('img/svg/step one brifing the payment.svg')}}" style="width: 80px;" /></i>
            <div class="imgright"><img src="{{asset('img/payment-r.png')}}" /></div>
            <h2>Step 1</h2>
            <h4>Briefing and payment</h4>
            <p>Choose the service you would need 
              and tell us a little bit about yourself 
              and the design you need by filling
              our service form. At the end, you will 
            be directed to the payment page.</p>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="howework-box">
            <i><img src="{{asset('img/svg/Craetion step 2.svg')}}" style="width: 80px;" /></i>
            <div class="imgright"><img src="{{asset('img/creation-r.png')}}" /></div>
            <h2>Step 2</h2>
            <h4>Creation</h4>
            <p>Just relax and let us do the work.
              We do a lot of research and start 
              sketching out ideas. Our team will
              carefully develop the best one and 
              present it to you within 3 business 
            days* via email.</p>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="howework-box">
            <i><img src="{{asset('img/svg/step 3 revise and deliver.svg')}}" style="width: 80px;" /></i>
            <div class="imgright"><img src="{{asset('img/delivery-r.png')}}" style="width: 265px;" /></div>
            <h2>Step 3</h2>
            <h4>Revise & Deliver</h4>
            <p>We begin to make the necessary 
              revisions on the design based on
              your feedback. Once everything is
              approved, we send all the files to 
              your email in various formats. Each 
              suitable for specific platforms and 
            applications.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!----------------------  End How we work ------------------------------------------>

  <!------------------------  portfolio ----------------------------------------->
  <section id="portfolio" class="portfolio" data-aos="fade-up">
  <div class="container">
    <div class="row">
      <div class="heading-design">
          <i><img src="{{asset('img/svg/portfolio.svg')}}" style="width: 135px;"> </i>
          <h2>Portfolio</h2>
          <p>See our creativity in action</p>
      </div>
    </div>
  </div>
  <div id="js-filters-juicy-projects" class="cbp-l-filters-button d-flex justify-content-center align-items-center">
    <p class="filters-title"><img src="{{asset('img/svg/filter the galary portfolio icon.svg')}}" width="45px"> Filter the gallery </p>
    <div class="dropdown">
      <button class="btn btn-filter dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        All items
      </button>
      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <div class="dropdown-item cbp-filter-item cbp-filter-item-active" data-filter="*">All Items</div>
        @foreach($services as $var)
        <div class="dropdown-item cbp-filter-item" data-filter=".{{$var['slug']}}"><img src="{{asset('img/svg/'.$var['icon'])}}" class="section-icon">{{$var['serviceName']}}</div>
        @endforeach
      </div>
    </div>
  </div>
  <div id="js-grid-juicy-projects" class="cbp"> 
  @foreach($portfolios as $portfolio)    
    <div class="cbp-item {{$portfolio->service->slug}}">
      <div class="cbp-slider-inline">
        <div class="cbp-slider-wrapper">
          <div class="cbp-slider-item cbp-slider-item--active">
            @if(!empty($portfolio->video))
            <a class="cbp-lightbox" data-title="{{$portfolio->service->serviceName}}" href="{{$portfolio->video}}" frameborder="0">
                <img src="{{asset('img/logos/'.$portfolio->image)}}" alt="custom alt 1" width="800px" height="800px">
            </a>
            @else
            <a href="{{asset('img/logos/'.$portfolio->image)}}" class="cbp-lightbox">
              <img src="{{asset('img/logos/'.$portfolio->image)}}" alt="" width="800px" height="800px">
            </a>
            @endif
            </a>
          </div>
        </div>
      </div>
    </div>
    @endforeach  
  </div>
  <div id="js-loadMore-juicy-projects" class="cbp-l-loadMore-button">
    <a href="{{url('/')}}" class="cbp-l-loadMore-link see-more" rel="nofollow">
      <span class="cbp-l-loadMore-defaultText">LOAD MORE <img src="{{asset('img/svg/load more icon.svg')}}" style="width: 35px;height: 35px;margin: 0px;"></span>
      <span class="cbp-l-loadMore-loadingText">LOADING...</span>
      <span class="cbp-l-loadMore-noMoreLoading">NO MORE WORKS</span>
    </a>
  </div>  
</section>
  <!---------------------- End portfolio ----------------------------------------->

  <!-------------------------------------------  Follow us on Instagram ------------>
  <section class="eenstagram">
    <div class="container-fluid">
      <div class="row">
        <div class="heading-design">
          <i><img src="{{asset('img/follow.png')}}" /><img src="{{asset('img/svg/instagram icon svg.svg')}}" style="width: 40px;"> </i>
        </div>
      </div>

      <div class="row" style="margin-top: 30px;">
        <div class="col-sm-2"></div>
        <div class="col-sm-2">
          <img src="{{$self->graphql->user->profile_pic_url}}" style="border: 4px solid white;border-radius: 50%;" />
        </div>
        <div class="col-sm-5" style="margin-left: 4%;">
          <span style="color: white;font-size: 25px;">{{$self->graphql->user->username}}</span>
          <a href="https://www.instagram.com/simarvfx/" class="btn btn-primary" style="font-size: 14px;color: white;font-weight: 900;padding: .2rem .4rem;margin-left: 25px;background:royalblue;">Follow</a>
          <p style="color:white;margin-top: 20px;"><span style="margin-right: 4%;">{{$self->graphql->user->edge_owner_to_timeline_media->count}} posts</span>
          <span style="margin-right: 4%;">{{$self->graphql->user->edge_follow->count}} followers</span>
          <span>{{$self->graphql->user->edge_followed_by->count}} following</span></p>
          <p style="color:white;">{{$self->graphql->user->full_name}} ({{$self->graphql->user->category_enum}})</p>
          <p style="color:white;">{{$self->graphql->user->biography}} 
          <a href="{{$self->graphql->user->external_url}}">{{$self->graphql->user->external_url}}</a></p>
        </div>
        <!-- <div class="text-center col-sm-12">
          <img src="{{asset('img/detail.png')}}"  />
        </div> -->
        <div class="col-sm-12">
          <div class="row">
            @foreach($ig_images as $image)
           <div class="col-sm-2">
              <a href="{{$image->node->display_url}}" target="_blank">
               <img src="{{$image->node->thumbnail_src}}" alt=""  class="inst"/>
              </a>
           </div>
           @endforeach
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-------------------------------------------  Follow us on Instagram ------------>

  <!------------------------- Design Get ------------------------------->
  <Section class="let-get">
    <div class="container">
      <div class="row">
        <div class="design-box">
          <h2>Let's work & build something great together.</h2>
          <p>Bring your ideas/requirements, we'll do the rest

          </p>
          <div class="buttonshowa">
            <a href="#services"><img src="{{asset('img/button1.png')}}"  /></a>
          </div>
        </div>
      </div>
    </div>
  </Section>
  <!---------------------- End Design Get ------------------------------->

  <!------------------------  the next ------------------------------>
  <section class="thenext" id="clients">
    <div class="container-fluid">
      <div class="row">
        <div class="heading-design">
          <h2>The Next Big Wave</h2>
          <p>1000+ satisfied clients around the world</p>
        </div>
      </div>
      <div class="testimonials owl-carousel owl-theme">
        <!-- TESTIMONIAL -->
        @foreach($testimonials as $testi)
        <div class="slider">
          <img src="{{asset('img/team/'.$testi->image)}}"  class="profileimg" style="width: 70px;" />
            <h5>{{$testi->name}} @if($testi->verified == 'Y') <img src="{{asset('/img/svg/instagram bluetick.svg')}}" style="width: 23px;margin-top:-6px;display: inline-block;">@endif</h5>
            <p>{{$testi->reviews}}</p>
            <img src="{{asset('img/star.png')}}" class="staricon"  />
        </div>
        @endforeach
      </div>      
    </div>
  </section>
  <!------------------------  End the next ------------------------------>

  <!--------------------------------  Abou ------------------->
  <section class="about" id="merch">
    <div class="container">
      <div class="row">
        <div class="heading-design">
          <img src="{{asset('img/svg/about us Team.svg')}}"  style="width: 135px;" />
          <h2>About US</h2>
          <p>10Meet the SimarVFX's Team</p>
        </div>
      </div>
      <div class="row margin-top-35">
        @foreach($teams as $team)
        <div class="col-sm-2">
          <div class="about-box">
            <img src="{{asset('img/team/'.$team->image)}}" style="width:160px;height:160px;" />
            <h3>{{$team->name}}</h3>
            <p>{{$team->designation}}</p>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>
  <!--------------------------------  End About ------------------->

  <!------------------------------  Faq -------------------------------->
  <section class="faq" id="faq">
    <div class="container">
      <div class="row">
        <div class="heading-design">
          <img src="{{asset('img/svg/FAQ icon.svg')}}"  style="width: 260px;" />
        </div>
      </div>
      <div class="row margin-top-35">
        <div class="accordion" id="accordionExample">
        @foreach($faqs->chunk(7) as $chunk)

        <div class="col-xl-3 col-lg-6 col-md-6">
          @foreach($chunk as $item)
          <div class="card">
            <div class="card-header" id="heading{{$item->idFaq}}">
              <h2 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse{{$item->idFaq}}" aria-expanded="false" aria-controls="collapse{{$item->idFaq}}">
                  {{$item->question}}
                </button>
              </h2>
            </div>
            <div id="collapse{{$item->idFaq}}" class="collapse" aria-labelledby="heading{{$item->idFaq}}" data-parent="#accordionExample" style="">
              <div class="card-body">
                {!! $item->answer !!}
              </div>
            </div>
          </div>
          @endforeach
        </div>
        @endforeach
      </div>
      </div>
    </div>
  </section>
  <!------------------------------ End Faq -------------------------------->

  <!--------------------------- Contact Us ------------------------------>
  <section class="contact" id="contact">
    <div class="container-fluid">
      <div class="row">
        <div class="heading-design">
          <h2>Contact</h2>
          <p>Get in touch with us</p>
        </div>
      </div>
      <div class="row margin-top-35">
        <div class="col-sm-4 offset-4">
          <div class="contact-box">
            <form action="{{url('/contact')}}" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <div class="form-group">
                <label>Name <span>*</span></label>
                <input type="name" name="name" class="form-control" required="">
              </div>
              <div class="form-group">
                <label>Email <span>*</span></label>
                <input type="Email" name="email" class="form-control" required="">
              </div>
              <div class="form-group">
                <label>How we can help? <span>*</span></label>
                <textarea class="form-control" name="query" rows="3" required=""></textarea>
                <p class="alertbox">We'll Reply ASAP ! </p>
              </div>
              <div class="text-center col-sm-12">
                <button type="submit" class="btn "><img src="{{asset('img/sand.png')}}"  /></button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-------------------------End Contact Us ------------------------------>

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
  <script await type="text/javascript" src="{{asset('js/jquery.cubeportfolio.min.js')}}"></script>
  <script src="{{asset('js/owl-carousel.js')}}" type="text/javascript"></script>
  <script src="{{asset('js/modernizr.js')}}"></script> 
  <script src="{{asset('js/jquery.mixitup.min.js')}}"></script>
  <script src="{{asset('js/aos.js')}}"></script>
  <script src="{{asset('js/main.js')}}"></script> 
  
  <script type="text/javascript">
    $('.testimonials').owlCarousel({
       loop: true,   
       autoWidth:false, 
       margin:10,
       nav:false,
       responsive:{
        0:{
         items:1,
         autoWidth:false 
        },
        768:{
         items:6
        }
       } 
    });
  </script>  
</body>
</html>
