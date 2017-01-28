@extends('cms.master')



@section('content')
    <h1>Pagina's Overzicht </h1>
    <hr>

    <div class="row">
        <div class="col-lg-4 ">
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
                                                        <th style='color:red'> X </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($pages as $page)
                                                    <tr>
                                                        <td>{{ $page->id }}</td>
                                                        <td>{{ $page-> title }}</td>
                                                        <td >
                                                            {!! Form::open(['method' => 'delete', 'action' => [ 'PagesController@destroy',  $page->id ]  ]) !!}
                                                                @include('cms.pages.partials.delete_form', ['submitButtonText' => 'X' ])
                                                            {!! Form::close() !!}
                                                        </td>
                                                        <td >
                                                            {!! Form::open(['method' => 'GET', 'action' => [                             'PagesController@show',  $page->id ]  ]) !!}
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
