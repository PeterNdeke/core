@extends('layouts.dashboard')
@section('style')

    <link href="{{ asset('assets/admin/css/bootstrap-toggle.min.css') }}" rel="stylesheet">


@endsection
@section('content')


    <div class="row">
        <div class="col-md-12">

            <div class="portlet box blue">
                <div class="portlet-title">
                    <div class="caption">
                        <strong class="uppercase"><i class="fa fa-info-circle"></i> {{ $page_title }}</strong>
                    </div>
                    <div class="tools">
                        <a href="javascript:;" class="collapse"> </a>
                    </div>
                </div>
                <div class="portlet-body" style="overflow: hidden">
                    {!! Form::model($post,['url'=>['admin/insights',$post->id],'method'=>'put','class'=>'form-horizontal','files'=>true]) !!}
                    
                    <div class="form-body">


                        <div class="row">

                           

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="col-md-12"><strong style="text-transform: uppercase;">Insight Title</strong></label>
                                    <div class="col-sm-12">
                                        <div class="input-group mb15">
                                        <input class="form-control input-lg bold" name="title" value="{{$post->title}}" required type="text" placeholder="Title">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="col-md-12"><strong style="text-transform: uppercase;">Method Photo</strong></label>
                                    <div class="col-sm-12">
                                        <span class="btn green fileinput-button">
                                            <i class="fa fa-plus"></i>
                                            <span> Upload New Photo </span>
                                        <input class="form-control input-lg bold" name="image" value="" type="file" >
                                        </span>
                                        {{--<div class="input-group mb15">--}}
                                            {{--<input class="form-control input-lg bold" name="image" value="" required type="file" >--}}
                                            {{--<span class="input-group-addon"><i class="fa fa-picture-o"></i></span>--}}
                                        {{--</div>--}}
                                    </div>
                                </div>
                            </div>


                        

                            


                            
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="col-md-12"><strong style="text-transform: uppercase;">Insight
                                                    Descriptions</strong></label>
                                            <div class="col-sm-12">
                                        <textarea name="description" rows="8"
                                                  class="form-control bold input-lg" required
                                            placeholder="Description">{{$post->description}}</textarea>
                                            </div>
                                        </div>
                                    </div>
                               


                               
                
                                </div>

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <button class="btn btn-primary btn-block btn-lg"><i class="fa fa-send"></i>Update Insight</button>
                            </div>
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>


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

@endsection