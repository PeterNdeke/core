@extends('layouts.user-frontend.user-dashboard')

@section('style')
    <link href="{{ asset('assets/admin/css/bootstrap-fileinput.css') }}" rel="stylesheet">

    <style>
        input[type="text"] {
            width: 100%;
        }

        input[type="email"] {
            wi
        }
    </style>
@endsection
@section('content')
@include('layouts.breadcam')

<div class="content_padding">
    <div class="container user-dashboard-body">
        @include('errors.list')
        
        <form action="{{url("user/banking-details-update/$bank->id")}}" method="POST">
            {!! csrf_field() !!}
                <div class="form-group">
                <label for="exampleInputPassword1">Bank Name</label>
                 <select name="bank" class="form-control">
                 <option value="{{$bank->bank_name}}">{{$bank->bank_name}}</option>

                 @foreach ($banks as $item)
                 <option value="{{$item->id}}">{{$item->name}}</option>
                 @endforeach

                 </select>
               
                 
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Account Name</label>
                <input type="text" class="form-control" name="accountName" value="{{$bank->account_name}}">
                </div>
                <div class="form-group">
                        <label for="exampleInputPassword1">Account Number</label>
                <input type="text" class="form-control" name="accountNumber" value="{{$bank->account_number}}">
                      </div>

                      <div class="form-group">
                            <label for="exampleInputPassword1">Account Type</label>
                     <select name="accountType" class="form-control" >
                     <option value="{{$bank->account_type}}">{{$bank->account_type}}</option>
                       
                     <option value="Savings Account">Savings Account</option>
                     <option value="Current Account">Current Account</option>
                     
                     </select>
                          </div>
                
                <button type="submit" class="btn btn-primary">Update</button>
              </form>

    
    </div>
</div>




@endsection
@section('script')
    <script src="{{ asset('assets/admin/js/bootstrap-fileinput.js') }}"></script>

    @if (session('message'))

        <script type="text/javascript">

            $(document).ready(function(){

                swal("Success!", "{{ session('message') }}", "success");

            });

        </script>

    @endif

    @if (session('alert'))

        <script type="text/javascript">

            $(document).ready(function(){

                swal("Sorry!", "{!! session('alert') !!}", "error");

            });

        </script>

    @endif
@endsection
