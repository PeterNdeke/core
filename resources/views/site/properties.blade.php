@extends('layouts.newfrontend')
@section('content')
<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css">     <!--header section start-->
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
                @foreach ($properties as $item)
                <div class="col-lg-4 col-md-6">
                      
                  <div class="card card-shadow card-one card-thirteen">
                      <figure>
                        <img src="{{ asset('assets/images') }}/{{ $item->image_url }}" alt="">
                          <figcaption>
                              <a href="{{url("property-details/$item->slug")}}"><i class="la la-link"></i></a>
                          </figcaption>
                      </figure>
                      <div class="card-body">
                      <h6 class="card-subtitle color-secondary">{{$item->name}}</h6>
                      <p><a href="{{url("property-details/$item->slug")}}">
                        {!!\Illuminate\Support\Str::limit($item->description,70) !!}

                      </a></p>
                      <a href="{{url("property-details")}}/{{$item->slug}}" class="btn btn-primary">See Details</a>
                          <ul class="icon-list--two m-top-15">
                              
                
                
                              
                          <li class="list-item"><span class="color-primary">Price:</span>{{number_format_short($item->price)}}</li>
                
                              
                          <li class="list-item icon-list"><span class="color-primary"><i class="la la-map-marker"></i></span> {{$item->location}}</li>
                
                          </ul>
                      </div>
                  </div><!-- End: .card --> 
             
                  

                  </div>
                  @endforeach
                  
               
                
                
                
                
                
                
              </div>
              {{-- <div class="text-center m-top-40">
                  <a href="#" class="btn btn-primary btn-icon icon-left"><i class="la la-refresh"></i> Load More</a>
              </div> --}}
          </div>
      </div>
  </section><!-- ends: section -->

  
   
@endsection