<!-- @extends('cms.master') -->



@section('content')
	<h1> Nieuws Overzicht </h1>
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
                                                        <th></th>
                                                        <th></th>
                                                        <th>#</th>
                                                        <th>Titel</th>
                                                        <th>Beschrijving</th>
                                                        <th>Publiceer datum</th>
                                                        <th>Datum toegevoegd</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($data['news'] as $newsmessage)
                                                    <tr>
                                                        <td >
                                                            {!! Form::open(['method' => 'delete', 'action' => [                             'NewsController@destroy',  $newsmessage->id ]  ]) !!}
                                                                @include('cms.pages.partials.delete_form', ['submitButtonText' => '<i class="fa fa-times"> </i>' ])
                                                            {!! Form::close() !!}
                                                        </td>
                                                        <td >
                                                            {!! Form::open(['method' => 'GET', 'action' => ['NewsController@edit',  $newsmessage->id ]  ]) !!}
                                                                @include('cms.pages.partials.update_form')
                                                            {!! Form::close() !!}
                                                        </td>
                                                        <td>{{ $newsmessage->id }}</td>
                                                        <td>{{ $newsmessage->title }}</td>
                                                        <td>{{ $newsmessage->description }}</td>
                                                        <td>{{ $newsmessage->publish_date }}</td>
                                                        <td>{{ $newsmessage->date_added }}</td>
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
