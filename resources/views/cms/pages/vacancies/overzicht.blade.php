@extends('cms.master')



@section('content')
    <h1> Vacatures Overzicht </h1>
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
                                                        <th>Beschrijving</th>
                                                        <th>Details</th>
                                                        <th style='color:red'> X </th>

                                                    </tr>
                                                </thead>
                                                <tbody>
     
                                                    @foreach($data['vacancies'] as $vacancie)
                                                    <tr>
                                                        <td>{{ $vacancie->id }}</td>
                                                        <td>{{ $vacancie->title }}</td>
                                                        <td>{{ $vacancie->description }}</td>
                                                        <td>{{ $vacancie->details }}</td>
                                                        <td >
                                                            {!! Form::open(['method' => 'delete', 'action' => [ 'VacanciesController@destroy',  $vacancie->id ]  ]) !!}
                                                                @include('cms.pages.partials.delete_form', ['submitButtonText' => 'X' ])      
                                                            {!! Form::close() !!}  
                                                        </td>
                                                        <td >
                                                            {!! Form::open(['method' => 'GET', 'action' => [                                'VacanciesController@edit',  $vacancie->id ]  ]) !!}
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
