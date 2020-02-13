@extends('layouts.user-frontend.user-dashboard')

@section('content')
@include('layouts.breadcam')

<div class="content_padding">
    <div class="container user-dashboard-body">
       
            <div class="row">
                <div class="col-lg-6 post-content">
                    <div class="post-header">
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
                                <form action="{{url('user/investment-calculator')}}" method="POST">
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
                                                <a href="{{url('user/investment-new')}}">Back</a>
                                                </div>
                                                <div class="text-right col">
                                                        <button type="submit" class="btn-round font-weight-bold btn btn btn-primary">Calculate Selections</button>
                                                    </div>
                                            </div>
                                    </form><br>
                                    @if (isset($totalPrice) && isset($totalReturns) && isset($totalPayout) && isset($units))
                                    <div class="alert alert-success">
                                      
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
                                 <div class="panel-footer" style="overflow: hidden">
                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn-primary bold uppercase btn-block btn-icon icon-left plan_id radious-zero" value="{{$item->id}}" data-toggle="modal" data-target="#invest_review_modal">
                                                <i class="fa fa-send"></i> Invest Under This Package
                                            </button>
                                        <form method="POST" action="{{ route('investment-post') }}" class="form-inline">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="id" value="{{ $item->id }}">
                                            
                                        </form>
                                    </div>
                                </div>
                                 
                            </div>
                             @endif
                            </div>
                           
                        </div>
                    </div>

                      
    </div>
</div>



<!-- Modal -->
  <div class="modal fade" id="invest_review_modal" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">New Investment:</h4>
        </div>
        <div class="modal-body">
              <div class="row">
        <div class="col-md-4">
            <div class="col-sm-12 text-center">
                <div class="panel panel-default panel-pricing">
                    <div style="padding: 10px" class="panel-heading">
                        <h3 style="font-size: 28px;"><b style="color:#ffffff"><span id="name"></span></b></h3>
                    </div>
                    <div style="font-size: 18px;padding: 18px;" class="panel-body text-center">
                        <p><strong style="font-size: 20px;"> <span id="min_amount"></span> - <span id="max_amount"></span> {{ $basic->currency }}</strong></p>
                    </div>
                    <ul style="font-size: 15px;" class="list-group text-center bold">
                        <li class="list-group-item" style="padding: 18px 0px;">
                            <i class="fa fa-check"></i> <span id="percentage"></span> <i class="fa fa-percent">  roi each month</i> 
                        </li>
                        <li class="list-group-item" style="padding: 18px 0px;">
                            <i class="fa fa-check"></i> For <span id="time"></span> Months 
                        </li>
                        <li class="list-group-item" style="padding: 18px 0px;">
                            <i class="fa fa-check"></i> Compound - <span class="aaaa"><span id="compound_name"></span></span>
                        </li>
                    </ul>
                    <div class="panel-footer" style="overflow: hidden">
                        <div class="col-sm-12">
                            <button class="btn btn-primary bold uppercase btn-block btn-icon icon-left radious-zero"  data-dismiss="modal">
                                <i class="fa fa-arrow-left"></i> Change Package
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="panel panel-default panel-shadow" data-collapsed="0"><!-- to apply shadow add class "panel-shadow" -->

                <!-- panel head -->
                <div class="panel-heading">
                    <div class="panel-title bold uppercase"><i class="fa fa-eye"></i> <strong>Investment Review</strong></div>
                </div>
                <!-- panel body -->
                <div class="panel-body">
                    <div class="row">
                           <div class="col-md-6" style="padding-right:0px;">
                                  <div class="text-left">
                                    <h5 class="bold uppercase">Current Balance: <strong>{{ round(Auth::user()->balance, $basic->deci) }} - {{ $basic->currency }}</strong></h5>
                                </div>
                            </div>
                            
                            <div class="col-md-6" style="padding-right:0px;">
                                <div class="text-left">
                                  <h5 class="bold uppercase" >Remain Balance: <strong> <span id="remain_balance">{{ round(Auth::user()->balance, $basic->deci) }}</span> - {{ $basic->currency }}</strong></h5>
                                </div>       
                            </div>      
                    </div>
                        <ul style='font-size: 15px;' class="list-group bold">
                             
                             <li class="list-group-item">
                                <div class="row">
                                <div class="col-md-5 text-right">
                                   Investment Amount :
                                </div>    
                                <div class="col-md-7 text-left">
                                     <div class="input-group">
                                        <input type="text" value="" name="amount" id="amount" class="form-control bold" placeholder="Invest Amount" required>
                                        <span class="input-group-addon">&nbsp;<strong>{{ $basic->currency }}</strong></span>
                                       
                                    </div>
                                </div>    
                                </div>
                             </li>

                             <li class="list-group-item">
                                <div class="row">
                                <div class="col-md-5 text-right">
                                  Per Month: 
                                </div>    
                                <div class="col-md-7 text-left">
                                   <div class="input-group">
                                        <input type="text" value="" name="amount" id="comission_amount" class="form-control bold" placeholder="Per Month" readonly>
                                        <span class="input-group-addon">&nbsp;<strong>{{ $basic->currency }}</strong></span>
                                        
                                    </div>
                                </div>    
                                </div>
                             </li>

                              <li class="list-group-item">
                                <div class="row">
                                <div class="col-md-5 text-right">
                                    Total Return: 
                                </div>    
                                <div class="col-md-7 text-left">
                                   <div class="input-group">
                                        <input type="text" value="" name="amount" id="total_return" class="form-control bold" placeholder="Total Return" readonly>
                                        <span class="input-group-addon">&nbsp;<strong>{{ $basic->currency }}</strong></span>
                                       
                                    </div>
                                </div>    
                                </div>
                             </li>

                             {{-- <li class="list-group-item">
                                <div class="row">
                                <div class="col-md-5 text-right">
                                   Total Interest: 
                                </div>    
                                <div class="col-md-7 text-left">
                                    <div class="input-group">
                                        <input type="text" value="" name="amount" id="total_interest" class="form-control bold" placeholder="Total Interest" readonly>
                                        <span class="input-group-addon">&nbsp;<strong>{{ $basic->currency }}</strong></span>
                                    </div>
                                </div>    
                                </div>
                             </li> --}}
                        </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
                <div class="form-group">
                  <form method="post" action="{{ route('investment-submit') }}" class="form-inline">
                        {!! csrf_field() !!}
                        <input type="hidden" name="amount" id ="c_amount" value="0">
                        <input type="hidden" name="plan_id" id="plan_id" value="">
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                        <div id="result"></div>
                    </form>
                        
                </div>
            </div>
        </div>
            
        <div class="modal-footer">
          <button type="button" class="btn btn-info btn-block" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

