@extends('cms.master')

@section('content')
    <section class="content-header">

      <h1>
        Fotoalbums
        <small> Hier maakt u nieuwe fotoalbums aan.</small>
      </h1>

      <ol class="breadcrumb">
        <li><a href="{{ URL::to("cms/") }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Fotoalbums beheren</a></li>
      </ol>

    </section>

    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Fotoalbums</h3>

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
               {!! Form::open(['method' => 'POST', 'action' => 'GalleriesController@store' ]) !!}
              <table class="table ">
                <tbody>
                  <tr>
                    <td>
                      {!! Form::label('name', '  Geef hier een naam op voor het fotoalbum  ') !!}
                      {!! Form::text('name', null, ['class' => 'form-control']) !!}
                    </td>
                  </tr>
                  <tr>
                    <td>
                      {!! Form::label('description', '  Beschrijf hier het fotoalbum  ') !!}
                      {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
                    </td>
                  </tr>
                  <tr>
                    <td>
                    <button type="submit" class="btn btn-success"> Toevoegen</button>
                    </td>
                  </tr>
                </tbody>
              </table>
              </div>
              {!! Form::close() !!}
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        </div>
    </section>

@stop
