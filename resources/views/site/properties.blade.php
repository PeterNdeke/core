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
        
        <div class="card--four">
            <div class="container">
               
                <div class="row">
                  
                    <div class="col-md-6">
                        
                        <div class="card card-shadow card-four">
                            <figure>
                                <img src="{{ asset('assets/images/properties/property1.jpeg') }}" alt="">
                            </figure>
                            <div class="card-body">
                               
                            <h5><a href="">Property 1</a></h5>
                                <p class="card-text">Real estate as a business Real estate is a profession that deals with construction, buying, letting and selling of properties such as land, homes</p>
                            </div>
                          <a href="" class="btn btn-primary">See more</a>
                        </div><!-- End: .card -->
                      
                     
                     </div><!-- ends: .col-md-6 -->
                     <div class="col-md-6">
                        
                        <div class="card card-shadow card-four">
                            <figure>
                                <img src="{{ asset('assets/images/properties/property1.jpeg') }}" alt="">
                            </figure>
                            <div class="card-body">
                               
                            <h5><a href="">Property 1</a></h5>
                                <p class="card-text">Real estate as a business Real estate is a profession that deals with construction, buying, letting and selling of properties such as land, homes</p>
                            </div>
                          <a href="" class="btn btn-primary">See more</a>
                        </div><!-- End: .card -->
                      
                     
                     </div><!-- ends: .col-md-6 -->
                  
                   
                   
                   
                  
                  
                </div> 
                        
         </div>

                  
            
    
        </div>
                   
                
                
    </section><!-- ends: .cta-wrapper -->

  
   
@endsection