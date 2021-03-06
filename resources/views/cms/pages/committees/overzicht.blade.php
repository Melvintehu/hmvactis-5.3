@extends('cms.master')



@section('content')
    <h1> Commissies Overzicht </h1>
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
                                                        <th>Naam</th>
                                                        <th>Beschrijving</th>
                                                        <th>email</th>
                                                        <th style='color:red'> X </th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                                                                    
                                                    @foreach($data['committees'] as $committee)
                                                    <tr>
                                                        <td>{{ $committee->id }}</td>
                                                        <td>{{ $committee->name }}</td>
                                                        <td>{{ $committee->description }}</td>
                                                        <td>{{ $committee->email }}</td>
                                                        <td >
                                                            {!! Form::open(['method' => 'delete', 'action' => [                             'CommitteesController@destroy',  $committee->id ]  ]) !!}
                                                                @include('cms.pages.partials.delete_form', ['submitButtonText' => '<i class="fa fa-times"> </i>' ])      
                                                            {!! Form::close() !!}  
                                                        </td>
                                                        <td >
                                                            {!! Form::open(['method' => 'GET', 'action' => [                             'CommitteesController@show',  $committee->id ]  ]) !!}
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
