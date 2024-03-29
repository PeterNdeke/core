<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $site_title }} | {{ $page_title }}</title>
    <!--Favicon add-->
    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/images/logo/icon.png') }}">
    <!--bootstrap Css-->
    <link href="{{ asset('assets/front/css/bootstrap.min.css') }}" rel="stylesheet">
    <!--font-awesome Css-->
    <link href="{{ asset('assets/front/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- Lightcase  Css-->
    <link href="{{ asset('assets/front/css/lightcase.css') }}" rel="stylesheet">
    <!--WOW Css-->
     <link href="{{ asset('assets/front/css/animate.min.css') }}" rel="stylesheet">
    <!--Slick Slider Css-->
    <link href="{{ asset('assets/front/css/slick.css') }}" rel="stylesheet">
    <!--Slick Nav Css-->
    <link href="{{ asset('assets/front/css/slicknav.min.css') }}" rel="stylesheet">
    <!--Swiper  Css-->
    <link href="{{ asset('assets/front/css/swiper.min.css') }}" rel="stylesheet">
    <!--Style Css-->
    <link href="{{ asset('assets/front/css/style.css') }}" rel="stylesheet">
    <!-- Theam Color Css-->
    <link href="{{ asset('assets/css/color.php?color='.$basic->color) }}" rel="stylesheet">
    <!--Responsive Css-->
    <link href="{{ asset('assets/front/css/responsive.css') }}" rel="stylesheet">
    @yield('style')
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>

    <link rel="stylesheet" href="{{ asset('assets/front/2/css/style.css')}}">
    
    <script src="{{ asset('assets/front/2/js/modernizr.js')}}"></script>

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,900|Mirza:400,700&amp;subset=arabic" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Allura" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('asset/css/plugin.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/style.css')}}">

    <!-- Global site tag (gtag.js) - Google Ads: 657888315 --> 
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-657888315"></script> 
    <script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'AW-657888315'); </script>
</head>

<body  data-spy="scroll">
<!-- Start Pre-Loader-->

<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      xfbml            : true,
      version          : 'v6.0'
    });
  };

  (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- Your customer chat code -->
<div class="fb-customerchat"
  attribution=setup_tool
  page_id="1988612584780194">
</div>

<div id="preloader">
    <div data-loader="circle-side"></div>

</div>
<!-- End Preload -->
<div class="animation-element">
<!-- End Pre-Loader -->
<!--support bar  top start-->
<div class="support-bar-top wow slideInLeft" data-wow-duration="2s" id="raindrops-green">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="contact-info">
                    <a href="mailto:{{$basic->email}}"> <i class="fa fa-envelope email" aria-hidden="true"></i> {{$basic->email}}</a>
                   
                </div>
            </div>
            <div class="col-md-4">
                <div class="contact-info">
                   
                    <a href="#"> <i class="fa fa-phone" aria-hidden="true"></i> {{ $basic->phone }} </a>
                </div>
            </div>
            <div class="col-md-4 text-right bounceIn">
                <div class="contact-admin">
                    <a href="{{url('login')}}"><i class="fa fa-user"></i> LOGIN </a>
                    <a href="{{url('register')}}"><i class="fa fa-user-plus"></i> REGISTER</a>
                    <div class="support-bar-social-links">
                        @foreach($social as $s)
                            <a href="{{ $s->link }}">{!!  $s->code  !!}</a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!--main menu section start-->
<nav class="main-menu wow slideInRight" data-wow-duration="2s">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="logo">
                    <a href="{{url('/')}}"><img src="{{asset('assets/images/logo/logo.png')}}" style="max-height:60px;"></a>
                </div>
            </div>
            <div class="col-md-9 text-right">
                <ul id="header-menu" class="header-navigation">
				
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ url('plans') }}">Investment</a></li>
                {{-- <li><a class="" href="{{url('properties')}}">Properties</a></li>
                <li><a class="" href="{{url('sectors')}}">Sectors</a></li> --}}
                <li><a class="page-scroll" href="#">Sectors<i class="fa fa-angle-down"></i></a>
                             <ul class="mega-menu mega-menu1 mega-menu2 menu-postion-4" style=" right:230px !important;">
							

                                <li class="mega-list mega-list1"><a class="page-scroll" href="{{url('sector-details/agricultural-sector')}}">Agricultural Sector</a></li>
                                <li class="mega-list mega-list1"><a class="page-scroll" href="{{url('sector-details/real-estate-sector')}}">Real Estate Sector</a></li>
                                <li class="mega-list mega-list1"><a class="page-scroll" href="#">Oil and Gas Sector</a></li>
                                <li class="mega-list mega-list1"><a class="page-scroll" href="#">Capital Market</a></li>
							
                            </ul>
                        </li> 
                        <li><a href="{{ route('about') }}">About Us</a></li>
                    <li><a href="{{ route('faqs') }}">Faq</a></li>
                    <li><a href="{{ route('contact') }}">Contact</a></li>
                  
                  
                    @if(Auth::check())
                        <li>
                            <a href="#">Hi. {{ Auth::user()->name }} <i class="fa fa-caret-down"></i></a>
                             <ul class="mega-menu mega-menu1 mega-menu2 menu-postion-4">
                                <li class="mega-list mega-list1"><a href="{{ route('user-dashboard') }}">Dashboard</a>
                               
                                    <a href="{{ route('logout') }}" onClick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="">Log Out</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                           
                        </li>
                    @else
                        <li><a class="page-scroll" href="#">Account <i class="fa fa-angle-down""></i></a>
                            <ul class="mega-menu mega-menu1 mega-menu2 menu-postion-4">
                                <li class="mega-list mega-list1">
                                    <a class="page-scroll" href="{{ route('login') }}">Login</a>
                                    <a class="page-scroll" href="{{ route('register') }}">Register</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
