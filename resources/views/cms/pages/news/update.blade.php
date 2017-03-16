@extends('cms.master')

@section('content')

    <h1>Nieuwsberichten Aanpassen </h1>
    <hr>
    <div class="row"> <!-- outer row start -->
        <div class="col-lg-12">  <!--  Outer column start- -->
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <tbody>
                                               {!! Form::model($news, ['method' => 'PUT', 'action' => ['NewsController@update', $news->id ] ]) !!}
                                                    {{ csrf_field() }}
                                                    <!-- form textfield  -->


                                                    <div class='form-group'>
                                                        {!! Form::label('title', '   Titel  ') !!}
                                                        {!! Form::text('title', null, ['class' => 'form-control']) !!}
                                                    </div>


                                                    <!-- form textfield  -->
                                                    <div class='form-group'>
                                                        <label> Wanneer wil je dat het nieuwsbericht op de website komt? </label>
                                                        <div class="input-group date">
                                                          <div class="input-group-addon">
                                                            <i class="fa fa-calendar"></i>
                                                          </div>
                                                          <input type="text" class="form-control pull-right datepicker" value="<?php echo explode(' ', $news->publish_date)[0]; ?>" name="publish_date">
                                                        </div>
                                                    </div>


                                                    <!-- form textfield  -->
                                                    <div class='form-group'>
                                                        <label> Van welke datum is het nieuwsbericht? </label>
                                                        <div class="input-group date">
                                                          <div class="input-group-addon">
                                                            <i class="fa fa-calendar"></i>
                                                          </div>
                                                          <input type="text" class="form-control pull-right datepicker" value="<?php echo explode(' ', $news->date_added)[0]; ?>" name="date_added">
                                                        </div>
                                                    </div>

                                                    <!-- form textfield  -->
                                                    <div class='form-group'>
                                                        {!! Form::label('description', '  Beschrijving  ') !!}
                                                        {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
                                                    </div>


                                                    <!-- form submit button -->
                                                    <div class='form-group'>
                                                        {!! Form::submit('aanpassen', ['class' => 'btn btn-success']) !!}
                                                    </div>
                                                {!! Form::close() !!}
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- End row -->
            <div id="app">
                @if($photo != null)
                <image-display
                    id="{{$photo->id}}"
                    model_id="{{$photo->model_id}}"
                    type="{{$photo->type}}"
                    filename="{{$photo->filename}}">
                </image-display>
                @endif
                <image-uploader route="photo" model_id="{{$news->id}}" type="news" >
                    <cropper route="cropper" aspectheight="9" aspectwidth="16" > </cropper>
                </image-uploader>
            </div>
        </div> <!--  outer column end -->
    </div> <!-- outer row end -->
@stop

@section('scripts')
<script type="text/javascript" src="/js/vue.js"></script>
@stop