@extends('cms.master')



@section('content')
    <h1>Partner kortingen Overzicht </h1>
    <hr>

    <div class="row">
        <div class="col-lg-12">
            @foreach($data['sponsors'] as $sponsor)
            <h1> {{ $sponsor->name }} </h1> 
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
                                                        <th>Korting van sponsor</th>
                                                        <th>Titel</th>
                                                        <th>Beschrijving</th>
                                                        <th style='color:red'> X </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                
                                                    @foreach($sponsor->discounts as $sponsorDiscount)
                                                    <tr>
                                                        <td>{{ $sponsorDiscount->id }}</td>
                                                        <td>{{ $sponsorDiscount->sponsor->name }}</td>
                                                        <td>{{ $sponsorDiscount->title }}</td>
                                                        <td>{{ $sponsorDiscount->description }}</td>
                                                        <td >
                                                            {!! Form::open(['method' => 'delete', 'action' => [ 'SponsorDiscountsController@destroy',  $sponsorDiscount->id ]  ]) !!}
                                                                @include('cms.pages.partials.delete_form', ['submitButtonText' => 'X' ])      
                                                            {!! Form::close() !!}  
                                                        </td>
                                                        <td >
                                                            {!! Form::open(['method' => 'GET', 'action' => [                             'SponsorDiscountsController@show',  $sponsorDiscount->id ]  ]) !!}
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
