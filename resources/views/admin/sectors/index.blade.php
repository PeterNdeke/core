@extends('layouts.dashboard')

@section('content')


    <div class="row">
        <div class="col-md-12">

            <div class="portlet box blue">
                <div class="portlet-title">
                    <div class="caption">
                        <strong><i class="fa fa-bank"></i> {{ $page_title }}</strong>
                    </div>
                    <div class="tools">
                        <a href="javascript:;" class="collapse"> </a>
                        <a href="javascript:;" class="remove"> </a>
                    </div>
                </div>
                <div class="portlet-body" style="overflow: hidden">

                    @foreach($sectors as $p)

                        <div class="col-sm-4 text-center">
                            <div class="panel panel-primary panel-pricing">
                                <div class="panel-heading">
                                    <h3 style="font-size: 28px;"><b>{{ $p->name }}</b></h3>
                                </div>
                                <div style="font-size: 18px;padding: 18px;" class="panel-body text-center">
                                    <img class="" style="width: 35%;border-radius: 5px" src="{{ asset('assets/images') }}/{{ $p->image_url }}" alt="">
                                </div>

                                <p>{{ str_limit(strip_tags($p->description), 50) }}....</p>
                               
                                <div class="panel-footer" style="overflow: hidden">
                                    <div class="row">
                                    <div class="col-sm-6">
                                        <a class="btn btn-block btn-primary bold uppercase" href="{{ url("admin/sectors/$p->id/edit") }}"><i class="fa fa-edit"></i> EDIT</a>
                                    </div>
                                    <form onsubmit="return confirm('Do you really want to delete?');"  action="{{ url($link."/".$p->id)}}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE')}}
                                   <div class="col-sm-6">
                                        <button type="submit" class="btn btn-block btn-danger col-sm-6">
                                           <i class="fa fa-fw fa-times-circle-o"></i>Delete </button>
                                   </div>
                                       
                                    </form> 
        
                                    </div>

                                </div>
                            </div>
                        </div>

                    @endforeach


                </div>
            </div>
        </div>
    </div>
@endsection