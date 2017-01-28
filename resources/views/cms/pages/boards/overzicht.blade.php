@extends('cms.master')



@section('content')
    <h1>Besturen Overzicht </h1>
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
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Name</th>
                                                        <th style='color:red'>X</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($data['boards'] as $board)
                                                    <tr>
                                                        <td>{{ $board->id }}</td>
                                                        <td><b>{{ $board->name }}</b></td>
                                                        <td >
                                                            {!! Form::open(['method' => 'delete', 'action' => [                             'BoardsController@destroy',  $board->id ]  ]) !!}
                                                                @include('cms.pages.partials.delete_form', ['submitButtonText' => '<i class="fa fa-times"> </i>' ])      
                                                            {!! Form::close() !!}  
                                                        </td>
                                                        <td >
                                                            {!! Form::open(['method' => 'GET', 'action' => [                             'BoardsController@show',  $board->id ]  ]) !!}
                                                                @include('cms.pages.partials.update_form')      
                                                            {!! Form::close() !!}  
                                                        </td>
                                                    </tr>
                                                    @endForeach
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
