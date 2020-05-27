

@if (Auth::user()->profile_verify == null)
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Profile Update</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">-
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  

  <script type="text/javascript">
    $(window).on('load',function(){
        $('#myModal').modal('show');
    });
</script>

  <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Please Kindly Update your Profile</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        @include('errors.list')
        
        <!-- Modal body -->
        <div class="modal-body">
        <form action="{{url('user/profile-update')}}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
                <div class="form-group">
                  <label for="email">Upload your profile image</label>
                <input type="file" name="image1" class="form-control">
                </div>
                <div class="form-group">
                  <label for="pwd">Choose your Gender:</label>
                 <select name="gender" id="" class="form-control">
                     <option value="Male">Male</option>
                     <option value="Female">Female</option>
                 </select>
                </div>
                <div class="form-group">
                    <label for="pwd">Date of Birth:</label>
                  <input type="date" class="form-control" name="dob">
                  </div>

                  <div class="form-group">
                    <label for="pwd">Nationality</label>
                  <input type="text" class="form-control" name="nationality" value="{{old('nationality')}}">
                  </div>
                  <div class="form-group">
                    <label for="pwd">Proof of Identity:</label>
                <select name="identity" id="" class="form-control">
                   <option value="National Identity Card">National Identity Card</option>
                   <option value="Driver's Licence">Driver's Licence</option>
                   <option value="Voter's Card">Voter's Card</option>
                   <option value="Others">Others</option>
                </select>
                  </div>
                  {{-- <div class="form-group">
                    <label for="email">Upload your Identity Card</label>
                    <input type="file" name="image2" class="form-control">
                  </div> --}}
                  <div class="form-group">
                    <label for="pwd">Home Address:</label>
                  <input type="text" name="address" class="form-control" value="{{old('address')}}">
                  </div>
                  <div class="form-group">
                    <label for="pwd">State of Origin:</label>
                <select name="state" id="" class="form-control">
                   <option value="National Identity Card">Please select your state of origin</option>
                  @foreach ($state as $item)
                <option value="{{$item->name}}">{{$item->name}}</option>
                  @endforeach
                </select>
                  </div>

                  <div class="modal-header">
                    <h4 class="modal-title">Next Of Kin Details</h4>
                   
                  </div>

                  <div class="form-group">
                    <label for="email">Name of Next of Kin</label>
                  <input type="text" name="name_of_next_of_kin" class="form-control" value="{{old('name_of_next_of_kin')}}">
                  </div>
                  <div class="form-group">
                    <label for="email">Relationship</label>
                  <input type="text" name="relationship" class="form-control" value="{{old('relationship')}}">
                  </div>
                  <div class="form-group">
                    <label for="email">Address</label>
                  <input type="text" name="address_of_next_of_kin" class="form-control" value="{{old('address_of_next_of_kin')}}">
                  </div>
                  <div class="form-group">
                    <label for="email">Phone Number</label>
                  <input type="text" name="phone_number_of_next_kin" class="form-control" value="{{old('phone_number_of_next_kin')}}">
                  </div>
                  <div class="form-group">
                    <label for="email">Email Address</label>
                  <input type="text" name="email_address_of_next_kin" class="form-control" value="{{old('email_address_of_next_kin')}}">
                  </div>
               
                <button type="submit" class="btn btn-primary btn-lg">Submit</button>
              </form>
        </div>
      
        
      </div>
    </div>
  </div>
  
</div>

</body>
</html>

  
    
@else

@extends('layouts.user-frontend.user-dashboard')