@endsection
@section('script')
<script>
        $(document).ready(function () {

            /*Modal load activities*/
            $(document).on("click", '.plan_id', function (e) {
                var id = $(this).val();

                $("#amount").val('');
                $("#comission_amount").val('');
                $("#total_return").val('');
                $("#total_interest").val('');

                 $.post(
                        '{{ route('invest-amount-review') }}',
                        {
                            _token: '{{ csrf_token() }}',
                            id : id,
                        },
                        function(data) {
                            console.log(data);
                            $("#plan_id").val(data.id);
                            $("#name").text(data.name);
                            $("#min_amount").text(data.minimum);
                            $("#max_amount").text(data.maximum);
                            $("#percentage").text(data.percent);
                            $("#compound_name").text(data.compound_name);
                            $("#time").text(data.time);

                            $("#result").html(data);
                        }
                );

            });

             /*Modal data review activities*/
            $('#amount').on('keypress, keyup', function() {
                
                var amount          = parseInt($("#amount").val());
                var plan            = $("#plan_id").val();
                var balance         = "{{ round(Auth::user()->balance, $basic->deci) }}";
                var comissionRate   = parseInt($("#percentage").text())/100;   
                var comissionTime   = parseInt($("#time").text());
                var comissionAmount = amount * comissionRate;
                var totalReturn     = comissionAmount * comissionTime;
                var totalInterest   = totalReturn - amount;

                var remainBalance = parseInt(balance)-parseInt(amount);
                if(amount == ''|| amount <=0){

                    $("#remain_balance").text(balance);
                        
                        InputBoxZero();

                }else if(amount<=balance){
                     
                      $("#remain_balance").text(remainBalance);
                     
                      $("#comission_amount").val(comissionAmount);
                      $("#total_return").val(totalReturn);
                      $("#total_interest").val(totalInterest);

                }else if(amount>balance){
                        swal("Ops!", "Input amount not available in your balance!", "error")
                        $("#amount").val('');
                        InputBoxZero();
                        $("#remain_balance").text(balance);
                }else{
                    $("#remain_balance").text(balance);
                    InputBoxZero();
                }

                if(amount>balance){
                    $("#c_amount").val(0); 
                }else{
                    $("#c_amount").val(amount); 
                }

                $.post(
                        '{{ url('/user/invest-amount-chk') }}',
                        {
                            _token: '{{ csrf_token() }}',
                            amount : amount,
                            plan : plan
                        },
                        function(data) {

                            $("#result").html(data);
                        }
                );
            });

            function InputBoxZero(){
                $("#comission_amount").val('');
                $("#total_return").val('');
                $("#total_interest").val('');
            }
        });
</script>

    @if (session('success'))
        <script type="text/javascript">
            $(document).ready(function(){

                swal("Success!", "{{ session('success') }}", "success");

            });
        </script>

    @endif



    @if (session('alert'))

        <script type="text/javascript">
            $(document).ready(function(){
                swal("Sorry!", "{{ session('alert') }}", "error");
            });

        </script>

    @endif

@endsection

