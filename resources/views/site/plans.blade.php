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
    <section  class="bg-gray-light p-top-100 p-bottom-35" data-wow-duration="2s">
        <div class="container">
          
    <div class="process-wrapper section-bg process--two">
        <div class="container">
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="process-one">
                        <div class="process-single text-center">
                            <div class="icon light-bg">
                                <span class="step">1</span>
                                <span class="icon-la"><i class="la la-user"></i></span>
                            </div>
                            <h6>CREATE YOUR ACCOUNT
                            </h6>
                           <p>The first step towards your financial freedom is to sign up for an account on our platform.</p>
                        </div><!-- ends: .process-single -->
                        <div class="process-single text-center">
                            <div class="icon light-bg">
                                <span class="step">2</span>
                                <span class="icon-la"><i class="la la-bar-chart"></i></span>
                            </div>
                            <h6>CHOOSE A PLAN</h6>
                            <p>Choose a plan from the varieties of PLAN we have and invest in. All our plans have differnt returns</p>
                        </div><!-- ends: .process-single -->
                        <div class="process-single text-center">
                            <div class="icon light-bg">
                                <span class="step">3</span>
                                <span class="icon-la"><i class="la la-rocket"></i></span>
                            </div>
                            <h6> TRACK YOUR INVESTMENTS
                            </h6>
                            <p>You can track and monitor your investments in real time as it grows sequentially on daily basis</p>
                        </div><!-- ends: .process-single -->
                        <div class="process-single text-center">
                            <div class="icon light-bg">
                                <span class="step">4</span>
                                <span class="icon-la"><i class="la la-money"></i></span>
                            </div>
                            <h6> CASH OUT YOUR MONEY                          </h6>
                            <p>While it is best to cash out at the end of the investment period, you can also cash out as the investment is still growing </p>
                        </div><!-- ends: .process-single -->
                    </div>
                </div>
            </div>
        </div>
    </div><!-- ends: .process-wrapper -->
</div>
</section>
<!-- Circle Section End -->
<div class="clearfix"></div>

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