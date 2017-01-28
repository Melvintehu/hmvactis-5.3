@extends('cms.master')



@section('content')
    <h1>Bestuursleden Overzicht </h1>
    <hr>

    <div class="row">
        <div class="col-lg-12"> 
             @foreach($data['board'] as $board)
            <h1>{{ $board->name }}</h1>
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
                                                        <th>Bestuur</th>
                                                        <th>Naam</th>
                                                        <th>Beschrijving</th>
                                                        <th>Functie</th>
                                                        <th>E-mail</th>
                                                        <th>Studie</th>
                                                       
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                

                                                                                                    
                                                    @foreach($board->members as $boardMember)
                                                    <tr>

                                                        
                                                        <td>{{ $boardMember->id }}</td>
                                                        <td><b>{{ $boardMember->board->name }}</b></td>
                                                        <td>{{ $boardMember->name }}</td>
                                                        <td>{{ $boardMember->description }} </td>
                                                        <td>{{ $boardMember->role }}</td>
                                                        <td>{{ $boardMember->email }}</td>
                                                        <td>{{ $boardMember->study }}</td>
                                                        <td >
                                                            {!! Form::open(['method' => 'delete', 'action' => [                             'BoardMembersController@destroy',  $boardMember->id ]  ]) !!}
                                                                @include('cms.pages.partials.delete_form', ['submitButtonText' => '<i class="fa fa-times"> </i>' ])      
                                                            {!! Form::close() !!}  
                                                        </td>
                                                        <td >
                                                            {!! Form::open(['method' => 'GET', 'action' => [                             'BoardMembersController@show',  $boardMember->id ]  ]) !!}
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
