@extends('cms.master')

@section('title')
    Teammember aanpassen
@stop

@section('content')
    <h1>Teammember aanpassen </h1>
    <hr>

    <div class="row">
        <div class="col-lg-12"> 
            
            <hr>
            <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                           
                            <div class="panel-body">
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        
                                        <div class="table-responsive">        
                                            <div>
                                                 {!! Form::model($data['teammember'],
                                                    array(
                                                        'method' => 'PUT',
                                                        'action' => ['TeamMembersController@update', $data['teammember']->id]
                                                        )
                                                    )
                                                !!}
                                                <thead>
                                                    <tr>    
                                                        <th>
                                                            {!! Form::label('first_name', ' Voornaam ') !!} 
                                                        </th>
                                                        <td>  
                                                            {!! Form::text('first_name', null, ['class' => 'form-control']); !!}
                                                        </td>
                                                    </tr>    
                                                    <tr>    
                                                        <th>
                                                            {!! Form::label('last_name', ' Achternaam ') !!} 
                                                        </th>
                                                        <td>  
                                                            {!! Form::text('last_name', null, ['class' => 'form-control']); !!}
                                                        </td>
                                                    </tr>     
                                                    <tr>    
                                                        <th>
                                                            {!! Form::label('description', ' Beschrijving ') !!} 
                                                        </th>
                                                        <td>  
                                                            {!! Form::textarea('description', null, ['class' => 'form-control']); !!}
                                                        </td>
                                                    </tr> 
                                                    <tr>    
                                                        <th>
                                                            {!! Form::label('role', ' Functie ') !!} 
                                                        </th>
                                                        <td>  
                                                            {!! Form::text('role', null, ['class' => 'form-control']); !!}
                                                        </td>
                                                    </tr> 
                                                </thead>    


                                               
                                                    
                                                    <div class='form-group'>
                                                        <input type='submit' class='btn btn-primary' value='aanpassen' />
                                                    </div>
                                                {!! Form::close() !!}
                                            </div>
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
