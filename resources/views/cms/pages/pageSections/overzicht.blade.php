@extends('cms.master')



@section('content')
    <h1>Pagina secties Overzicht </h1>
    <hr>

    <div class="row">
        <div class="col-lg-12">
            @foreach($data['pages'] as $page) 
            <h1> Pagina {{ $page->title }} </h1>
            <hr>
            <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                           
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        @if(!$page->sections->isEmpty())
                                        <div class="table-responsive">
                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Bevind zich op pagina</th>
                                                        <th>Naam</th>
                                                        <th>Titel</th>
                                                        <th>Beschrijving</th>
                                                        <th style='color:red'> X </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    
                                                        @foreach($page->sections as $pageSection)
                                                        <tr>
                                                            <td>{{ $pageSection->id }}</td>
                                                            <td><b>{{ $pageSection->page->title }}</b></td>
                                                            <td>{{ $pageSection->name }}</td>
                                                            <td>{{ $pageSection->title }}</td>
                                                            <td>{{ $pageSection->description }} </td>
                                                            <td >
                                                                {!! Form::open(['method' => 'delete', 'action' => [ 'PageSectionsController@destroy',  $pageSection->id ]  ]) !!}
                                                                    @include('cms.pages.partials.delete_form', ['submitButtonText' => 'X' ])      
                                                                {!! Form::close() !!}  
                                                            </td>
                                                            <td >
                                                            {!! Form::open(['method' => 'GET', 'action' => [                             'PageSectionsController@show',  $pageSection->id ]  ]) !!}
                                                                @include('cms.pages.partials.update_form')      
                                                            {!! Form::close() !!}  
                                                        </td>
                                                        </tr>
                                                        @endForeach
                                                   
                                                </tbody>
                                            </table>
                                        </div>
                                         @else
                                                        <tr>
                                                            <td>
                                                              <p> Er zijn nog geen secties toegevoegd aan deze pagina. Klik <a href="/cms/pageSections/create"> hier </a> om een sectie aan deze pagina toe te voegen. </p>
                                                              </td>
                                                        </tr>
                                                    @endif
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
