@extends('cms.master')

@section('content')
    <h1>Pagina secties aanpassen </h1>
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
                                                   {!! Form::model($pageSection, ['method' => 'PUT', 'action' => ['PageSectionsController@update', $pageSection->id] ]) !!}

                                                        @include('cms.pages.pageSections.partials.form', ['submitButtonText' => 'Aanpassen', 'pages' => $pages ])

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
                        <image-uploader route="photo" model_id="{{$pageSection->id}}" type="section" >
                            <cropper route="cropper" aspectheight="3" aspectwidth="10" > </cropper>
                        </image-uploader>
                    </div>

                </div>

            </div> <!-- End row -->

        </div> <!--  outer column end -->

    </div> <!-- outer row end -->

@stop


@section('scripts')
<script type="text/javascript" src="/js/vue.js"></script>
@stop
