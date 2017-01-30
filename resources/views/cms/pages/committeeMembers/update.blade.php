@extends('cms.master')

@section('content')

    <h1>Commissielid aanpassen </h1>
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
                                                   {!! Form::model($committeeMember, ['method' => 'PUT', 'action' => [ 'CommitteeMembersController@update', $committeeMember->id ]]) !!}
                                                        @include('cms.pages.committeeMembers.partials.form', ['submitButtonText' => 'Aanpassen' ])
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
                    <image-uploader route="photo" model_id="{{$committeeMember->id}}" type="committee-member" >
                        <cropper route="cropper" aspectheight="1" aspectwidth="1" > </cropper>
                    </image-uploader>
                </div>

        </div>
    </div>
@stop


@section('scripts')
<script type="text/javascript" src="/js/vue.js"></script>
@stop