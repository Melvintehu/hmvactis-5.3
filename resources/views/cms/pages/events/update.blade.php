@extends('cms.master')



@section('content')
    <h1>Activiteiten Aanpassen </h1>
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

                                               {!! Form::model($event, ['method' => 'PUT', 'action' => ['EventsController@update', $event->id ]]) !!}

                                                <!-- form textfield  -->
                                                <div class='form-group'>
                                                    {!! Form::label('title', ' Naam ') !!}
                                                    {!! Form::text('title', null, ['class' => 'form-control']) !!}
                                                </div>

                                                <!-- form textfield  -->
                                                <div class='form-group'>
                                                    {!! Form::label('location', '  Locatie  ') !!}
                                                    {!! Form::text('location', null, ['class' => 'form-control']) !!}
                                                </div>

                                                <!-- form textfield  -->
                                                <div class='form-group'>
                                                    <label> Datum </label>
                                                    <div class="input-group date">
                                                      <div class="input-group-addon">
                                                        <i class="fa fa-calendar"></i>
                                                      </div>
                                                      <input type="date" class="form-control pull-right datepicker" value="<?php echo explode(' ', $event->date)[0]; ?>" name="date">
                                                    </div>
                                                </div>



                                                <div class="bootstrap-timepicker">
                                                    <div class="form-group">
                                                      <label>Start tijd</label>

                                                      <div class="input-group">

                                                        <div class="input-group-addon">
                                                          <i class="fa fa-clock-o"></i>
                                                        </div>
                                                        {!! Form::text('time', null, ['class' => 'form-control timepicker pull-right']) !!}
                                                      </div>
                                                      <!-- /.input group -->
                                                    </div>
                                                <!-- /.form group -->
                                                </div>


                                                <div class="bootstrap-timepicker">
                                                    <div class="form-group">
                                                      <label>Eind Tijd</label>

                                                      <div class="input-group">

                                                        <div class="input-group-addon">
                                                          <i class="fa fa-clock-o"></i>
                                                        </div>
                                                        {!! Form::text('end_time', null, ['class' => 'form-control timepicker pull-right']) !!}
                                                      </div>
                                                      <!-- /.input group -->
                                                    </div>
                                                <!-- /.form group -->
                                                </div>


                                                <!-- form textfield  -->
                                                <div class='form-group'>
                                                    {!! Form::label('description', '  Beschrijving  ') !!}
                                                    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
                                                </div>

                                                <!-- form textfield  -->
                                                <!-- <div class='form-group'>
                                                    {!! Form::label('lustrum_event', '  Is dit een activiteit voor het lustrum?  ') !!}
                                                    {!! Form::select('lustrum_event', array('ja' => 'Ja', 'nee' => 'Nee')) !!}
                                                </div> -->

                                                <!-- form textfield  -->
                                                <div class='form-group'>
                                                    {!! Form::label('subscription', '  Kan je je inschrijven voor deze activiteit ?  ') !!}
                                                    {!! Form::select('subscription', array('yes' => 'Ja', 'no' => 'nee')) !!}
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
                <image-uploader route="photo" model_id="{{$event->id}}" type="event" >
                    <cropper route="cropper"  aspectwidth="16" aspectheight="11" > </cropper>
                </image-uploader>
            </div>

        </div> <!-- end outer column -->

    </div> <!-- end outer row -->
@stop

@section('scripts')
<script type="text/javascript" src="/js/vue.js"></script>
@stop