@extends('cms.master')

@section('content')
    <section class="content-header">

      <h1>
        Leden
        <small>U bekijkt op dit moment: <strong> {{ $user->name }} </strong> </small>
      </h1>

      <ol class="breadcrumb">
        <li><a href="{{ URL::to("cms/") }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Betaalde leden</a></li>
      </ol>

    </section>

    <section class="content">
      <div class="row">

        <div class="col-xs-12">
          {!! Form::open(['method' => 'GET', 'action' => ['PDFController@generate',  'leden' ]]) !!}
            <button target="_blank" style="float:right;" class="btn bg-orange btn-flat"> PDF Genereren </button>
            <div style="clear:both;"></div>
          {!! Form::close() !!}
        </div>

      </div>

        <div class="row">
            <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Aanmeldingen</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <!-- <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div> -->
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody>
                  <tr>
                    <th>Naam</th>
                    <!-- <th>Adres </th> -->
                    <th>Email</th>
                    <th>Studentnummer</th>
                    <th>Iban</th>
                    <th>T.N.V.</th>
                    <th>Heeft admin rechten</th>
                  </tr>

                  <tr>
                    <td> {{ $user->name }} </td>
                    <!-- <td> {{ $user->address }}  </td> -->
                    <td> {{ $user->profile->email_address }} </td>
                    <td> {{ $user->profile->student_number }} </td>
                    <td> {{ $user->profile->iban }} </td>
                    <td> {{ $user->profile->tnv }}</td>
                    <td> {{ $user->admin_rights }} </td>

                    <!-- buttons for showing the member -->
                  </tr>


              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        </div>
    </section>

@stop
