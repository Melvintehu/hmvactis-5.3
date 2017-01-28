@extends('cms.master')



@section('content')
    <h1>Gebruiker aanpassen </h1>
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
                                                   {!! Form::model($data['profile'], ['method' => 'PUT', 'action' => ['UserController@update' , $data['profile']->id] ]) !!}

                                                        @include('cms.pages.users.partials.form', ['submitButtonText' => 'Aanpassen' ])

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

@stop


@section('scripts')


@stop