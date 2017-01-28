@extends('cms.master')



@section('content')
    <h1>Activiteiten Overzicht </h1>
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
                                                        <th>Titel</th>
                                                        <th>Locatie</th>
                                                        <th>Datum</th>
                                                        <th>Beschrijving</th>
                                                       <!--  <th>Lustrum activiteit</th> -->
                                                        <th>Tijdstip</th>
                                                        <th style='color:red'> X </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($data['events'] as $event)
                                                    <tr>
                                                        <td>{{ $event->id }}</td>
                                                        <td>{{ $event->title }}</td>
                                                        <td>{{ $event->location }}</td>
                                                        <td>{{ $event->date }}</td>
                                                        <td>{{ $event->description }}</td>
                                                       <!--  <td>{{ $event->lustrum_event }}</td> -->
                                                        <td>{{ $event->time }}</td>
                                                        <td >
                                                            {!! Form::open(['method' => 'delete', 'action' => [                             'EventsController@destroy',  $event->id ]  ]) !!}
                                                                @include('cms.pages.partials.delete_form', ['submitButtonText' => '<i class="fa fa-times"> </i>' ])      
                                                            {!! Form::close() !!}  
                                                        </td>
                                                        <td >
                                                            {!! Form::open(['method' => 'GET', 'action' => [                             'EventsController@show',  $event->id ]  ]) !!}
                                                                @include('cms.pages.partials.update_form')      
                                                            {!! Form::close() !!}  
                                                        </td>
                                                        <td >
                                                            {!! Form::open(['method' => 'GET', 'action' => [                             'EventsController@displayDeelnemers',  $event->id ]  ]) !!}
                                                                <input type="submit" class="btn btn-primary" value="Deelnemers bekijken">
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
