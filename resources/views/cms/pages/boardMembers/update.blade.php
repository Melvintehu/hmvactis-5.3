@extends('cms.master')



@section('content')
    <h1>Bestuursleden aanpassen </h1>
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

                                                   {!! Form::model($boardMember, ['id' => 'updateForm', 'method' => 'PUT', 'action' => ['BoardMembersController@update',  $boardMember->id ]]) !!}

                                                        @include('cms.pages.boardMembers.partials.form', ['submitButtonText' => 'Aanpassen', 'boards' => $boards ])

                                                        <!-- form submit button -->
                                                        <div class='form-group'>
                                                            <input type="submit" name="aanpassen" value="aanpassen">
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
                    <div id="app">
                        @if($photo != null)
                        <image-display
                            id="{{$photo->id}}"
                            model_id="{{$photo->model_id}}"
                            type="{{$photo->type}}"
                            filename="{{$photo->filename}}">
                        </image-display>
                        @endif
                        <image-uploader route="photo" model_id="{{$boardMember->id}}" type="board-member" >
                            <cropper route="cropper" aspectheight="1" aspectwidth="1" > </cropper>
                        </image-uploader>
                    </div>
                </div> <!-- End row -->

        </div> <!--  outer column end -->

    </div> <!-- outer row end -->

@stop


@section('scripts')
<script type="text/javascript" src="/js/vue.js"></script>
@stop