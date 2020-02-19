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
         @foreach ($insights as $item)
         <div class="col-lg-4 col-md-6">       
            <div class="card card-shadow card-one card-thirteen">
                <figure>
                    <img src="{{ asset('assets/images') }}/{{ $item->image_url }}" alt="">
                    <figcaption>
                    <a href="{{url("insights")}}/{{$item->slug}}"><i class="la la-link"></i></a>
                    </figcaption>
                </figure>
                <div class="card-body">
                   
                <h6><a href="{{url("insights")}}/{{$item->slug}}">{{$item->title}}</a></h6>
        
        <p>{{ str_limit(strip_tags($item->description), 50) }}....</p>
                <a href="{{url("insights")}}/{{$item->slug}}" class="btn btn-primary">See Details</a>
                </div>
               
            </div><!-- End: .card -->
            
            
                            </div>
             
         @endforeach           
                    
                  
            
    
                    </div>
                    <div class="project-pagination m-top-40">
                    
                        <div class="pagination-area">
                            <nav aria-label="Page navigation pagination-left">
                                <ul class="pagination justify-content-center">
                                    {{$insights->links()}}
                                </ul>
                            </nav>
                        </div><!-- ends: .pagination-wrapper -->
                    
                                    </div>
                    
                
                
    </section><!-- ends: .cta-wrapper -->

  
   
@endsection