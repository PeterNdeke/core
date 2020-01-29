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

    <section class="cta-wrapper cta--four" id="categories">
        
        <div class="card--thirteen">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        
    <div class="card card-shadow card-one card-thirteen">
        <figure>
            <img src="{{asset('asset/img/realestate.jpg')}}" alt="">
            <figcaption>
            <a href="{{url('sector-details')}}"><i class="la la-link"></i></a>
            </figcaption>
        </figure>
        <div class="card-body">
            <p class="card-subtitle color-secondary">Real Estate</p>
            
                <h6><a href="#">Insurance And Finance</a></h6>
                <p>Investig ationes demons trave runt lectores legere liusry quod ii legunt saepius claritas Investig ationes.</p>
               
           
            
        <a href="{{url('sector-details')}}" class="btn btn-primary">See Details</a>
        </div>
       
    </div><!-- End: .card -->
    
    
                    </div>
                    <div class="col-lg-4 col-md-6">
                        
    <div class="card card-shadow card-one card-thirteen">
        <figure>
            <img src="{{asset('asset/img/oilgas1.jpg')}}" alt="">
            <figcaption>
                <a href="{{url('sector-details')}}"><i class="la la-link"></i></a>
            </figcaption>
        </figure>
        <div class="card-body">
            <p class="card-subtitle color-secondary">Oil and Gas</p>
            
                <h6><a href="{{url('sector-details')}}">Insurance And Finance</a></h6>
                <p>Investig ationes demons trave runt lectores legere liusry quod ii legunt saepius claritas Investig ationes.</p>
               
           
            
            <a href="{{url('sector-details')}}" class="btn btn-primary">See Details</a>
        </div>
    </div><!-- End: .card -->
    
                    </div>
                    <div class="col-lg-4 col-md-6">
                        
    <div class="card card-shadow card-one card-thirteen">
        <figure>
            <img src="{{asset('asset/img/bitcoin2.jpg')}}" alt="">
            <figcaption>
                <a href="{{url('sector-details')}}"><i class="la la-link"></i></a>
            </figcaption>
        </figure>
        <div class="card-body">
            <p class="card-subtitle color-secondary">Crypto Currency</p>
            
                <h6><a href="{{url('sector-details')}}">Insurance And Finance</a></h6>
                <p>Investig ationes demons trave runt lectores legere liusry quod ii legunt saepius claritas Investig ationes.</p>
               
           
            
            <a href="{{url('sector-details')}}" class="btn btn-primary">See Details</a>
        </div>
    </div><!-- End: .card -->
    
                    </div>
                    <div class="col-lg-4 col-md-6">
                        
                        <div class="card card-shadow card-one card-thirteen">
                            <figure>
                                <img src="{{asset('asset/img/realestate.jpg')}}" alt="">
                                <figcaption>
                                    <a href="{{url('sector-details')}}"><i class="la la-link"></i></a>
                                </figcaption>
                            </figure>
                            <div class="card-body">
                                <p class="card-subtitle color-secondary">Real Estate</p>
                                
                                    <h6><a href="{{url('sector-details')}}">Insurance And Finance</a></h6>
                                    <p>Investig ationes demons trave runt lectores legere liusry quod ii legunt saepius claritas Investig ationes.</p>
                                   
                               
                                
                            <a href="{{url("insights")}}/real-estate" class="btn btn-primary">See Details</a>
                            </div>
                           
                        </div><!-- End: .card -->
                        
                        
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                        
                                            <div class="card card-shadow card-one card-thirteen">
                                                <figure>
                                                    <img src="{{asset('asset/img/realestate.jpg')}}" alt="">
                                                    <figcaption>
                                                        <a href="{{url('sector-details')}}"><i class="la la-link"></i></a>
                                                    </figcaption>
                                                </figure>
                                                <div class="card-body">
                                                    <p class="card-subtitle color-secondary">Real Estate</p>
                                                    
                                                        <h6><a href="{{url('sector-details')}}">Insurance And Finance</a></h6>
                                                        <p>Investig ationes demons trave runt lectores legere liusry quod ii legunt saepius claritas Investig ationes.</p>
                                                       
                                                   
                                                    
                                                <a href="{{url("insights")}}/real-estate" class="btn btn-primary">See Details</a>
                                                </div>
                                               
                                            </div><!-- End: .card -->
                                            
                                            
                                                            </div>
                                                            <div class="col-lg-4 col-md-6">
                        
                                                                <div class="card card-shadow card-one card-thirteen">
                                                                    <figure>
                                                                        <img src="{{asset('asset/img/realestate.jpg')}}" alt="">
                                                                        <figcaption>
                                                                            <a href="{{url('sector-details')}}"><i class="la la-link"></i></a>
                                                                        </figcaption>
                                                                    </figure>
                                                                    <div class="card-body">
                                                                        <p class="card-subtitle color-secondary">Real Estate</p>
                                                                        
                                                                            <h6><a href="{{url('sector-details')}}">Insurance And Finance</a></h6>
                                                                            <p>Investig ationes demons trave runt lectores legere liusry quod ii legunt saepius claritas Investig ationes.</p>
                                                                           
                                                                       
                                                                        
                                                                    <a href="{{url("insights")}}/real-estate" class="btn btn-primary">See Details</a>
                                                                    </div>
                                                                   
                                                                </div><!-- End: .card -->
                                                                
                                                                
                                                                                </div>
                   
    
                    </div>
                    
                
                
    </section><!-- ends: .cta-wrapper -->

  
   
@endsection