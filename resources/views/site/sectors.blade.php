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
                                <a href="{{url('sector-details')}}/real-estate"><i class="la la-link"></i></a>
                                </figcaption>
                            </figure>
                            <div class="card-body">
                                <p class="card-subtitle color-secondary">Real Estate</p>
                                <h6><a href="#">10 Packages</a></h6>
                                <ul class="icon-list--two m-top-15">
                                    
                        <li class="list-item icon-list"><span class="color-primary"><i class="la la-calendar-check-o"></i></span> 45% ROI</li>
                        
                                    
                        <li class="list-item icon-list"><span class="color-primary"><i class="la la-clock-o"></i></span> 45 Days</li>
                        
                                    
                        
                        
                                </ul><br>
                            <a href="{{url('sector-details')}}/real-estate" class="btn btn-primary">See Details</a>
                            </div>
                           
                        </div><!-- End: .card -->
                    </div>

                        <div class="col-lg-4 col-md-6">
                    
                            <div class="card card-shadow card-one card-thirteen">
                                <figure>
                                    <img src="{{asset('asset/img/oilgas1.jpg')}}" alt="">
                                    <figcaption>
                                    <a href="{{url('sector-details')}}/oil-and-gas"><i class="la la-link"></i></a>
                                    </figcaption>
                                </figure>
                                <div class="card-body">
                                    <p class="card-subtitle color-secondary">Oil and Gas</p>
                                    <h6><a href="#">10 Packages Remaining</a></h6>
                                    <ul class="icon-list--two m-top-15">
                                        
                            <li class="list-item icon-list"><span class="color-primary"><i class="la la-calendar-check-o"></i></span> 45% ROI</li>
                            
                                        
                            <li class="list-item icon-list"><span class="color-primary"><i class="la la-clock-o"></i></span> 90 Days</li>
                            
                                        
                            
                            
                                    </ul><br>
                                <a href="{{url('sector-details')}}/oil-and-gas" class="btn btn-primary">See Details</a>
                                </div>
                            </div><!-- End: .card -->
                        </div>

                            <div class="col-lg-4 col-md-6">
                    
                                <div class="card card-shadow card-one card-thirteen">
                                    <figure>
                                        <img src="{{asset('asset/img/bitcoin2.jpg')}}" alt="">
                                        <figcaption>
                                        <a href="{{url('sector-details')}}/crypto-currency"><i class="la la-link"></i></a>
                                        </figcaption>
                                    </figure>
                                    <div class="card-body">
                                        <p class="card-subtitle color-secondary">Crypto Currency</p>
                                        <h6><a href="#">5 Packages</a></h6>
                                        <ul class="icon-list--two m-top-15">
                                            
                                <li class="list-item icon-list"><span class="color-primary"><i class="la la-calendar-check-o"></i></span> 25% ROI</li>
                                
                                            
                                <li class="list-item icon-list"><span class="color-primary"><i class="la la-clock-o"></i></span> 90 Days </li>
                                
                                            
                                
                                
                                        </ul><br>
                                        <a href="{{url('sector-details')}}/crypto-currency" class="btn btn-primary">See Details</a>
                                    </div>
                                </div><!-- End: .card -->
                                
                                                </div>
                            
                                            </div>
                        
                        
                                        </div>

                  
            
    
                    </div>
                   
                
                
    </section><!-- ends: .cta-wrapper -->

  
   
@endsection