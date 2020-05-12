@extends('layouts.dashboard')

@section('style')
    <link href="{{ asset('assets/admin/css/bootstrap-toggle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/admin/css/bootstrap-fileinput.css') }}" rel="stylesheet">
@endsection
@section('content')


    <div class="row">
        <div class="col-md-12">

            <div class="portlet box blue">
                <div class="portlet-title">
                    <div class="caption uppercase">
                        <strong><i class="fa fa-info-circle"></i> {{ $page_title }}</strong>
                    </div>
                    <div class="tools">
                        <a href="javascript:;" class="collapse"> </a>
                    </div>
                </div>
                <div class="portlet-body">


                   
                <form action="{{url('admin/essentials')}}" method="post">
                    {{ csrf_field() }}
                    <div class="form-body">

                        <div class="row">
                            <div class="col-md-12">


                                

                                <div class="form-group">
                                    <label class="col-md-8  col-md-offset-2"><strong style="text-transform: uppercase;">Plan Sector :</strong></label>
                                    <div class="col-md-8 col-md-offset-2">
                                        <select name="essential_plan" class="form-control lg" id="">
                                        <option value="">Select Essential Plan</option>
                                        @foreach ($plan as $item)
                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                        @endforeach
                                    
                                        </select>
                                       
                                    </div>
                                </div>



                              

                                <div class="form-group">
                                    <label class="col-md-8  col-md-offset-2"><strong style="text-transform: uppercase;">Payout Durations :</strong></label>
                                    <div class="col-md-8 col-md-offset-2">
                                        <select name="payout_durations" id="" class="form-control input-lg" required>
                                            <option value="Monthly Payouts">Monthly Payouts</option>
                                            <option value="Every Six Months Payouts">Every Six Months Payouts</option>
                                            <option value="Yearly Payouts">Yearly Payouts</option>
                                        </select>
                                        <span class="input-group-addon"><i class="fa fa-sort-amount-asc"></i></span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-8  col-md-offset-2"><strong style="text-transform: uppercase;">ROI Per Payout Durations:</strong></label>
                                    <div class="col-md-8 col-md-offset-2">
                                        <select name="roi" id="" class="form-control input-lg" required>
                                            <option value="5">Monthly Payouts (5%)</option>
                                            <option value="7.5">Every Six Months Payouts (7.5%)</option>
                                            <option value="10">Yearly Payouts (10%)</option>
                                        </select>
                                        <span class="input-group-addon"><i class="fa fa-sort-amount-asc"></i></span>
                                    </div>
                                </div>
                                


                                

                               


                                {{--<div class="form-group">--}}
                                    {{--<label class="col-md-8  col-md-offset-2"><strong style="text-transform: uppercase;">Repeat Compound  :</strong></label>--}}
                                    {{--<div class="col-md-8 col-md-offset-2">--}}

                                    {{--</div>--}}
                                {{--</div>--}}

                               

                              



                                <div class="form-group">
                                    <div class="col-md-8 col-md-offset-2">
                                        <button type="submit" class="btn blue btn-block btn-lg bold"><i class="fa fa-send"></i> ADD NEW PLAN</button>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </form>
                   
                </div>
            </div>
        </div>
    </div><!---ROW-->

@endsection
@section('scripts')

    @if (session('alert'))

        <script type="text/javascript">

            $(document).ready(function(){

                swal("Sorry!", "{!! session('alert') !!}", "error");

            });

        </script>

    @endif


    <script src="{{ asset('assets/admin/js/bootstrap-toggle.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/bootstrap-fileinput.js') }}"></script>
@endsection
