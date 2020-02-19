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
        @include('partials.flash')
        @if ($account != null)
        <table class="table table-striped table-bordered table-hover" id="sample_1">
            <thead>
            <tr>
          
            <th>Account Number</th>
            <th>Account Name</th>
            <th>Bank Name</th>
            <th>Account Type</th>
           
            
            <th>Date Created</th>
            <th>Edit</th>
           
          
            </tr>
            </thead>
            <tbody>
           
            <tr>
               
               
            <td>{{$account->account_number}}</td>
                <td>{{ $account->account_name }}</td>
                <td>{{ $account->bank_name }}</td>
                <td>{{ $account->account_type }}</td>
                <td width="10%">{{ date('d-F-Y h:s:i A',strtotime($account->created_at)) }}</td>
                <td>  
                    <a href="{{url("user/account-details/$account->id/edit")}}" class="btn btn-lg btn-primary">
                                  <i class="fa fa-edit fa-sm text-white-50"></i
                                  >Edit</a
                                >
  
                    </td>
                        {{-- <td>
                            <form onsubmit="return confirm('Do you really want to delete?');"  action="{{ url("user/account/$account->id/delete")}}" method="POST">
                              {{ csrf_field() }}
                              {{ method_field('DELETE')}}
  
                              <button class="btn btn-lg btn-danger">
                                  <i class="fa fa-trash fa-sm text-white-50"></i
                                  >Delete
                                </button>
                             
                          </form>
                              
                        </td> --}}
  
            </tr>
           
            </tbody>
            
            </table>
        @else
        <div class="col-md-12">
            <div class="panel-heading"> 
                <div class="admin-header-text">  
                  <h3 style="color:red"> You have not added your Account Details yet</h3> <br>
                  <div class="card-header py-3 col-md-6">
                    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#accountModal">Click to Add Account Details</button>
                   </div>  

               
               </div>
               
           </div>    
          
        </div>
        @endif
       
    
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="accountModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Please Add your Banking Details</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <form method="POST" action="{{url('user/account-details')}}">
            {!! csrf_field() !!}
                        <div class="form-group">
                          
                          <select  class="form-control" name="bank">
                              <option>Please select your bank</option>
                              @foreach ($banks as $item)
                            <option value="{{$item->name}}">{{$item->name}}</option>
                              @endforeach
                             
                             
                          </select>
                          
                        </div>
                        <div class="form-group">
                         
                          <input type="text" class="form-control" placeholder="Enter your account name" name="accountName">
                        </div>
                        <div class="form-group">
                         
                                <input type="text" class="form-control" placeholder="Enter your account number" name="accountNumber">
                              </div>
                              <div class="form-group">
                          
                                    <select  class="form-control" name="account_type">
                                        <option>Please select Account Type</option>
                                        <option value="Savings Account">Savings Account</option>
                                        <option value="Current Account">Current Account</option>
                                       
                                       
                                        
                                       
                                    </select>
                                    
                                  </div>
                       
                                  <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save</button>
                                      </div>
                      </form>
        </div>
       
      </div>
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
