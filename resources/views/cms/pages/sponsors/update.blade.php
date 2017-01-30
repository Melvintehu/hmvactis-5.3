@extends('cms.master')



@section('content')
    <h1>Partner Aanpassen</h1>
    <hr>

    <div class="row">
        <div class="col-lg-12">

            <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">

                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="table-responsive">
                                            <table class="table table-hover">

                                                <tbody>
                                                   {!! Form::model($sponsor, ['method' => 'PUT', 'action' => ['SponsorsController@update', $sponsor->id] ]) !!}
                                                        @include('cms.pages.sponsors.partials.form', ['submitButtonText' => 'Aanpassen' ])
                                                    {!! Form::close() !!}
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="app">
                        @if($photo != null)
                        <image-display
                            id="{{$photo->id}}"
                            model_id="{{$photo->model_id}}"
                            type="{{$photo->type}}"
                            filename="{{$photo->filename}}">
                        </image-display>
                        @endif
                        <image-uploader route="photo" model_id="{{$sponsor->id}}" type="sponsor" >
                            <cropper route="cropper" aspectheight="9" aspectwidth="16" > </cropper>
                        </image-uploader>
                    </div>
                </div> <!-- End row -->



            </div> <!-- End row -->
        </div>
    </div>
@stop

@section('scripts')
<script type="text/javascript" src="/js/vue.js"></script>
@stop