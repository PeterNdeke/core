@extends('layouts.user-frontend.user-dashboard')
@section('content')
@include('layouts.breadcam')

<div class="content_padding">
    <div class="container user-dashboard-body">
    
  

    <div class="row">
            <div class="col-md-12">
            
                <div class="panel panel-default">
                    <div class="panel-heading"> 
                         <div class="admin-header-text">  
                           <h3> Investment Capital Rollover or Request to pull out capital</h3>
                        </div>
                        
                    </div>    
                    <div class="row panel-body">
                        <div class="col-sm-6 text-center">
                            <div class="panel panel-green panel-pricing">
                                <div class="panel-heading">
                                    <h3 style="font-size: 28px;"><b>{{$investment->plan->name}}</b></h3>
                                    </div>
                                    <div style="font-size: 18px;padding: 18px;" class="panel-body text-center">
                                    <p><strong>Units Paid for : {{$investment->units}}</strong></p>
                                    </div>
                                    <ul style='font-size: 15px;' class="list-group text-center bold">
                                    <li class="list-group-item"><i class="fa fa-check"></i>Duration:  {{$investment->plan->time}}  months </li>
                                    <li class="list-group-item"><i class="fa fa-check"></i>Amount Paid: {{$investment->amount}}</li>
                                    <li class="list-group-item"><i class="fa fa-check"></i> 23<i class="fa fa-percent"></i> ROI Earned: {{$investment->acumulator}} for {{$investment->plan->time}} months</li>
                                        
                                    
                                   
                                </ul>
                                <div class="panel-footer" style="overflow: hidden">
                                   
                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn-primary bold uppercase btn-block btn-icon icon-left plan_id radious-zero" data-toggle="modal" data-target="#invest_review_modal">
                                                <i class="fa fa-send"></i> Request to Cash Out Capital 
                                            </button>
                                        <form method="POST" action="{{ route('investment-post') }}" class="form-inline">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="id" value="">
                                            
                                        </form>
                                    </div>
                                   
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 text-center">
                            <div class="panel panel-green panel-pricing">
                                <div class="panel-heading">
                                <h3 style="font-size: 28px;"><b>{{$investment->plan->name}}</b></h3>
                                </div>
                                <div style="font-size: 18px;padding: 18px;" class="panel-body text-center">
                                <p><strong>Units Paid for : {{$investment->units}}</strong></p>
                                </div>
                                <ul style='font-size: 15px;' class="list-group text-center bold">
                                <li class="list-group-item"><i class="fa fa-check"></i>Duration:  {{$investment->plan->time}}  months </li>
                                <li class="list-group-item"><i class="fa fa-check"></i>Amount Paid: {{$investment->amount}}</li>
                                <li class="list-group-item"><i class="fa fa-check"></i> 23<i class="fa fa-percent"></i> ROI Earned: {{$investment->acumulator}} for {{$investment->plan->time}} months</li>
                                    
                                   
                                </ul>
                                <div class="panel-footer" style="overflow: hidden">
                                   
                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn-primary bold uppercase btn-block btn-icon icon-left plan_id radious-zero" data-toggle="modal" data-target="#invest_review_modal">
                                                <i class="fa fa-send"></i> Rollover Over the Capital Now!!
                                            </button>
                                        <form method="POST" action="{{ route('investment-post') }}" class="form-inline">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="id" value="">
                                            
                                        </form>
                                    </div>
                                   
                                    
                                </div>
                            </div>
                        </div>
                     
                    </div>
                    
                </div>
            </div>
        </div>
  </div>
</div>        
@endsection
