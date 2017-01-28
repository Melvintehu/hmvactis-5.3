@extends('cms.master')

@section('title')
    Afdeling
@stop

@section('content')
    <h1>Aanmeldingen overzicht </h1>
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
                                        <h2> {{ $data['candidates']->first()->choices }} </h2>
                                        <div class="table-responsive">        
                                            <table class="table table-hover">
                                                <tr> 
                                                {!! $data['candidates']->render() !!}
                                                </tr>
                                                <thead>
                                                    <tr>
                                                        <th>#<span class='ion-arrow-down-b table-head'></span></th>
                                                        <th>Voornaam</th>
                                                        <th>Achternaam</th>
                                                        <th>Telefoonnummer</th>
                                                        <th>Emailadres</th>
                                                        <th>Geboortedatum</th>
                                                        <th>Bericht</th>
                                                        <th>Aangemeld als</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($data['candidates'] as $candidate)
                                                        <tr>
                                                            <td>{{ $candidate->id }}</td>
                                                            <td>{{ $candidate->first_name }}</td>
                                                            <td>{{ $candidate->last_name }}</td>
                                                            <td>{{ $candidate->telephone_number }}</td>
                                                            <td>{{ $candidate->email_address }}</td>
                                                            <td>{{ $candidate->date_of_birth }}</td>
                                                            <td>{{ $candidate->message }}</td>
                                                            <td>{{ $candidate->choices }}</td>     
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
