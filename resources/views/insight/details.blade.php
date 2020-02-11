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
                    @foreach ($sectors as $item)

                    <div class="col-lg-4 col-md-6">
                        
                        <div class="card card-shadow card-one card-thirteen">
                            <figure>
                                <img src="{{ asset('assets/images') }}/{{ $item->image_url }}" alt="">
                                <figcaption>
                               
                                </figcaption>
                            </figure>
                            <div class="card-body">
                            <p class="card-subtitle color-secondary">{{$item->category_name}}</p>
                            <h6><a href="#">{{$item->category_name}}</a></h6>
                                <ul class="icon-list--two m-top-15">
                                    
                                <li class="list-item icon-list"><span class="color-primary"><i class="la la-calendar-check-o"></i></span>{{$item->percentage}}% ROI</li>
                        
                                    
                        <li class="list-item icon-list"><span class="color-primary"><i class="la la-clock-o"></i></span> {{$item->duration}} Months </li>
                        
                        <li class="list-item icon-list"><span class="color-primary"><i class="la la-money"></i></span>{{$item->min_amount}} Minimum Investment</li>
                        
                                    
                        <li class="list-item icon-list"><span class="color-primary"><i class="la la-money"></i></span> {{$item->max_amount}} Maximum Investment</li>
                                    
                        
                        
                                </ul><br>
                                <a href="{{url('user/deposit-fund')}}" class="btn btn-primary">Invest Now!!</a>
                            </div>

                            
                           
                        </div><!-- End: .card -->
                        
                        
                                        </div>
                        
                    @endforeach
                    
                    
                  
                  
                                      
                                                           
                   
    
                    </div>
            </div>
                    
                
                
    </section><!-- ends: .cta-wrapper -->

  
   
@endsection