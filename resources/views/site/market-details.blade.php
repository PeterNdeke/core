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

    <section class="blog-single-wrapper section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="post-details">
                        <div class="post-head">
                       
    <section class="carousel-wrapper py-5">
        
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="carousel-three owl-carousel">

                        @foreach ($details->market_images as $item)
                        <div class="carousel-single">
                            
                            <div class="card card-shadow card-six">
                                <figure>
                                    <img src="{{ asset('assets/images') }}/{{ $item->image }}" alt="">
                                </figure>
                              
                            </div><!-- End: .card -->
                         
                                            </div>
                        @endforeach
                       
                      
                    </div><!-- ends: .owl-carousel -->
                </div>
            </div>
        </div>
    
        </section><!-- ends: .carousel-wrapper -->
                        </div>
                       
                        <hr>
                        <div class="mb40">
                            <div class="row">
                                <div class="col-xl-5 col-lg-5 col-md-12 col-sm-6 col-12 mb30">
                                    <h2>{{$details->name}} marketDetails</h2>
                                  <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-4 row">
                                            <div class="col">
                                                <span class="text-muted small">
                                                   Market Name
                                                </span> <br>
                                                <span class="font-weight-boldish">
                                                  {{$details->name}}
                                                </span>
                                            </div>
                                           
                                        </div>
                                        <div class="mb-4 row">
                                               <div class="col-md-6">
                                                       <span class="text-muted small">
                                                        Unit Subscription Price
                                                       </span> <br>
                                                       <span class="font-weight-boldish">
                                                           ₦ {{number_format($details->price)}}
                                                       </span>
                                                   </div>
                                                 
                                                       
                                                   <div class="col-md-6">
                                                    <span class="text-muted small">
                                                      Percent Profit
                                                    </span> <br>
                                                    <span class="font-weight-boldish">
                                                      {{$details->interest_percent}}
                                                    </span>
                                                </div>
                                                       
                                                  
                                                  
                                        </div>
                                        <div class="mb-4 row">
                                               <div class="col">
                                                       <span class="text-muted small">
                                                          Unit Size
                                                       </span> <br>
                                                       <span class="font-weight-boldish">
                                                          {{$details->remaining_units}}
                                                       </span>
                                                   </div>
                                                   <div class="col">
                                                       <span class="text-muted small">
                                                        Loccation
                                                       </span> <br>
                                                       <span class="font-weight-boldish">
                                                      
                                                     {{$details->location}}
                                                       </span>
                                                   </div>
                                        </div>
                                        
                                       </div>
                                     
                                       
                                  </div>
                                  <div class="text-right col">
                                    <a href="{{url('user/market-new')}}" class="btn-round font-weight-bold btn btn btn-primary">Proceed to Buy</a>
                                           
                                        </div> 
                                </div>
                                <div class="offset-xl-1 col-xl-6 offset-lg-1 col-lg-6 col-md-12 col-sm-6 col-12 mb30">
                                  
                                    <div class="mb20">
                                    <h2>{{$details->name}} Description</h2>
                                    </div>
                                   {{$details->description}}
                                    {{-- <form action="{{url('investment-calculator')}}" method="POST">
                                        {{ csrf_field() }}
                                            <div class="">
                                            <input type="hidden" name="price" value="{{$item->price}}">
                                            <input type="hidden" name="plan_type" value="{{$item->plan_type}}">
                                            @if ($item->plan_type == NULL)
                                                
                                            <input type="hidden" name="percent" value="{{$item->percent}}">
                                                
                                            @endif
                                            
                                            <input type="hidden" name="slug" value="{{$item->slug}}">
                                                <div class="row">
                                                <div class="col">
                                                    <span class="text-muted small">Select No of Units</span><br>
                                                <input type="number" name="units" class="input-rect bg-white px-2 form-control input-unit" placeholder="{{$item->min_units}} to {{$item->max_units}}" min="{{$item->min_units}}" max="{{$item->max_units}}">
                                                </div>
                                                <div class="col">
                                                <span class="text-muted small">Unit Price</span><br>
                                                <span class="font-wight-boldish"> ₦{{number_format($item->price, 2)}}</span>
                                                </div>
                                                <div class="col">
                                                    @if ($item->plan_type == 'essential')
                                                    <span class="text-muted small">ROI per Unit Price</span><br>
                                                    <span class="font-wight-boldish">
                                                        <select name="percent" id="">
                                                            <option value="">Choose Your Duration</option>
                                                            @foreach ($item->essentials as $val)
                                                        <option value="{{$val->id}}">{{$val->roi}}% for {{$val->payout_duration}}</option>
                                                            @endforeach
                                                        </select>
                                                       
                                                    
                                                    </span> 
                                                    @else
                                                    <span class="text-muted small">ROI per Unit Price</span><br>
                                                    <span class="font-wight-boldish">{{$item->percent}}% in {{$item->duration}} Days </span>
                                                    @endif
                                                    
                                                </div>
                                            </div>
                                            </div>
                                            
                    
                                                <div class="row">
                                                    <div class="col">
                                                    <a href="{{url('plan')}}">Back</a>
                                                    </div>
                                                    <div class="text-right col">
                                                            <button type="submit" class="btn-round font-weight-bold btn btn btn-primary">Calculate Selections</button>
                                                        </div>
                                                </div>
                                        </form><br>
                                        @if (isset($totalPrice) && isset($totalReturns) && isset($totalPayout) && isset($units))
                                        <form class="alert alert-success">
                                          
                                            <div class="mb-3">
                                                 <h4>Calculations Result</h4>
                                             </div><hr>
                                        
                                     <div class="mb-3">
                                         <div class="row">
                                         <div class="col">
                                             <span class="text-muted small">Total Subscription Price</span><br>
                                         <span class="font-wight-boldish"> ₦{{number_format($totalPrice, 2)}}</span>
                                         </div>
                                         <div class="col">
                                         <span class="text-muted small">Total Returns</span><br>
                                         @if ($item->plan_type == 'essential')
                                         @if ($essential->roi == '6')
                                         <span class="font-wight-boldish"> ₦{{number_format($totalReturns, 2)}} every month</span>
                                         @elseif($essential->roi == '7.5')
                                         <span class="font-wight-boldish"> ₦{{number_format($totalReturns * 6, 2)}} every Six Months</span>
                                         @elseif($essential->roi == '8.4')
                                         <span class="font-wight-boldish"> ₦{{number_format($totalReturns * 12, 2)}} yearly</span>
                                         @endif
                                        
                                         @else
                                         <span class="font-wight-boldish"> ₦{{number_format($totalReturns, 2)}}</span>
                                         @endif
                                        
                                         </div>
                                         <div class="col">
                                             <span class="text-muted small">Total Payout</span><br>
                                             @if ($item->plan_type == 'essential')
                                         <span class="font-wight-boldish"> ₦{{number_format($totalPayout, 2)}} in {{$item->time}} Months</span>
                                             @else
                                             <span class="font-wight-boldish"> ₦{{number_format($totalPayout, 2)}}</span>
                                             @endif
                                         
                                         </div>
                                     </div>
                                     </div><hr>
                                     <div class="row">
                                        
                                             <div class="text-right col">
                                             <a href="{{url('user/investment-new')}}" class="btn-round font-weight-bold btn btn btn-primary">Proceed to Subscription</a>
                                                    
                                                 </div>
                                         </div>
                                 </form>
                                 @endif --}}
                                
                                </div>
                               
                            </div>
                        </div>
                   

                </div><!-- ends: .col-lg-8 -->

               
            </div>
        </div>
    </section><!-- ends: .blog-wrapper -->

    @section('script')
    <script src="{{asset('asset/js/plugins.min.js')}}"></script>
    <script src="{{asset('asset/js/script.min.js')}}"></script>
    @endsection

  
   
@endsection