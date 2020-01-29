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
            <a href="{{url("insights")}}/real-estate"><i class="la la-link"></i></a>
            </figcaption>
        </figure>
        <div class="card-body">
            <p class="card-subtitle color-secondary">Real Estate</p>
            
                
                <p>Investig ationes demons trave runt lectores legere liusry quod ii legunt saepius claritas Investig ationes.</p>
               
           
            
        <a href="{{url("insights")}}/real-estate" class="btn btn-primary">See Details</a>
        </div>
       
    </div><!-- End: .card -->
    
    
                    </div>
                    <div class="col-lg-4 col-md-6">
                        
    <div class="card card-shadow card-one card-thirteen">
        <figure>
            <img src="{{asset('asset/img/oilgas1.jpg')}}" alt="">
            <figcaption>
                <a href="{{url("insights")}}/oil-and-gas"><i class="la la-link"></i></a>
            </figcaption>
        </figure>
        <div class="card-body">
            <p class="card-subtitle color-secondary">Oil and Gas</p>
            
                
                <p>Investig ationes demons trave runt lectores legere liusry quod ii legunt saepius claritas Investig ationes.</p>
               
           
            
            <a href="{{url("insights")}}/oil-and-gas" class="btn btn-primary">See Details</a>
        </div>
    </div><!-- End: .card -->
    
                    </div>
                    <div class="col-lg-4 col-md-6">
                        
    <div class="card card-shadow card-one card-thirteen">
        <figure>
            <img src="{{asset('asset/img/bitcoin2.jpg')}}" alt="">
            <figcaption>
                <a href="{{url("insights")}}/crypto-currency"><i class="la la-link"></i></a>
            </figcaption>
        </figure>
        <div class="card-body">
            <p class="card-subtitle color-secondary">Crypto Currency</p>
            
               
                <p>Investig ationes demons trave runt lectores legere liusry quod ii legunt saepius claritas Investig ationes.</p>
               
           
            
            <a href="{{url("insights")}}/crypto-currency" class="btn btn-primary">See Details</a>
        </div>
    </div><!-- End: .card -->
    
                    </div>
                   
    
                    </div>
                    
                
                
    </section><!-- ends: .cta-wrapper -->

  
   
@endsection