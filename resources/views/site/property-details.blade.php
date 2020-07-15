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

                        @foreach ($details->property_galleries as $item)
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
                        <div class="post-content">
                            <div class="post-header">
                            <h3>{{$details->name}}</h3>
                              
                            </div>

                            <div class="row">
                            <div class="post-body col-md-7">
                                <p>
                                    <h4>Property Description</h4>
                                    <p>{!! $details->description !!}</p>

                                    <h4>Features</h4>
                                    <div class="m-bottom-40">
                                    
                                        <ul class="bullet--list2">
                                            @foreach ($details->property_features as $value)
                                        <li class="bullet_list">{!!$value->feature!!}</li>
                                            @endforeach
                                            
                                       
                                     
                                     
                                    
                                        </ul><!-- ends: .bullet--list2 -->
                                    
                                                                    </div>
                                </p>
                                <ul class="icon-list--one">
                            
                                <li class="list-item icon-list"><span class="color-secondary"><i class="la la-calendar-check-o"></i></span> <strong>Price:</strong>{{number_format_short($details->price)}}</li>
                                 
                                        
                                   
                                
                                        
                                <li class="list-item icon-list"><span class="color-secondary"><i class="la la-map-marker"></i></span> <strong>Location:</strong>{{$details->location}}</li>
                                
                                        
                                    <li class="list-item icon-list"><span class="color-secondary"><i class="la la-mobile"></i></span> <strong>Contact:</strong>07015558349 , 0905 064 7814</li>
                                
                                    </ul><!-- ends .icon-list--one -->
                               
                    </div><!-- ends: .post-details -->
                   
                    
                      
                    
                                 
                                   

                    <div class="comment-form cardify m-top-60 margin-md-60 border col-md-5">
                        <div class="comment-title">
                            <h5>Contact Us for this Property</h5>
                            <span>Your email address will not be published. Required fields are marked <span class="color-primary">*</span></span>
                        </div>
                        <div class="comment_form_wrapper m-top-40">
                            <form action="#">
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="text" placeholder="Name*" class="form-control m-bottom-30" required>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="email" placeholder="Email*" class="form-control m-bottom-30" required>
                                    </div>
                                    <div class="col-md-12">
                                        <textarea placeholder="Your Text" class="form-control m-bottom-30"></textarea>
                                        <button class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div><!-- ends: .comment-form -->

                            </div>

                   

                </div><!-- ends: .col-lg-8 -->

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