@section('style')
    <style>

        ::-moz-focus-inner {
            padding: 0;
            border: 0;
        }

        span.label{
            font-size: 12px; !important;
        }


        button {
            position: relative;
            /*  background-color: #aaa;
              border-radius: 0 3px 3px 0;
              cursor: pointer;*/
        }
        .panel{
            border-radius: 0px;
            border-top-left-radius: 0px;
            border-top-right-radius: 0px;
        }

        .copied::after {
            position: absolute;
            top: 12%;
            right: 110%;
            display: block;
            content: "COPIED";
            font-size: 1.40em;
            padding: 2px 10px;
            color: #fff;
            background-color: #22a;
            border-radius: 3px;
            opacity: 0;
            will-change: opacity, transform;
            animation: showcopied 1.5s ease;
        }

        @keyframes showcopied {
            0% {
                opacity: 0;
                transform: translateX(100%);
            }
            70% {
                opacity: 1;
                transform: translateX(0);
            }
            100% {
                opacity: 0;
            }
        }

    </style>
@endsection
@section('content')

@include('layouts.breadcam')

<div class="content_padding">
        <div class="container user-dashboard-body">
             <br>

<div class="clearfix"></div>
    <br>
<div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-money fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge dashboard-balance-text"> {{ $basic->symbol }} <span data-counter="counterup" data-value="{{ $balance->balance }}">{{ $balance->balance }}</span></div>
                                    
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">Current Balance</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>


                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-recycle fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge dashboard-balance-text">
                                          {{ $basic->symbol }}  <span data-counter="counterup" data-value="{{ $repeat }}">{{ $repeat }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">Total Repeat</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>


                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-cloud-download fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge dashboard-balance-text">  {{ $basic->symbol }}   <span data-counter="counterup" data-value="{{ $deposit }}">{{ $deposit }}</span></div>
                                   
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">Total Deposits</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>



				

                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-cloud-upload fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge dashboard-balance-text">
                                          {{ $basic->symbol }} <span data-counter="counterup" data-value="{{ $withdraw }}">{{ $withdraw }}</span>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">Total Withdraws</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-cloud-upload fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge dashboard-balance-text">
                                          {{ $basic->symbol }} <span data-counter="counterup" data-value="{{ $roi }}">{{ $roi }}</span>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">Total Daily Earnings/ROI</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

    <br><br>
@if (count($investement) != 0)
<div class="col-md-12">
            
    <div class="panel panel-default">
        <div class="panel-heading"> 
             <div class="admin-header-text">  
               <h3> Your Recent Investments</h3>
            </div>
            
        </div>    
        <div class="panel-body">
             <table class="table table-striped table-bordered table-hover" id="sample_1">
<thead>
<tr>
<th>Sl No</th>
<th>Date Time</th>

<th>Invest Plan</th>
<th>Invest Amount</th>
<th>Invest Commission</th>

<th>Daily ROI</th>
<th>Rollover</th>
<th>Status</th>
</tr>
</thead>
<tbody>
@php $i = 0;@endphp
@foreach($investement as $p)
@php $i++;@endphp
<tr>
    <td>{{ $i }}</td>
    <td width="10%">{{ date('d-F-Y h:s:i A',strtotime($p->created_at)) }}</td>
   
    <td><span class="aaaa"><strong>{{ $p->plan->name }}</strong></span></td>
    <td>{{ $p->amount }} - {{ $basic->currency }}</td>
    <td>{{ $p->plan->percent }} %</td>
   
    <td>{{ $basic->symbol }}{{$p->withdrawable_amount}} </td>
    <td><span class="aaaa"><strong>
        @if($p->status == 0)
       Still Running
    @else
    @if ($p->rollover == null)
    <a href="{{url("user/rollover/$p->id")}}" class="btn btn-primary">Rollover</a>
    @endif
    
    @endif
    </strong></span></td>
    <td>
        @if($p->status == 0)
            <span class="label label-warning bold uppercase"><i class="fa fa-spinner"></i> Running</span>
        @else
            <span class="label label-success bold uppercase"><i class="fa fa-check" aria-hidden="true"></i> Completed</span>
        @endif
    </td>
</tr>
@endforeach
</tbody>

</table>
        </div>
    </div>
</div>
@else
    <div class="col-md-12">
        <div class="panel-heading"> 
            <div class="admin-header-text">  
              <h3 style="color:red"> You have no investement yet</h3> <br>
            <a href="{{url('user/investment-new')}}" class="btn btn-primary btn-lg">Click here to Invest Now!</a>
           </div>
           
       </div>    
      
    </div>
@endif
 

    <div class="row">
        <div class="col-md-12">
            <h3 class="page_title">{!! $reference_title  !!} </h3>
            <hr>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">


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
                            <th>Register Date</th>
                            <th>User Name</th>
                            <th>Username</th>
                            <th>User Email</th>
                            <th>User Phone</th>
                            <th>Status</th>
                        </tr>
                        </thead>

                        <tbody>
                        @php $i=0;@endphp
                        @foreach($reference_user as $p)
                            @php $i++;@endphp
                            <tr>
                                <td>{{ $i }}</td>
                                <td>{{ date('d-F-Y h:i A',strtotime($p->created_at))  }}</td>
                                <td>{{ $p->name }}</td>
                                <td>{{ $p->username }}</td>
                                <td>{{ $p->email }}</td>
                                <td>{{ $p->phone }}</td>
                                <td>
                                    @if($p->status == 1)
                                        <span class="label bold label-danger bold uppercase"><i class="fa fa-user-times"></i> Blocked</span>
                                    @else
                                        <span class="label bold label-success bold uppercase"><i class="fa fa-check"></i> Active</span>
                                    @endif
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div><!-- ROW-->
    <br>
    <br>

    <div class="row">
        <div class="col-md-12">
           
                <label><strong>YOUR REFERRAL LINK:</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Number OF YOUR REFERRALS USER : {{ $refer }} </strong></label>
                <div class="input-group mb15">
                    <input type="text" class="form-control input-lg" id="ref" value="{{ route('auth.reference-register',Auth::user()->username) }}"/>
                    <span class="input-group-btn">
                        <button data-copytarget="#ref" class="btn btn-success btn-lg">COPY TO CLIPBOARD</button>
                    </span>
                </div>
         
        </div>
    </div>
    <br>
           
        </div>
</div>
@endsection
@section('script')
    <script>
        $('.has').tooltip({
            trigger: 'click',
            placement: 'bottom'
        });

        function setTooltip(btn, message) {
            $(btn).tooltip('hide')
                    .attr('data-original-title', message)
                    .tooltip('show');
        }

        function hideTooltip(btn) {
            setTimeout(function() {
                $(btn).tooltip('hide');
            }, 1000);
        }

        // Clipboard


        $(document).ready(function () {

            $(document).on("click", '.delete_button', function (e) {
                var id = $(this).data('id');
                $(".abir_id").val(id);

            });

        });
        $('#btnYes').click(function() {
            $('#formSubmit').submit();
        });
    </script>
    <script src="{{ asset('assets/admin/js/clipboard.min.js') }}"></script>
    <script>
        /*new Clipboard('.has');*/

    </script>
    <script>
        (function() {

            'use strict';

            // click events
            document.body.addEventListener('click', copy, true);

            // event handler
            function copy(e) {

                // find target element
                var
                        t = e.target,
                        c = t.dataset.copytarget,
                        inp = (c ? document.querySelector(c) : null);

                // is element selectable?
                if (inp && inp.select) {

                    // select text
                    inp.select();

                    try {
                        // copy text
                        document.execCommand('copy');
                        inp.blur();

                        // copied animation
                        t.classList.add('copied');
                        setTimeout(function() { t.classList.remove('copied'); }, 1500);
                    }
                    catch (err) {
                        alert('please press Ctrl/Cmd+C to copy');
                    }

                }

            }

        })();

    </script>
    <script src="{{ asset('assets/admin/js/jquery.waypoints.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/admin/js/bootstrap-tooltip.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/admin/js/jquery.counterup.min.js') }}" type="text/javascript"></script>
@endsection    

@endif

