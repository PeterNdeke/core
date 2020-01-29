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
                        <img src="{{ asset('assets/images') }}/{{ $item->image_url }}" alt="">
                        </div>
                        <div class="post-content">
                            <div class="post-header">
                            <h3>{{$item->title}}</h3>
                                <ul>
                                <li>{{$item->created_at->toformattedDateString()}}</li>
                                <li>By <a href="#">{{$item->author}}</a></li>
                                    
                                </ul>
                            </div>
                            <div class="post-body">
                                <p>
                                    {!! $item->description !!}
                                </p>
                               
                    </div><!-- ends: .post-details -->

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

    

  
   
@endsection