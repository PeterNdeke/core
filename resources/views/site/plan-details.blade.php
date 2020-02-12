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
                    <div class="post-header">
                    <h3>{{$item->title}}</h3>
                        <ul>
                        <li>{{$item->created_at->toformattedDateString()}}</li>
                        <li>By <a href="#">{{$item->author}}</a></li>
                            
                        </ul>
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
                                                       ₦ {{$item->price}}
                                                   </span>
                                               </div>
                                               <div class="col-md-6">
                                                       <span class="text-muted small">
                                                         Percent Profit
                                                       </span> <br>
                                                       <span class="font-weight-boldish">
                                                           {{$item->percent}}%
                                                       </span>
                                                   </div>
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
                                                  
                                                   {{$item->remaining_units}}%
                                                   </span>
                                               </div>
                                    </div>
                                    <div class="mb-4 row">
                                           <div class="col">
                                                   <span class="text-muted small">
                                                      Duration
                                                   </span> <br>
                                                   <span class="font-weight-boldish">
                                                        {{$item->percent}}% in {{$item->duration}} Days
                                                   </span>
                                               </div>
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
                                           Minimum Units: <span class="font-weight-boldish"> {{$item->min_units}} Units</span>
                                        </span> <br>
                                        <span class="font-weight-boldish">
                                                Maximun Units: <span class="font-weight-boldish"> {{$item->max_units}} Units</span>
                                             </span> <br>
                                        
                                    </div>
                                <form action="{{url('investment-calculator')}}" method="POST">
                                    {{ csrf_field() }}
                                        <div class="">
                                        <input type="hidden" name="price" value="{{$item->price}}">
                                        <input type="hidden" name="percent" value="{{$item->percent}}">
                                        <input type="hidden" name="slug" value="{{$item->slug}}">
                                            <div class="row">
                                            <div class="col">
                                                <span class="text-muted small">Select No of Units</span><br>
                                            <input type="number" name="units" class="input-rect bg-white px-2 form-control input-unit" placeholder="{{$item->min_units}} to {{$item->max_units}}" min="{{$item->min_units}}" max="{{$item->max_units}}">
                                            </div>
                                            <div class="col">
                                            <span class="text-muted small">Unit Price</span><br>
                                            <span class="font-wight-boldish"> ₦{{$item->price}}</span>
                                            </div>
                                            <div class="col">
                                                <span class="text-muted small">ROI per Unit Price</span><br>
                                            <span class="font-wight-boldish">{{$item->percent}}% in {{$item->duration}} Days </span>
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
                                     <span class="font-wight-boldish"> ₦{{$totalPrice}}</span>
                                     </div>
                                     <div class="col">
                                     <span class="text-muted small">Total Returns</span><br>
                                     <span class="font-wight-boldish"> ₦{{$totalReturns}}</span>
                                     </div>
                                     <div class="col">
                                         <span class="text-muted small">Total Payout</span><br>
                                     <span class="font-wight-boldish"> ₦{{$totalPayout}}</span>
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