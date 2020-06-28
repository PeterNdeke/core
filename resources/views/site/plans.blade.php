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
         @foreach ($plans as $p)
        
         <div class="col-md-4 col-sm-6 pricing-list-botom-margin wow zoomIn" data-wow-duration="3s">
            <!-- Pricing  List1 Start -->
            <div class="pricing-list1">
                <div class="pricing-header1">
                    <h5>{{ $p->name }}</h5>
                
                    <p>{{$p->duration}} Days ({{$p->time}} months)</p>
                    <br><br>
                    <a href="{{url("plan-details/$p->slug")}}"><button type="submit" name="register" style="background:none; border:none;">Get Started</button></a>
                </div>
                
                <div class="pricing-info1">
                    <ul>
                        <li> <p>for <span class="color-text">{{ $p->time }}</span> months</p></li>
                        <li><p> <span class="color-text">{{ $p->percent }}%</span>ROI</p></li>
                    </ul>
                    
                </div>
                <div class="price-range">
                                <div class="row">
                                    <div class="col-md-6 text-left col-sm-6 col-xs-6">
                                        <div class="min-price">
                                            <h6>Available Units<span class="color-text">{{$p->remaining_units_percent}}%</span></h6>
                                        </div>
                                       
                                    </div>
                                    <div class="col-md-6 text-right col-sm-6 col-xs-6">
                                        <div class="min-price">
                                            <h6>Unit Subscription Price<span class="color-text">₦ {{number_format($p->price, 2)}}</span></h6>
                                        </div>
                                    </div>
                                </div>
                </div>
                {{-- <div class="invest-type__profit plan__value--{{ $p->id }}">
                    <input type="text" value="{{ $basic->symbol }} {{ ($p->minimum + $p->maximum) / 2 }}" class="custom-input invest-type__profit--val" data-slider=".slider-input--{{ $p->id }}" style="color:#FFF; font-size: 25px">
                    <input type="hidden" name="amount" value="{{ ($p->minimum + $p->maximum) / 2 }}" class=" slider-input slider-input--{{ $p->id }}" data-perday="{{ $p->percent }}" data-peryear="{{ $p->time }}" data-min="{{ $p->minimum }}" data-max="{{ $p->maximum }}" data-dailyprofit=".daily-profit-{{ $p->id }}" data-totalprofit=".total-profit-{{ $p->id }} " data-valuetag=".plan__value--{{ $p->id }} .invest-type__profit--val"/>
                </div>
                <input type="hidden" name="plan_id" value="{{ $p->id }}">
                <div class="price-range">
                    <div class="row">
                        <div class="col-md-6 text-left col-sm-6 col-xs-6 invest-type__calc invest-type__calc--daily">
                            <div class="min-price">
                                <h6>per time<span class="color-text"><b class="daily-profit-{{ $p->id }}">{{ $basic->symbol }} {{ (($p->minimum + $p->maximum) / 2 ) * $p->percent /100 }}.0</b></span></h6>
                            </div>
                        </div>
                        <div class="col-md-6 text-right col-sm-6 col-xs-6 invest-type__calc invest-type__calc--total">
                            <div class="min-price">
                                <h6>Total Return<span class="color-text"><b class="total-profit-{{ $p->id }}">{{ $basic->symbol }} {{ (((($p->minimum + $p->maximum) / 2) * $p->percent) /100 ) * $p->time }}.0</b></span></h6>
                            </div>
                        </div>
                    </div>
                </div> --}}

                <!--<a href="pricing-list.html">Order Now!</a>-->
            </div>
            <!-- Pricing List1 End -->
        </div>
         @endforeach           
                    
         <div class="col-lg-4 col-md-6">
                        
            <div class="card card-shadow card-one card-thirteen">
                <figure>
                    @if ($essential_plan->expire)
                    
                    <span class="farm-stage-tag" style="background-color: green;  color:white">SELLING</span>
                    @else
                   
                    <span class="farm-stage-tag" style="background-color: rgb(255, 255, 255);">SOLD OUT</span>
                    @endif
                    <img src="{{ asset('assets/images') }}/{{ $essential_plan->image }}" alt="">
                    <figcaption>
                     <a href="{{url("plan-details/$essential_plan->slug")}}"><i class="la la-link"></i></a>
                    </figcaption>
                  

                </figure>
                <div class="card-body">
                   
                <p class="card-subtitle text-primary">{{$essential_plan->sector->name}}</p>
                   
                <h6><a href="#">{{$essential_plan->name}}</a></h6><br>
                <div class="align-items-stretch no-gutters row">
                <div class="col">
                  
                    <div class="mb-1">
                        <span class="small text-muted">Duration</span><br>
                    <span>{{$essential_plan->duration}} Days</span><small> ({{$essential_plan->time}} Months)</small><br>
                    

                    </div>
                  
                  
                    <div class="mb-1">
                        <span class="small text-muted">Unit Subscription price</span><br>
                    <span>₦ {{number_format($essential_plan->price, 2)}}</span>

                    </div>
                   
                </div>
                <div class="col">
                   
                   
                    <div class="mb-1">
                        <span class="small text-muted">Available Units</span><br>
                        <span class="h5 font-weight-bold text-primary"> {{$essential_plan->remaining_units_percent}}%</span>

                    </div>
                   
                   
                </div>
                </div><br>

                   
                    <a href="{{url("plan-details/$essential_plan->slug")}}" class="btn btn-primary">See More Details!!</a>
                </div>

                
               
            </div><!-- End: .card -->
            
            
                            </div>
            
    
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