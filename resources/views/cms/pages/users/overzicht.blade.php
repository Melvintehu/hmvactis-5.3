@extends('cms.master')

@section('content')
    <section class="content-header">
      <h1>
      Leden- en accountsoverzicht
        <small>Bekijk hier alle leden van HMV Actis</small>
      </h1>

      <ol class="breadcrumb">
        <li><a href="{{ URL::to("cms/") }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Leden overzicht</a></li>
      </ol>

    </section>
    <div class="row">
        <div class="col-lg-12">
        <section class="content-header">
            <h2>Aanmeldingen</h2>


            {!! Form::open(['method' => 'GET', 'action' => ['PDFController@generate',  'aanmeldingen' ]]) !!}
                <button target="_blank" style="float:right;" class="btn bg-orange btn-flat"> PDF Genereren </button>
                <div style="clear:both;"></div>
            {!! Form::close() !!}
            <hr>

        </section>
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
                                                        <th> Verwerken </th>
                                                        <th>PDF</th>
                                                        <th> Aanpassen </th>
                                                        <th>#</th>
                                                        <th>Naam</th>
                                                        <th>Adres</th>
                                                        <th>Telefoonnummer</th>
                                                        <th>Emailadres</th>
                                                        <th>Geboortedatum</th>
                                                        <th>Studie</th>
                                                        <th>Studiejaar</th>
                                                        <th>Studentnumber</th>
                                                        <th>IBAN</th>
                                                        <th>Functie bekleden</th>
                                                        <th style='color:red'> X </th>
                                                    </tr>
                                                </thead>
                                                <tbody>


                                                    @foreach($data['users'] as $user)
                                                     @if($user->profile != null && $user->profile->processed == 0)
                                                    <tr>

                                                        <td >
                                                            {!! Form::open(['method' => 'GET', 'action' => [                             'ProfilesController@processUser',  $user->id ]  ]) !!}
                                                                <button class="btn btn-primary"> Verwerk </button>
                                                            {!! Form::close() !!}
                                                        </td>

                                                        <td>
                                                            {!! Form::open(['method' => 'GET', 'action' => ['PDFController@generate',  'user/' . $user->id ]]) !!}
                                                                <button class="btn btn-primary"> PDF</button>
                                                            {!! Form::close() !!}
                                                        </td>


                                                        <td >
                                                            {!! Form::open(['method' => 'GET', 'action' => [                             'UserController@edit',  $user->id ]  ]) !!}
                                                                @include('cms.pages.partials.update_form')
                                                            {!! Form::close() !!}
                                                        </td>


                                                        <td>{{ $user->id }}</td>

                                                        <td><b>{{ $user->profile['name'] }}</b></td>

                                                        <td> {{ $user->profile['street']}} {{ $user->profile['house_number']}} {{ $user->profile['place']}} </td>

                                                        <td> {{ $user->profile['phone_number']}} </td>

                                                        <td> {{ $user->profile['email_address']}} </td>

                                                        <td> {{ $user->profile['birthdate']}} </td>

                                                        <td> {{ $user->profile['current_study']}} </td>

                                                        <td> {{ $user->profile['study_year']}} </td>

                                                        <td> {{ $user->profile['student_number']}} </td>

                                                        <td> {{ $user->profile['iban']}} </td>

                                                        <td>
                                                            @if($user->profile->subscribed == 1)
                                                                Ja
                                                            @else
                                                                Nee
                                                            @endif

                                                        </td>

                                                        <td >
                                                            {!! Form::open(['method' => 'delete', 'action' => [                             'ProfilesController@destroy',  $user->profile->id ]  ]) !!}
                                                                @include('cms.pages.partials.delete_form', ['submitButtonText' => 'X' ])
                                                            {!! Form::close() !!}
                                                        </td>

                                                    </tr>
                                                    @endif
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

          <h2>Verwerkte leden </h2>
           {!! Form::open(['method' => 'GET', 'action' => ['PDFController@generate',  'leden' ]]) !!}
                <button class="btn btn-primary"> PDF Genereren </button>
            {!! Form::close() !!}
            <hr>

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
                                                        <th> Aanpassen </th>
                                                        <th>PDF</th>
                                                        <th>#</th>
                                                        <th>Naam</th>
                                                        <th>Adres</th>
                                                        <th>Telefoonnummer</th>
                                                        <th>Emailadres</th>
                                                        <th>Geboortedatum</th>
                                                        <th>Studie</th>
                                                        <th>Studiejaar</th>
                                                        <th>Studentnumber</th>
                                                        <th>IBAN</th>
                                                        <th style='color:red'> X </th>
                                                    </tr>
                                                </thead>
                                                <tbody>


                                                    @foreach($data['users'] as $user)
                                                     @if($user->profile != null && $user->profile->processed == 1)
                                                    <tr>




                                                        <td >
                                                            {!! Form::open(['method' => 'GET', 'action' => [                             'UserController@edit',  $user->id ]  ]) !!}
                                                                @include('cms.pages.partials.update_form')
                                                            {!! Form::close() !!}
                                                        </td>

                                                        <td>
                                                            {!! Form::open(['method' => 'GET', 'action' => ['PDFController@generate',  'user/' . $user->id ]]) !!}
                                                                <button class="btn btn-primary"> PDF</button>
                                                            {!! Form::close() !!}
                                                        </td>


                                                        <td>{{ $user->id }}</td>

                                                        <td><b>{{ $user->name }}</b></td>

                                                        <td> {{ $user->profile['street']}} {{ $user->profile['house_number']}} {{ $user->profile['place']}} </td>

                                                        <td> {{ $user->profile['phone_number']}} </td>

                                                        <td> {{ $user->profile['email_address']}} </td>

                                                        <td> {{ $user->profile['birthdate']}} </td>

                                                        <td> {{ $user->profile['current_study']}} </td>

                                                        <td> {{ $user->profile['study_year']}} </td>

                                                        <td> {{ $user->profile['student_number']}} </td>

                                                        <td> {{ $user->profile['iban']}} </td>
                                                        <td >
                                                            {!! Form::open(['method' => 'delete', 'action' => [                             'ProfilesController@destroy',  $user->profile->id ]  ]) !!}
                                                                @include('cms.pages.partials.delete_form', ['submitButtonText' => 'X' ])
                                                            {!! Form::close() !!}
                                                        </td>

                                                    </tr>
                                                    @endif
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


          <h2>Niet-leden</h2>
           {!! Form::open(['method' => 'GET', 'action' => ['PDFController@generate',  'niet-leden' ]]) !!}
                <button class="btn btn-primary"> PDF Genereren </button>
            {!! Form::close() !!}
            <hr>

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
                                                        <th>PDF</th>
                                                        <th>#</th>
                                                        <th>Naam</th>
                                                        <th>Emailadres</th>
                                                        <th>aangemeld op</th>
                                                        <th style='color:red'> X </th>
                                                    </tr>
                                                </thead>
                                                <tbody>


                                                    @foreach($data['users'] as $user)
                                                     @if($user->profile == null)
                                                    <tr>

                                                         <td>
                                                            {!! Form::open(['method' => 'GET', 'action' => ['PDFController@generate',  'user/' . $user->id ]]) !!}
                                                                <button class="btn btn-primary"> PDF</button>
                                                            {!! Form::close() !!}
                                                        </td>

                                                        <td>{{ $user->id }}</td>

                                                        <td><b>{{ $user->name }}</b></td>

                                                        <td>{{ $user->email }}</td>

                                                        <td>{{ $user->created_at }}</td>

                                                        <td >
                                                            {!! Form::open(['method' => 'delete', 'action' => [                             'UserController@destroy',  $user->id ]  ]) !!}
                                                                @include('cms.pages.partials.delete_form', ['submitButtonText' => 'X' ])
                                                            {!! Form::close() !!}
                                                        </td>

                                                    </tr>
                                                    @endif
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
