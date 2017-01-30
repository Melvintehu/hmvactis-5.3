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

                                                    @include('cms.pages.events.partials.form', ['submitButtonText' => 'Aanpassen' ])

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