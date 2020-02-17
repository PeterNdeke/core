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
         @foreach ($plans as $item)
        
         <div class="col-lg-4 col-md-6">
                        
            <div class="card card-shadow card-one card-thirteen">
                <figure>
                    @if ($item->expire)
                    
                    <span class="farm-stage-tag" style="background-color: green; border-right: 7px solid rgb(255, 0, 0); color:white">OPEN</span>
                    @else
                   
                    <span class="farm-stage-tag" style="background-color: rgb(255, 255, 255); border-right: 7px solid rgb(255, 0, 0);">CLOSED</span>
                    @endif
                    <img src="{{ asset('assets/images') }}/{{ $item->image }}" alt="">
                    <figcaption>
                     <a href="{{url("plan-details/$item->slug")}}"><i class="la la-link"></i></a>
                    </figcaption>
                  

                </figure>
                <div class="card-body">
                  
                <p class="card-subtitle text-primary">{{$item->sector->name}}</p>
                   
               
                <h6><a href="#">{{$item->name}}</a></h6><br>
                <div class="align-items-stretch no-gutters row">
                <div class="col">
                    <div class="mb-1">
                        <span class="small text-muted">Duration</span><br>
                    <span>{{$item->duration}} Days</span><small> ({{$item->time}} months)</small><br>
                    

                    </div>
                    <div class="mb-1">
                        <span class="small text-muted">Unit Subscription price</span><br>
                    <span>₦ {{$item->price}}</span>

                    </div>
                   
                </div>
                <div class="col">
                    <div class="mb-1">
                        <span class="small text-muted">Returns</span><br>
                    <span class="h3 font-weight-bold text-primary">{{$item->percent}}%</span>
                    <small>in {{$item->time}} months</small>
                    <br>
                     

                    </div>
                   
                    <div class="mb-1">
                        <span class="small text-muted">Available Units</span><br>
                        <span class="h5 font-weight-bold text-primary"> {{$item->remaining_units_percent}}%</span>

                    </div>
                   
                   
                </div>
                </div><br>

                   
            <a href="{{url("plan-details/$item->slug")}}" class="btn btn-primary">See More Details!!</a>
                </div>

                
               
            </div><!-- End: .card -->
            
            
                            </div>
         @endforeach           
                    
                  
            
    
                    </div>
                    <div class="project-pagination m-top-40">
                    
                        <div class="pagination-area">
                            <nav aria-label="Page navigation pagination-left">
                                <ul class="pagination justify-content-center">
                                    {{$plans->links()}}
                                </ul>
                            </nav>
                        </div><!-- ends: .pagination-wrapper -->
                    
                                    </div>
                    
                
                
    </section><!-- ends: .cta-wrapper -->

  
   
@endsection