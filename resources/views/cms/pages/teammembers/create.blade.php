@extends('cms.master')

@section('title')
    Teammembers toevoegen    
@stop

@section('content')
    <h1>Teammembers toevoegen </h1>
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
                                            {!! Form::open(['method' => 'POST', 'action' => 'TeamMembersController@store' ]) !!}
                                                
                                                <table class="table table-hover">
                                                    <tbody>
                                                    
                                                        <tr>
                                                           <td>
                                                                {!! Form::label('first_name', ' Voornaam ') !!} 
                                                                {!! Form::text('first_name', null, ['class' => 'form-control']); !!} 
                                                           </td>
                                                        </tr>
                                                        <tr>
                                                           <td>
                                                                {!! Form::label('last_name', ' Achternaam ') !!} 
                                                                {!! Form::text('last_name', null, ['class' => 'form-control']); !!} 
                                                           </td>

                                                        </tr>
                                                        <tr>
                                                           <td> 
                                                                {!! Form::label('description', ' Beschrijving ') !!} 
                                                                {!! Form::textarea('description', null, ['class' => 'form-control']); !!} 
                                                           </td>

                                                        </tr>
                                                         <tr>
                                                           <td> 
                                                                {!! Form::label('role', ' Functie ') !!} 
                                                                {!! Form::text('role', null, ['class' => 'form-control']); !!}
                                                           </td>

                                                        </tr>
                                                        
                                                        
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <input type="submit" value="opslaan" class="btn btn-primary" name="opslaan">   
                                                            </td>
                                                        </tr> 

                                                    </tbody>
                                                </table>
                                            {!! Form::close() !!}
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
