@extends('layouts.user-frontend.user-dashboard')
@section('style')
    <style>
            .input-text-box input{
            border: 1px solid #CCCCCC;
            }
        </style>

    <script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script>
	<script src="https://js.paystack.co/v1/inline.js"></script>

    <script type="text/javascript">
        bkLib.onDomLoaded(function() { new nicEditor({fullPanel : true}).panelInstance('area1'); });
    </script>
	<?php 
	$total = $fund->amount + $fund->charge; 
	$final_toal = explode(".",$total);
	$total1 = $final_toal[0].$final_toal[1];
	?>
	<script>
	
  function payWithPaystack(){
  	

    var handler = PaystackPop.setup({
      key: 'pk_live_1860656ef97b3347e888f4e90a72211de99a06b8',
      email: 'talabiayobami@gmail.com',
      amount: "<?php echo $total1; ?>",
      ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
      metadata: {
         custom_fields: [
            {
                display_name: "ZCPI Africa",
                variable_name: "mobile_number",
                value: "07015558349"
            }
         ]
      },
      callback: function(response){
          alert('success. transaction ref is ' + response.reference);
      },
      onClose: function(){
          alert('window closed');
      }
    });
    handler.openIframe();
  }
</script>
      

@endsection
@section('content')
@include('layouts.breadcam')
<div class="content_padding">
    <div class="container user-dashboard-body">  

    <div class="row">
        <div class="col-md-8 col-sm-12 col-md-offset-2">
            <div class="panel panel-default panel-shadow" data-collapsed="0"><!-- to apply shadow add class "panel-shadow" -->

                <!-- panel head -->
                <div class="panel-heading">
                    <div class="panel-title"><i class="fa fa-money"></i> Deposit Method <strong> {{ $fund->payment->name }}</strong>
                    <div class="pull-right">
                        <a href="{{ route('deposit-fund') }}" class="label label-default" style="padding: 10px;"><i
                                class="fa fa-arrow-left"></i> Back to Payment Method Page</a>
                    </div>
                    </div>

                </div>
                <div class="panel-body">
                    
                        <div class="row">
                            <div class="form-group">
                                <label style="margin-top: 5px;font-size: 14px;" class="col-sm-4 col-sm-offset-1 text-right control-label"><strong>Deposit Amount : </strong></label>

                                <div class="col-sm-5">
                                    <div class="input-group input-text-box">
                                        <input type="text" value="{{ $fund->amount }}" readonly name="amount" id="amount" class="form-control bold" placeholder="Enter Deposit Amount" required>
                                        <span class="input-group-addon red">&nbsp;<strong>{{ $basic->currency }} </strong></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="form-group">
                                <label style="margin-top: 5px;font-size: 14px;" class="col-sm-4 col-sm-offset-1 text-right control-label"><strong>Charge : </strong></label>

                                <div class="col-sm-5">
                                    <div class="input-group input-text-box">
                                        <input type="text" value="{{ $fund->charge }}" readonly name="charge" id="charge" class="form-control bold" placeholder="Enter Deposit Amount" required>
                                        <span class="input-group-addon red">&nbsp;<strong> {{ $basic->currency }} </strong></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="form-group">
                                <label style="margin-top: 5px;font-size: 14px;" class="col-sm-4 col-sm-offset-1 text-right control-label"><strong>Total Send : </strong></label>

                                <div class="col-sm-5">
                                    <div class="input-group input-text-box">
                                        <input type="text" value="{{ $fund->amount + $fund->charge }}" readonly name="" id="deposit" class="form-control bold" placeholder="Enter Deposit Amount" required>
                                        <span class="input-group-addon red">&nbsp;<strong> {{ $basic->currency }} </strong></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="form-group">
                                <label style="margin-top: 5px;font-size: 14px;" class="col-sm-4 col-sm-offset-1 text-right control-label"><strong>Conversion Rate : </strong></label>

                                <div class="col-sm-5">
                                    <div class="input-group input-text-box">
                                        <input type="text" value="1 USD = {{ $fund->payment->rate }}" readonly name="charge" id="charge" class="form-control bold" placeholder="Enter Deposit Amount" required>
                                        <span class="input-group-addon red">&nbsp;<strong> {{ $basic->currency }} </strong></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="form-group">
                                <label style="margin-top: 5px;font-size: 14px;" class="col-sm-4 col-sm-offset-1 text-right control-label"><strong>Total Amount : </strong></label>

                                <div class="col-sm-5">
                                    <div class="input-group input-text-box">
                                        <input type="text" value="{{ round($fund->usd, $basic->deci)  }}" readonly name="charge" id="charge" class="form-control bold" placeholder="Enter Deposit Amount" required>
                                        <span class="input-group-addon red">&nbsp;<strong> USD </strong></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                             <div class="form-group">
                                <div class="col-md-12">
                                        <div class="col-sm-6 col-sm-offset-3">
                                            <!--<button onclick="window.location='{{route('gateway-redirect')}}'" class="btn btn-primary btn-block btn-icon bold icon-left"><i
                                                        class="fa fa-send"></i> Add Fund Now</button>-->
														
										

														<button onclick="payWithPaystack()" class="btn btn-primary btn-block btn-icon bold icon-left"><i class="fa fa-send"></i> Add Fund Now</button>
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <br>
                        <hr>
                </div>
                <!-- panel body -->
            </div>
        </div>
    </div>

    </div>
</div>

@endsection