</nav>
<!--main menu section end-->

@yield('content')

<!-- Online Section End -->

<div class="clearfix"></div>


<div class="clearfix"></div>

{{-- <!--payment method section start-->
<section class="client-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-header wow zoomInDown" data-wow-duration="2s">
                    <h2><span>PAYMENT METHOD </span> WE ACCEPT</h2>
                    <p><img src="{{asset('assets/images/logo/icon.png') }}" alt="icon"></p>
                </div><!-- section-heading -->
                <div class="section-wrapper">
                    <div class="client-list">
                        <!-- Swiper -->
                        <div class="swiper-container client-container">
                            <div class="swiper-wrapper">
                                @foreach($pay as $key => $p)
                                   <div class="swiper-slide"><div class="our-client wow rotateIn" data-wow-duration="2s"><a href="#"><img class="img-responsive" src="{{ asset('assets/images') }}/{{ $p->image }}" alt="client"></a></div></div>
                                @endforeach
                            </div>
                            <!-- Add Arrows -->
                            <div class="swiper-button-next">
                                <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                            </div>
                            <div class="swiper-button-prev">
                                <i class="fa fa-angle-double-left" aria-hidden="true"></i>
                            </div>
                        </div><!-- client container -->
                    </div><!-- client list-->
                </div><!-- swiper wrapper -->
            </div>

        </div><!-- row -->
    </div><!-- container -->
</section>
<!--end payment method section start--> --}}
<!--footer area start-->
<footer id="contact" class="footer-area">
    <!--footer area start-->
    <div class="footer-bottom">
        <div class="footer-support-bar">
            <!-- Footer Support List Start -->
            <div class="footer-support-list">
                <ul>
                    <li class="wow" data-wow-duration="1s" data-wow-delay="1s">
                        <div class="footer-thumb"><i class="fa fa-headphones"></i></div>
                        <div class="footer-content">
                            <p>24/7 Customer Support</p>
                        </div>
                    </li>
                    <li class="wow" data-wow-duration="1s" data-wow-delay="2s">
                        <div class="footer-thumb"><i class="fa fa-envelope"></i></div>
                        <div class="footer-content">
                            <p><a href="{{route('contact')}}">{{$basic->email}}</a></p>
                        </div>
                    </li>
                    <li class="wow" data-wow-duration="1s" data-wow-delay="3s">
                        <div class="footer-thumb"><i class="fa fa-comments-o"></i></div>
                        <div class="footer-content">
                            <p>Friendly Support Ticket</p>
                        </div>
                    </li>
                    <li class="wow" data-wow-duration="1s" data-wow-delay="4s">
                        <div class="footer-thumb"><i class="fa fa-phone"></i></div>
                        <div class="footer-content">
                            <p>{{ $basic->phone }}</p>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- Footer Support End -->
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12 wow fadeInLeft" data-wow-duration="3s">
                    <p class="copyright-text">
                    <a style="color:white" href="{{url('terms-and-conditions')}}">Our Terms and Conditions</a><br>
                    <a style="color:white" href="{{url('our-policy')}}">Our Privacy and return Policy</a><br>
                    <a style="color:white" href="{{url('apply-for-job')}}">Job Openings</a><br>
                    </p>
                </div>
                <div class="col-md-4 col-sm-9 wow bounceInDown" data-wow-duration="3s">
                    <p class="copyright-text">
                        {!! $basic->copy_text !!}
                    </p>
                </div>
                <div class="col-md-4 col-sm-3 wow fadeInRight" data-wow-duration="3s">
                    
                </div>
            </div>
        </div>
    </div>
    <div id="back-to-top" class="scroll-top back-to-top" data-original-title="" title="" >
        <i class="fa fa-angle-up"></i>
    </div>
