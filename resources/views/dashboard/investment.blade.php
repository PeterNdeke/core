@extends('layouts.dashboard')
@section('content')


    <div class="row">
        <div class="col-md-12">
 

            <div class="portlet light bordered">
            <a href="{{url('admin/print-investment')}}" class="btn btn-primary btn-lg align-left">Generate PDF</a>
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
                            <th>Date of Investment</th>
                            
                            <th>FullName</th>
                            <th>Email</th>
                            <th>Amount Invested</th>
                            <th>Details</th>
                        </tr>
                        </thead>

                        <tbody>
                        @php $i=0;@endphp
                        @foreach($investment as $p)
                            @php $i++;@endphp
                            <tr>
                                <td>{{ $i }}</td>
                                <td>{{ date('d-F-Y h:i A',strtotime($p->created_at))  }}</td>
                                <td>{{ $p->user->name }}</td>
                               
                                <td>{{ $p->user->email }}</td>
                              
                                <td>
                                    {{ $p->amount }} - {{ $basic->currency }}
                                </td>
                                <td>
                                <a href="{{url("admin/investment-detail/$p->id")}}" class="btn  bold uppercase btn-success btn-sm"><i class="fa fa-eye"></i> View Details</a>     
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                    <div class="text-center">
                        {!! $investment->links() !!}
                    </div>
                </div>
            </div>

        </div>
    </div><!-- ROW-->



@endsection
