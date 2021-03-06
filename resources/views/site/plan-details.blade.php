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
                <div class="col-lg-6 post-content">
                    <div class="post-header" style="text-transform: uppercase;">
                    <h3>{{$item->name}} Description</h3>
                        
                    </div>
                    <div class="post-body">
                        
                            {!! $item->description !!}
                       
                       
            </div><!-- ends: .post-details -->

        </div><!-- ends: .col-lg-8 -->
                <div class="col-lg-6">
                    <div class="post-details">
                        <div class="post-head">
                        <img src="{{ asset('assets/images') }}/{{ $item->image }}" alt="">
                        </div>
                
            </div>
        </div>
            </div>

            <hr>
                    <div class="mb40">
                        <div class="row">
                            <div class="col-xl-5 col-lg-5 col-md-12 col-sm-6 col-12 mb30">
                                <h2>{{$item->name}} investment Details</h2>
                              <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-4 row">
                                        <div class="col">
                                            <span class="text-muted small">
                                                Plan
                                            </span> <br>
                                            <span class="font-weight-boldish">
                                                {{$item->name}}
                                            </span>
                                        </div>
                                       
                                    </div>
                                    <div class="mb-4 row">
                                           <div class="col-md-6">
                                                   <span class="text-muted small">
                                                    Unit Subscription Price
                                                   </span> <br>
                                                   <span class="font-weight-boldish">
                                                       ₦ {{number_format($item->price, 2)}}
                                                   </span>
                                               </div>
                                               @if ($item->plan_type == NULL)
                                                   
                                               <div class="col-md-6">
                                                <span class="text-muted small">
                                                  Percent Profit
                                                </span> <br>
                                                <span class="font-weight-boldish">
                                                    {{$item->percent}}%
                                                </span>
                                            </div>
                                                   
                                               @endif
                                              
                                    </div>
                                    <div class="mb-4 row">
                                           <div class="col">
                                                   <span class="text-muted small">
                                                      Unit Size
                                                   </span> <br>
                                                   <span class="font-weight-boldish">
                                                        {{$item->available_units}}
                                                   </span>
                                               </div>
                                               <div class="col">
                                                   <span class="text-muted small">
                                                     Available Units 
                                                   </span> <br>
                                                   <span class="font-weight-boldish">
                                                  
                                                   {{$item->remaining_units_percent}}%
                                                   </span>
                                               </div>
                                    </div>
                                    <div class="mb-4 row">
                                        @if ($item->plan_type == 'essential')
                                        <span class="text-muted small">
                                            <b>Duration:</b><br>
                                         </span><br>
                                          @foreach ($item->essentials as $item1)
                                          <div class="">
                                            
                                            <span class="font-weight-boldish">
                                                 {{$item1->roi}}% in {{$item1->payout_duration}}
                                            </span>
                                        </div>
                                          @endforeach  
                                        @else
                                        <div class="col">
                                            <span class="text-muted small">
                                               Duration
                                            </span> <br>
                                            <span class="font-weight-boldish">
                                                 {{$item->percent}}% in {{$item->duration}} Days
                                            </span>
                                        </div> 
                                        @endif
                                           
                                    </div>
                                   </div>
                                  
                                   
                              </div>
                                
                            </div>
                            <div class="offset-xl-1 col-xl-6 offset-lg-1 col-lg-6 col-md-12 col-sm-6 col-12 mb30">
                              
                                <div class="mb20">
                                    <h2>{{$item->name}} investment Calculator</h2>
                                </div>
                                <div class="col alert alert-info">
                                        <span class="font-weight-boldish">
                                           Minimum Units: <span class="font-weight-boldish"> {{$item->min_units}} Unit</span>
                                        </span> <br>
                                        <span class="font-weight-boldish">
                                                Maximun Units: <span class="font-weight-boldish"> {{$item->max_units}} Units</span>
                                             </span> <br>
                                        
                                    </div>
                                <form action="{{url('investment-calculator')}}" method="POST">
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
                             @endif
                            </div>
                           
                        </div>
                    </div>

                        </div>
                    </div>

    </section><!-- ends: .blog-wrapper -->

    

  
   
@endsection