</footer>
<style type="text/css">
    li.export-main {
        visibility: hidden;
    }
</style>
{{-- <!--Google Map APi Key-->
<script src="{{asset('asset/js/plugins.min.js')}}"></script>
<script src="{{asset('asset/js/script.min.js')}}"></script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAHzPSV2jshbjI8fqnC_C4L08ffnj5EN3A"></script> --}}
<!--jquery script load-->
<script src="{{ asset('assets/front/js/jquery.js') }}"></script> 

<script src="{{ asset('assets/front/js/bootstrap.min.js') }}"></script>
<!-- Gmap Load Here -->
<script src="{{ asset('assets/front/js/gmaps.js') }}"></script>
<!-- Map Js File Load -->
<script src="{{ asset('assets/front/js/map-script.php?color='.$basic->color) }}"></script>
<!-- Highlight script load-->
<script src="{{ asset('assets/front/js/highlight.min.js') }}"></script>
<!--Jquery Ui Slider script load-->
<script src="{{ asset('assets/front/js/jquery-ui-slider.min.js') }}"></script>
<!--Circleful Js File Load-->
<script src="{{ asset('assets/front/js/jquery.circliful.js') }}"></script>
<!--CounterUp script load-->
<script src="{{ asset('assets/front/js/jquery.counterup.min.js') }}"></script>
<!-- Ripples  script load-->
<script src="{{ asset('assets/front/js/jquery.ripples-min.js') }}"></script>
<!--Slick Nav Js File Load-->
<script src="{{ asset('assets/front/js/jquery.slicknav.min.js') }}"></script>
<!--Lightcase Js File Load-->
<script src="{{ asset('assets/front/js/lightcase.js') }}"></script>
<!--particle Js File Load-->
<script src="{{ asset('assets/front/js/particles.min.js') }}"></script>
<!--particle custom Js File Load-->
<script src="{{ asset('assets/front/js/particles-custom.js') }}"></script>
<!--RainDrops script load-->
<script src="{{ asset('assets/front/js/raindrops.js') }}"></script>
<!--Easing script load-->
<script src="{{ asset('assets/front/js/easing-min.js') }}"></script>
<!--Slick Slider Js File Load-->
<script src="{{ asset('assets/front/js/slick.min.js') }}"></script>
<!--Swiper script load-->
<script src="{{ asset('assets/front/js/swiper.min.js') }}"></script>
<!--WOW script load-->
<script src="{{ asset('assets/front/js/wow.min.js') }}"></script>
<!--WayPoints script load-->
<script src="{{ asset('assets/front/js/waypoints.min.js') }}"></script>
    @yield('script')
<!--Main js file load-->
<script src="{{ asset('assets/front/js/main.js') }}"></script>

<script src="{{ asset('assets/front/2/js/main.js') }}"></script>
<!-- <script src="{{ asset('assets/js/main.js') }}"></script> -->
<!--swal alert message-->
@if (session('success'))
    <script type="text/javascript">
        $(document).ready(function(){
            swal("Success!", "{{ session('success') }}", "success");
        });
    </script>
@endif
@if (session('alert'))
    <script type="text/javascript">
        $(document).ready(function(){
            swal("Sorry!", "{{ session('alert') }}", "error");
        });
    </script>
@endif
@if (session('error'))
    <script type="text/javascript">
        $(document).ready(function(){
            swal("Sorry!", "{{ session('error') }}", "error");
        });
    </script>
@endif

<!--end swal alert message-->
<script>
var mobile = (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent));

hljs.initHighlightingOnLoad();
hljs.configure({useBR: true});
jQuery('#raindrops').raindrops({color:'#fff',canvasHeight:5});
jQuery('#raindrops-green').raindrops({color:'#{{$basic->color}} ',canvasHeight:5});


</script>
</body>
</html>