@extends('layouts.dashboard')
@section('content')


    <div class="row">
        <div class="col-md-12">
 

            <div class="portlet light bordered">
          
                <div class="portlet-title">
                    <div class="caption font-dark">
                    </div>
                    <div class="tools"> </div>
                </div>
                <div class="portlet-body">
                    <table class="table table-striped table-bordered table-hover" id="">

                        <thead>
                        <tr>
                            <th>ID#</th>
                            <th>Applicant Name</th>
                            <th>Phone Number</th>
                            <th>Email</th>
                            <th>Date Applied</th>
                            <th>View CV</th>
                            <th>View ID Card</th>
                        </tr>
                        </thead>

                        <tbody>
                        @php $i=0;@endphp
                        @foreach($details as $p)
                            @php $i++;@endphp
                            <tr>
                                <td>{{ $i }}</td>
                                
                                <td>{{ $p->full_name }}</td>
                                <td>{{ $p->phone_number }}</td>
                               
                                <td>{{ $p->email }}</td>
                                <td>{{ date('d-F-Y h:i A',strtotime($p->created_at))  }}</td>
                               
                                <td>
                                <a href="{{asset('assets/deposit/'.$p->cv)}}"  target="_blank" class="btn  bold uppercase btn-success btn-sm"><i class="fa fa-eye"></i> View Details</a>     
                                </td>
                                <td>
                                    <a href="{{asset('assets/deposit/'.$p->ID_card)}}"  target="_blank" class="btn  bold uppercase btn-success btn-sm"><i class="fa fa-eye"></i> View Details</a>     
                                    </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                  
                </div>
            </div>

        </div>
    </div><!-- ROW-->



@endsection
