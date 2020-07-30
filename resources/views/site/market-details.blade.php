@extends('layouts.newfrontend')
@section('content')
     <!--header section start-->
    <section class="breadcrumb-section" style="background-image: url('{{ asset('assets/images/logo/bb.png') }}')">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <!-- breadcrumb Section Start -->
            <div class="breadcrumb-content">
               <h5>{{ $page_title}}</h5>
            </div>
            <!-- Breadcrumb section End -->
          </div>
        </div>
      </div>
    </section> 

    <section class="blog-single-wrapper section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="post-details">
                        <div class="post-head">
                       
    <section class="carousel-wrapper py-5">
        
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="carousel-three owl-carousel">

                        @foreach ($details->market_images as $item)
                        <div class="carousel-single">
                            
                            <div class="card card-shadow card-six">
                                <figure>
                                    <img src="{{ asset('assets/images') }}/{{ $item->image }}" alt="">
                                </figure>
                              
                            </div><!-- End: .card -->
                         
                                            </div>
                        @endforeach
                       
                      
                    </div><!-- ends: .owl-carousel -->
                </div>
            </div>
        </div>
    
        </section><!-- ends: .carousel-wrapper -->
                        </div>
                       

                    {{-- <div class="post-bottom d-flex justify-content-between">
                        <div class="tags">
                            <ul class="d-flex">
                                <li><a href="#">Business</a></li>
                                <li><a href="#">Finance</a></li>
                                <li><a href="#">Marketing</a></li>
                            </ul>
                        </div>
                        <div class="social-share d-flex align-items-center">
                            <span class="m-right-15">Share Post: </span>
                            
    
        
    

    <div class="social social--small social--colored ">
        <ul class="d-flex flex-wrap">
            <li><a href="#" class="facebook"><span class="fab fa-facebook-f"></span></a></li>
            <li><a href="#" class="twitter"><span class="fab fa-twitter"></span></a></li>
            <li><a href="#" class="linkedin"><span class="fab fa-linkedin-in"></span></a></li>
            <li><a href="#" class="gplus"><span class="fab fa-google-plus-g"></span></a></li>
        </ul>
    </div><!-- ends: .social -->

                        </div>
                    </div><!-- ends: .post-bottom --> --}}

                   

                   

                  



                </div><!-- ends: .col-lg-8 -->

               
            </div>
        </div>
    </section><!-- ends: .blog-wrapper -->

    @section('script')
    <script src="{{asset('asset/js/plugins.min.js')}}"></script>
    <script src="{{asset('asset/js/script.min.js')}}"></script>
    @endsection

  
   
@endsection