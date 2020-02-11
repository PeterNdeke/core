@extends('layouts.dashboard')

@section('style')
    <link href="{{ asset('assets/admin/css/bootstrap-toggle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/admin/css/bootstrap-fileinput.css') }}" rel="stylesheet">
    <script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script>
    <script type="text/javascript">
        bkLib.onDomLoaded(function() {
            new nicEditor({fullPanel : true}).panelInstance('area1');
        });
    </script>
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


                    
                    {!! Form::model($plan,['url'=>['admin/plan-edit',$plan->id],'method'=>'put','class'=>'form-horizontal','files'=>true]) !!}
                    
                    
                    <div class="form-body">

                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">


                                <div class="form-group">
                                    <label class="col-md-8  col-md-offset-2"><strong style="text-transform: uppercase;">Plan Name :</strong></label>
                                    <div class="col-md-8 col-md-offset-2">
                                        <input type="text" name="name" id="" value="{{ $plan->name }}" class="form-control input-lg" required placeholder="Plan Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-8  col-md-offset-2"><strong style="text-transform: uppercase;">Plan Sector :</strong></label>
                                    <div class="col-md-8 col-md-offset-2">
                                        <select name="sector_name" class="form-control lg" id="">
                                        <option value="{{$plan->sector_name}}">{{$plan->sector_name}}</option>
                                            <option value="real-estate">Real Estate</option>
                                            <option value="oil-and-gas">Oil and Gas</option>
                                            <option value="agriculture">Agriculture</option>
                                        </select>
                                       
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-8  col-md-offset-2"><strong style="text-transform: uppercase;">Plan Image :</strong></label>
                                    <div class="col-md-8 col-md-offset-2">
                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                            <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;" data-trigger="fileinput">
                                                <img style="width: 200px" src="{{ asset('assets/images') }}/{{ $plan->image }}" alt="...">
                                            </div>
                                            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px"></div>
                                            <div>
                                                <span class="btn btn-info btn-file">
                                                    <span class="fileinput-new bold uppercase"><i class="fa fa-file-image-o"></i> Select image</span>
                                                    <span class="fileinput-exists bold uppercase"><i class="fa fa-edit"></i> Change</span>
                                                    <input type="file" name="image" accept="image/*">
                                                </span>
                                                <a href="#" class="btn btn-danger fileinput-exists bold uppercase" data-dismiss="fileinput"><i class="fa fa-trash"></i> Remove</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-8  col-md-offset-2"><strong style="text-transform: uppercase;">Plan Description :</strong></label>
                                    <div class="col-md-8 col-md-offset-2">
                                    <textarea name="description" class="form-control" id="" cols="30" rows="10">{{$plan->description}}</textarea> 
                                </div> 
                                </div>

                               

                               

                                <div class="form-group">
                                    <label class="col-md-8  col-md-offset-2"><strong style="text-transform: uppercase;">Minimum Units :</strong></label>
                                    <div class="col-md-8 col-md-offset-2">
                                        <div class="input-group mb15">
                                            <span class="input-group-addon">Units</span>
                                            <input class="form-control input-lg" name="min_units" value="{{ $plan->min_units }}" required type="number" placeholder="Minimum Units">
                                            
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-8  col-md-offset-2"><strong style="text-transform: uppercase;">Maximum Units :</strong></label>
                                    <div class="col-md-8 col-md-offset-2">
                                        <div class="input-group mb15">
                                            <span class="input-group-addon">Units</span>
                                            <input class="form-control input-lg" name="max_units" value="{{ $plan->max_units}}" required type="number" placeholder="Maximum Units">
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-8  col-md-offset-2"><strong style="text-transform: uppercase;">Available Units :</strong></label>
                                    <div class="col-md-8 col-md-offset-2">
                                        <div class="input-group mb15">
                                            <span class="input-group-addon">Available Units</span>
                                            <input class="form-control input-lg" name="available_units" value="{{ $plan->available_units}}" required type="number" placeholder="Available Units">
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-8  col-md-offset-2"><strong style="text-transform: uppercase;">Price Per Unit:</strong></label>
                                    <div class="col-md-8 col-md-offset-2">
                                        <div class="input-group mb15">
                                            <span class="input-group-addon">{{ $basic->symbol }}</span>
                                            <input class="form-control input-lg" name="price" value="{{ $plan->price }}" required type="text" placeholder="Price Per Unit">
                                            <span class="input-group-addon">{{ $basic->currency }}</span>
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label class="col-md-8  col-md-offset-2"><strong style="text-transform: uppercase;">ROI Percentage :</strong></label>
                                    <div class="col-md-8 col-md-offset-2">
                                        <div class="input-group mb15">
                                            <span class="input-group-addon">{{ $basic->symbol }}</span>
                                            <input class="form-control input-lg" name="percent" value="{{ $plan->percent }}" required type="text" placeholder="ROI Percentage">
                                            <span class="input-group-addon"><i class="fa fa-percent"></i></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-8  col-md-offset-2"><strong style="text-transform: uppercase;">Duration in Months :</strong></label>
                                    <div class="col-md-8 col-md-offset-2">
                                        <div class="input-group mb15">
                                            <input class="form-control input-lg" name="time" value="{{ $plan->time }}" required type="text" placeholder="Duration in Months">
                                            <span class="input-group-addon"><i class="fa fa-bars"></i></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-8  col-md-offset-2"><strong style="text-transform: uppercase;">Duration in Days :</strong></label>
                                    <div class="col-md-8 col-md-offset-2">
                                        <div class="input-group mb15">
                                            <input class="form-control input-lg" name="duration" value="{{ $plan->duration }}" required type="text" placeholder="Duration in Days">
                                            <span class="input-group-addon"><i class="fa fa-bars"></i></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-8  col-md-offset-2"><strong style="text-transform: uppercase;">URL Slug:</strong></label>
                                    <div class="col-md-8 col-md-offset-2">
                                        <div class="input-group mb15">
                                            <input class="form-control input-lg" name="slug" value="{{ $plan->slug }}" required type="text" placeholder="Duration in Days">
                                            <span class="input-group-addon"><i class="fa fa-bars"></i></span>
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label class="col-md-8  col-md-offset-2"><strong style="text-transform: uppercase;">Repeat Compound  :</strong></label>
                                    <div class="col-md-8 col-md-offset-2">
                                        <div class="input-group mb15">
                                            <select name="compound_id" id="" class="form-control input-lg" required>
                                                <option value="">Select One</option>
                                                @foreach($compound as $c)
                                                    @if($c->id == $plan->compound_id)
                                                    <option value="{{ $c->id }}" selected>{{ $c->name }}</option>
                                                    @else
                                                    <option value="{{ $c->id }}">{{ $c->name }}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                            <span class="input-group-addon"><i class="fa fa-sort-amount-asc"></i></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-8  col-md-offset-2"><strong style="text-transform: uppercase;">PLAN STATUS :</strong></label>
                                    <div class="col-md-8 col-md-offset-2">
                                        <input data-toggle="toggle" {{ $plan->status == 1 ? 'checked' : '' }} data-onstyle="success" data-size="large" data-offstyle="danger" data-on="Active" data-off="Deactive" data-width="100%" type="checkbox" name="status">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-8 col-md-offset-2">
                                        <button type="submit" class="btn blue btn-block btn-lg bold uppercase"><i class="fa fa-send"></i> Update PLAN</button>
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
