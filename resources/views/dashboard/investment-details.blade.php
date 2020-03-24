@extends('layouts.dashboard')
@section('style')

    <link href="{{ asset('assets/admin/css/bootstrap-toggle.min.css') }}" rel="stylesheet">


@endsection
@section('content')
   
    @if(count(['user']))

        <div class="row">
            <div class="col-md-12">


                <div class="portlet blue box">
                    <div class="portlet-title">
                        <div class="caption font-dark">
                            <strong>Investment Details</strong>
                        </div>
                        <div class="tools"> </div>
                    </div>
                    <div class="portlet-body" style="overflow:hidden;">

                        <div class="col-md-12">
                            <div class="row">

                                <div class="col-md-12">
                                    <div class="portlet box purple">
                                        <div class="portlet-title">
                                            <div class="caption uppercase bold">
                                                <i class="fa fa-desktop"></i> Details </div>
                                            <div class="tools"> </div>
                                        </div>
                                        <div class="portlet-body">

                                            <div class="row">


                                                <!-- START -->
                                                
                                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" style="margin-bottom: 20px;">
                                                        <div class="dashboard-stat blue">
                                                            <div class="visual">
                                                                <i class="fa fa-recycle"></i>
                                                            </div>
                                                            <div class="details">
                                                                <div class="number">
                                                                <span data-counter="counterup">{{$details->amount}}</span>
                                                                </div>
                                                                <div class="desc uppercase bold"> Amount Invested </div>
                                                            </div>
                                                            <div class="more">
                                                                <div class="desc uppercase bold text-center">
                                                                    {{ $basic->symbol }}
                                                                <span data-counter="counterup">{{$details->amount}}</span> 
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                
                                                <!-- END -->

                                               
                                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" style="margin-bottom: 20px;">
                                                        <div class="dashboard-stat green">
                                                            <div class="visual">
                                                                <i class="fa fa-cloud-download"></i>
                                                            </div>
                                                            <div class="details">
                                                                <div class="number">
                                                                <span data-counter="counterup">{{$details->withdrawable_amount}}</span>
                                                                </div>
                                                                <div class="desc uppercase bold ">Withdrawable Amount</div>
                                                            </div>
                                                            <div class="more">
                                                                <div class="desc uppercase bold text-center">
                                                                    {{ $basic->symbol }}
                                                                    <span data-counter="counterup">0</span> DEPOSIT
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                                <!-- END -->

                                              
                                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" style="margin-bottom: 20px;">
                                                        <div class="dashboard-stat red">
                                                            <div class="visual">
                                                                <i class="fa fa-cloud-upload"></i>
                                                            </div>
                                                            <div class="details">
                                                                <div class="number">
                                                                <span data-counter="counterup">{{$details->units}}</span>
                                                                </div>
                                                                <div class="desc uppercase  bold "> No of Units </div>
                                                            </div>
                                                            <div class="more">
                                                                <div class="desc uppercase bold text-center">
                                                                    {{ $basic->symbol }}
                                                                    <span data-counter="counterup" >0</span> WITHDRAW
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                              

                                               
                                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" style="margin-bottom: 20px;">
                                                        <div class="dashboard-stat yellow">
                                                            <div class="visual">
                                                                <i class="fa fa-sign-in"></i>
                                                            </div>
                                                            <div class="details">
                                                                <div class="number">
                                                                    <span data-counter="counterup">
                                                                        @if ($details->status == 0)
                                                                            Running
                                                                        @else
                                                                            Completed
                                                                        @endif
                                                                       
                                                                    </span>
                                                                </div>
                                                                <div class="desc uppercase  bold "> Status </div>
                                                            </div>
                                                            <div class="more">
                                                                <div class="desc uppercase bold text-center">
                                                                    VIEW DETAILS
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                               
                                                <!-- END -->

                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="portlet box blue-ebonyclay">
                                        <div class="portlet-title">
                                            <div class="caption uppercase bold">
                                                <i class="fa fa-cogs"></i> Operations </div>
                                        </div>
                                        <div class="portlet-body">
                                           
                                        </div>
                                    </div>
                                </div>

                              


                            </div>
                        </div><!-- col-9 -->

                    </div>
                </div>

            </div>
        </div><!-- ROW-->

    @else

        <div class="text-center">
            <h3>No User Found</h3>
        </div>
    @endif


@endsection
@section('scripts')

    <script src="{{ asset('assets/admin/js/bootstrap-toggle.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/jquery.waypoints.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/admin/js/jquery.counterup.min.js') }}" type="text/javascript"></script>

@endsection

