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
                    {!! Form::model($sector,['url'=>['admin/properties',$sector->id],'method'=>'put','class'=>'form-horizontal','files'=>true]) !!}

                   
                    <div class="form-body">

                        <div class="row">
                            <div class="col-md-12">

                               

                                <div class="form-group">
                                    <label class="col-md-8  col-md-offset-2"><strong style="text-transform: uppercase;">Category Name :</strong></label>
                                    <div class="col-md-8 col-md-offset-2">
                                    <input type="text" name="category_name" id="" value="{{$sector->category_name}}" class="form-control input-lg" required placeholder="Name">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-8  col-md-offset-2"><strong style="text-transform: uppercase;">Sector Category Name :</strong></label>
                                    <div class="col-md-8 col-md-offset-2">
                                        <select name="sector_name" id="" class="form-control">
                                        <option value="{{$sector->sector_name}}">{{$sector->sector_name}}</option>
                                        @foreach ($sectors as $item)
                                        <option value="{{$item->slug}}">{{$item->name}}</option>
                                              @endforeach

                                        </select>
                                 
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label class="col-md-8  col-md-offset-2"><strong style="text-transform: uppercase;">Plan Image :</strong></label>
                                    <div class="col-md-8 col-md-offset-2">
                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                            <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;" data-trigger="fileinput">
                                                <img style="width: 200px" src="http://placehold.it/445x350" alt="...">
                                            </div>
                                            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px"></div>
                                            <div>
                                                <span class="btn btn-info btn-file">
                                                    <span class="fileinput-new bold uppercase"><i class="fa fa-file-image-o"></i> Select image</span>
                                                    <span class="fileinput-exists bold uppercase"><i class="fa fa-edit"></i> Change</span>
                                                    <input type="file" name="image_url" accept="image/*">
                                                </span>
                                                <a href="#" class="btn btn-danger fileinput-exists bold uppercase" data-dismiss="fileinput"><i class="fa fa-trash"></i> Remove</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                               
                                <div class="form-group">
                                    <label class="col-md-6 col-md-offset-2"><strong style="text-transform: uppercase;">Sector's
                                            Descriptions</strong></label>
                                    <div class="col-sm-6 col-md-offset-2">
                                    <textarea name="description" class="form-control col-md-6 col-md-offset-2" id="" cols="30" rows="10">{!! $sector->description!!}</textarea>
                                {{-- <textarea name="description" rows="8"
                                          class="form-control bold input-lg" required
                                          placeholder="Description"></textarea> --}}
                                    </div>
                                </div>
                               


            

                               


                                {{--<div class="form-group">--}}
                                    {{--<label class="col-md-8  col-md-offset-2"><strong style="text-transform: uppercase;">Repeat Compound  :</strong></label>--}}
                                    {{--<div class="col-md-8 col-md-offset-2">--}}

                                    {{--</div>--}}
                                {{--</div>--}}

                              

                                {{-- <div class="form-group">
                                    <label class="col-md-8  col-md-offset-2"><strong style="text-transform: uppercase;">PLAN STATUS :</strong></label>
                                    <div class="col-md-8 col-md-offset-2">
                                        <input data-toggle="toggle" checked data-onstyle="success" data-size="large" data-offstyle="danger" data-on="Active" data-off="Deactive" data-width="100%" type="checkbox" name="status">
                                    </div>
                                </div> --}}

                                <div class="form-group">
                                    <div class="col-md-8 col-md-offset-2">
                                        <button type="submit" class="btn blue btn-block btn-lg bold"><i class="fa fa-send"></i>UPDATE</button>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                    {!! Form::close() !!}
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
