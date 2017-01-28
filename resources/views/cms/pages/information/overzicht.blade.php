@extends('cms.master')



@section('content')
    <h1>Contact informatie </h1>
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
                                                        <th>Email</th>
                                                        <th>Telefoonnummer</th>
                                                        <th>Adres</th>
                                                        <th>Plaats</th>
                                                        <th style='color:red'> X </th>

                                                    </tr>
                                                </thead>
                                                <tbody>

                                                 @include('cms.pages.partials.overzicht', array(
                                                     'formData'=> $data['information'], 
                                                     'numberOfFormElements' => 5,
                                                     'controllerAction' => 'InformationController@destroy'
                                                     )
                                                 )
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

