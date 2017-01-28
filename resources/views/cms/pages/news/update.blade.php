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




            <div class="row">

                <div class="col-md-12">

                    <div class="panel panel-default">

                        <div class="panel-body">

                            <div class="row">

                                <div class="col-md-12 col-sm-12 col-xs-12">

                                    <div class="table-responsive">

                                        <table class="table table-hover">

                                            <tbody>
                                               @foreach($news->photos as $photo)
                                                <td>

                                                    <div id='newsPhoto' class="col-lg-3">    <img  src="../../{{ $photo->thumbnail_path }}"> </div>

                                                </td>
                                                @endforeach

                                            </tbody>

                                        </table>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div> <!-- End row -->

            <image-cropper> </image-cropper>

            <div class="row">

                <div class="col-md-12">

                    <h1>Foto beheren </h1>

                    <hr>

                    <div class="panel panel-default">

                        <div  class="panel-body">

                            <div class="row">

                                <div class="col-md-12 col-sm-12 col-xs-12">

                                    <div class="table-responsive">

                                        <table class="table">

                                            <tbody>

                                                <tr>

                                                    <td>
<!--                                                         <form  enctype="multipart/form-data" action='/cms/news/{{ $news->id }}/photos' method="POST" id="PhotoUpload" class="dropzone" >
                                                            {{ csrf_field() }}
                                                        </form>
 -->
                                                    </td>

                                                </tr>

                                            </tbody>

                                        </table>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div> <!-- End row -->


        </div> <!--  outer column end -->

    </div> <!-- outer row end -->

@stop


@section('scripts')

<!-- <script type="text/javascript" src="../../js/app.js"></script> -->

@stop