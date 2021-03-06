
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

     <link href="{{ asset('assets/admin/css/sweetalert.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/front/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
    {{-- <link rel="stylesheet" href="{{asset('asset/css/plugin.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/style.css')}}"> --}}

    @yield('style')
    <link rel="stylesheet" href="{{ asset('assets/front/2/css/style.css')}}">
    <style>
        .user-dashboard-body {
            background: #F7F7F7;
           
            font-family: 'Open Sans', "Helvetica Neue", Helvetica, Arial, sans-serif;
            color: #707478;
            padding: 30px 30px 10px 30px;
            min-height: 500px;
            margin-top: 30px;
            margin-bottom: 30px;
            border: 0.05px solid rgba(204,204,204, 0.2);
        }
    </style>
</head>

<body  data-spy="scroll">
<!-- Start Pre-Loader-->
<div id="preloader">
    <div data-loader="circle-side"></div>

</div>
<!-- End Preload -->
    <!--main menu start-->
    <nav class="main-menu">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <div class="logo">
                        <a href="{{ route('home') }}"><img src="{{ asset('assets/images/logo/logo.png') }}" style="max-width:220px; max-height: 40px;" alt="Logo"></a>
                    </div>
                </div>
                <div class="col-md-10 text-right">
                    
                    <ul id="header-menu" class="header-navigation">

                        <li>
                            <a href="{!! route('user-dashboard') !!}" class="nav-link ">
                                <span class="title">Dashboard</span>
                            </a>
                        </li>

                        <li>
                            <a href="#">Investment <i class="fa fa-caret-down"></i></a>
                            <ul class="mega-menu mega-menu1 mega-menu2 menu-postion">

                                    <li class="mega-list mega-list1">
                                        <a href="{!! route('investment-new') !!}" class="nav-link ">
                                            New Investment
                                        </a>
                                        <a href="{!! route('market-new') !!}" class="nav-link ">
                                            New Market
                                        </a>
                                        <a href="{!! route('investment-history') !!}" class="nav-link ">
                                            Investment History
                                        </a>
                                   
                                        <a href="{!! route('user-repeat-history') !!}" class="nav-link ">
                                            Repeat History
											
                                        </a>
                                    </li>
                            </ul>
                        </li>

                        <li><a href="#">transaction <i class="fa fa-caret-down"></i></a>
                            <ul class="mega-menu mega-menu1 mega-menu2 menu-postion-2">
                                    
                                    <li class="mega-list mega-list1">
                               
                                    <a href="{!! route('withdraw-request') !!}" class="nav-link ">
                                        Withdraw Fund
                                    </a>

                                    <a href="{!! route('withdraw-log') !!}" class="nav-link ">
                                       Withdraw History
                                    </a>

                                    <a href="{!! route('deposit-fund') !!}" class="nav-link ">
                                        Deposit Fund
                                    </a>
                             
                                    <a href="{!! route('deposit-history') !!}" class="nav-link ">
                                        <span class="title">Deposit History</span>
                                    </a>
                               
                                    <a href="{!! route('user-activity') !!}" class="nav-link ">
                                     Transaction Log
                                    </a>
                                </li>

                            </ul>
                        </li>


                        @if(Auth::check())
                            <li><a href="#">Hi. {{ Auth::user()->name }} <i class="fa fa-caret-down"></i></a>
                                <ul class="mega-menu mega-menu1 mega-menu2 menu-postion-3">
                                    <li class="mega-list mega-list1">
                                        <a href="{!! route('edit-profile') !!}">Edit Profile </a>
                                        <a href="{{ url('user/account-details') }}">Account Details </a>
                                        <a href="{!! route('change-password') !!}">Change Password </a>
                                        <a href="{!! route('support-all') !!}" class="nav-link nav-toggle">
                                            <span class="title">Get Support</span></a>
                                        <a href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"></i> Logout
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @else
                            <li><a href="#">Account <i class="fa fa-caret-down"></i></a>
                                <ul class="mega-menu mega-menu1 mega-menu2 .menu-postion-3">
                                     <li class="mega-list mega-list1">
                                        <a href="{{ route('login') }}">Login</a>
                                        <a href="{{ route('register') }}">Register</a>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </nav><!--main menu end-->

<div class="clearfix"></div>

            @yield('content')
 
<!-- Online Section End -->

<div class="clearfix"></div>

<!--footer area start-->
<footer id="contact" class="footer-area">
        <div class="container">
                      <div class="row">
                <div class="col-md-4 col-sm-12 wow fadeInLeft" data-wow-duration="3s">
                    <p class="copyright-text">
                       
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

 <!--Google Map APi Key-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAHzPSV2jshbjI8fqnC_C4L08ffnj5EN3A"></script>
<!--jquery script load-->
<script src="{{ asset('assets/front/js/jquery.js') }}"></script>

<script src="{{ asset('assets/front/2/js/modernizr.js')}}"></script>

<script src="{{ asset('assets/admin/js/sweetalert.min.js') }}"></script>

<script src="{{ asset('assets/front/js/bootstrap.min.js') }}"></script>

<script src="{{ asset('assets/front/js/jquery.dataTables.min.js') }}"></script>

<script src="{{ asset('assets/front/js/dataTables.bootstrap.min.js') }}"></script>
{{-- <script src="{{asset('asset/js/plugins.min.js')}}"></script>
<script src="{{asset('asset/js/script.min.js')}}"></script> --}}

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
<!--WayPoints script load-->
<script src="{{ asset('assets/front/js/waypoints.min.js') }}"></script>

    @yield('script')
<!--Main js file load-->
<script src="{{ asset('assets/front/js/main.js') }}"></script>

<script src="{{ asset('assets/front/2/js/main.js') }}"></script>

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

@if (session('message'))
   <script type="text/javascript">
       $(document).ready(function(){
           swal("{{ session('message') }}");
       });
   </script>
@endif
<script>
       $(document).ready(function() {
           $('#sample_1').DataTable()
       });
   </script>
<!--end swal alert message-->
</body>
</html>





