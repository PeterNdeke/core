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
                    @foreach ($sectors as $item)
                    <div class="col-md-6">
                        
                        <div class="card card-shadow card-four">
                            <figure>
                                <img src="{{ asset('assets/images') }}/{{ $item->image_url }}" alt="">
                            </figure>
                            <div class="card-body">
                               
                            <h5><a href="{{url("sector-details")}}/{{$item->slug}}">{{$item->name}}</a></h5>
                                <p class="card-text">{{ str_limit(strip_tags($item->description), 150) }}.....</p>
                            </div>
                            <a href="#" class="btn btn-primary">See more</a>
                        </div><!-- End: .card -->
                      
                     
                                        </div><!-- ends: .col-md-6 -->
                    @endforeach
                   
                   
                   
                  
                  
                </div> 
                        
         </div>

                  
            
    
        </div>
                   
                
                
    </section><!-- ends: .cta-wrapper -->

  
   
@endsection