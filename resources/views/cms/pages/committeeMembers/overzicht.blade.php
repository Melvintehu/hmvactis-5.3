@extends('cms.master')



@section('content')
    <h1> Commissieleden Overzicht </h1>
    <hr>

    <div class="row">
        <div class="col-lg-12"> 
            @foreach($data['committees'] as $committee)
            <h1> {{ $committee->name }} </h1>
            <hr>
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
                                                        <th>Commissie</th>
                                                        <th>Naam</th>
                                                        <th>Functie</th>
                                                        <th>Email</th>
                                                        <th>Studie</th>
                                                        <th style='color:red'> X </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($committee->members as $committeeMember)
                                                    <tr>
                                                        <td>{{ $committeeMember->id }}</td>
                                                        <td><b>{{ $committeeMember->committee->name }}</b></td>
                                                        <td>{{ $committeeMember->name }}</td>
                                                        <td>{{ $committeeMember->role }}</td>
                                                        <td>{{ $committeeMember->email }}</td>
                                                        <td>{{ $committeeMember->study }}</td>
                                                        <td >
                                                            {!! Form::open(['method' => 'delete', 'action' => [                             'CommitteeMembersController@destroy',  $committeeMember->id ]  ]) !!}
                                                                @include('cms.pages.partials.delete_form', ['submitButtonText' => 'X' ])      
                                                            {!! Form::close() !!}  
                                                        </td>
                                                        <td >
                                                            {!! Form::open(['method' => 'GET', 'action' => [                             'CommitteeMembersController@show',  $committeeMember->id ]  ]) !!}
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
                @endForeach
        </div>
    </div>
@stop
