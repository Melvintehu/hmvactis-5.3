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
                                                    @include('cms.pages.news.partials.form', ['submitButtonText' => 'Aanpassen' ])
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