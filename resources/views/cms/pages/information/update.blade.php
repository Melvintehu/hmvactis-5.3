@extends('cms.master')



@section('content')
    <h1>Informatie aanpassen </h1>
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
                                                   {!! Form::open(['method' => 'POST', 'action' => 'PagesController@store' ]) !!}

                                                        @include('cms.pages.pages.partials.form', ['submitButtonText' => 'Toevoegen' ])

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
        </div>
    </div>
@stop
