@extends('cms.master')

@section('title')
    Jongeren Overzicht
@stop

@section('content')
    <h1> Jongeren overzicht </h1>
    <hr>

    <div class="row">
        <div class="col-lg-12"> 
            
            <hr>
            <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                           
                            <div class="panel-body">
                                
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="table-responsive">        
                                            <table class="table table-hover">
                                                <tr> 
                                                {!! $data['youth']->render() !!}
                                                </tr>
                                                <thead>
                                                    <tr>
                                                        <th>#<span class='ion-arrow-down-b table-head'></span></th>
                                                        <th>Voornaam</th>
                                                        <th>Achternaam</th>
                                                        <th>Beschrijving</th>
                                                        <th>Geboortedatum</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($data['youth'] as $object)
                                                        <tr>
                                                            <td>{{ $object->id }}</td>
                                                            <td>{{ $object->first_name }}</td>
                                                            <td>{{ $object->last_name }}</td>
                                                            <td>{{ $object->description }}</td>
                                                            <td>{{ $object->date_of_birth }}</td> 
                                                            
                                                            <!-- Aanpassen form -->
                                                            <td>
                                                                 {!! Form::open(
                                                                    array(
                                                                        'method' => 'GET',
                                                                        'action' => ['YouthController@edit', $object->id]
                                                                        )
                                                                    )
                                                                !!}

                                                                <input type='submit' class='btn btn-primary' value='aanpassen' />
                                                                {!! Form::close() !!}
                                                            </td>

                                                            <!-- Verwijderen form -->
                                                            <td>
                                                                 {!! Form::open(
                                                                    array(
                                                                        'method' => 'DELETE',
                                                                        'action' => ['YouthController@destroy', $object->id]
                                                                        )
                                                                    )
                                                                !!}

                                                                <input type='submit' class='btn btn-danger' value='verwijderen' />
                                                                {!! Form::close() !!}
                                                            </td>


                                                        </tr>
                                                    @endforeach
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
