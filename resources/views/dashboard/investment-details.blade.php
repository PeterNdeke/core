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

                                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" style="margin-bottom: 20px;">
                                                        <div class="dashboard-stat yellow">
                                                            <div class="visual">
                                                                <i class="fa fa-sign-in"></i>
                                                            </div>
                                                            <div class="details">
                                                                <div class="number">
                                                                    <span data-counter="counterup">
                                                                      {{$details->due_date}}
                                                                           
                                                                       
                                                                    </span>
                                                                </div>
                                                                <div class="desc uppercase  bold ">Maturity Date </div>
                                                            </div>
                                                            <div class="more">
                                                                <div class="desc uppercase bold text-center">
                                                                    VIEW DETAILS
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
                                                                      {{$details->created_at->toFormattedDateString()}}
                                                                           
                                                                       
                                                                    </span>
                                                                </div>
                                                                <div class="desc uppercase  bold ">Date of Investment</div>
                                                            </div>
                                                            <div class="more">
                                                                <div class="desc uppercase bold text-center">
                                                                    VIEW DETAILS
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
                                                                        @if ($details->plan_id != null)
                                                                            {{$details->plan->name}}
                                                                        @else
                                                                        {{$details->market->name}}
                                                                        @endif
                                                                       
                                                                    </span>
                                                                </div>
                                                                <div class="desc uppercase  bold ">Plan Invested </div>
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
                                                <i class="fa fa-cogs"></i> Operations on Investment </div>
                                        </div>
                                        <div class="portlet-body">
                                            <div class="portlet light bordered">
                                                <div class="portlet-title">
                                                    <div class="caption font-dark">
                                                    </div>
                                                    <div class="tools"> </div>
                                                </div>
                                                
                                                <div class="portlet-body">
                                                    <table class="table table-striped table-bordered table-hover" id="sample_1">
                                
                                                        <thead>
                                                        <tr>
                                                            <th>ID#</th>
                                                            <th>Date Requested</th>
                                                           
                                                            <th>User Name</th>
                                                           
                                                            <th>Withdraw Amount</th>
                                                            <th>Maturity Date</th>
                                                          
                                                            <th>Status</th>
                                                           
                                                        </tr>
                                                        </thead>
                                
                                                        <tbody>
                                                        @php $i=0;@endphp
                                                        @foreach($details->withdraws as $p)
                                                            @php $i++;@endphp
                                                            <tr>
                                                                <td>{{ $i }}</td>
                                                                <td>{{ date('d-F-Y h:i A',strtotime($p->created_at))  }}</td>
                                                               
                                                                <td>{{ $p->user->username }}</td>
                                                              
                                                                <td>{{ $p->amount }} - {{ $basic->currency }}</td>
                                                                <td>{{ $p->due_date }}</td>
                                                                <td>
                                                                    @if($p->status == 1 )
                                                                        <span class="label label-warning bold uppercase"><i class="fa fa-spinner"></i> Pending</span>
                                                                    @elseif($p->status == 2)
                                                                <span class="label label-success bold uppercase"><i class="fa fa-check"></i> Completed on {{$p->updated_at->toFormattedDateString()}}</span>
                                                                    @elseif($p->status == 3)
                                                                        <span class="label label-danger bold uppercase"><i class="fa fa-times"></i> Refund</span>
                                                                    @endif
                                                                </td>
                                                               
                                                            </tr>
                                                        @endforeach
                                
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
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
{{-- @section('scripts')

    <script src="{{ asset('assets/admin/js/bootstrap-toggle.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/jquery.waypoints.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/admin/js/jquery.counterup.min.js') }}" type="text/javascript"></script>

@endsection --}}

