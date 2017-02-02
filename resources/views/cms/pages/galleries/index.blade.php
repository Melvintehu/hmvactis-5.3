@extends('cms.master')

@section('content')
    <section class="content-header">

      <h1>
        Fotoalbums
        <small>Beheer fotoalbums</small>
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
              <table class="table table-hover">
                <tbody>
                  <tr>
                    <th></th>
                    <th></th>
                    <th>#</th>
                    <th>Titel</th>
                    <th>Beschrijving</th>
                  </tr>
                @foreach($galleries as $gallery)
                  <tr>
                    <td style="max-width: 20px;">
                        {!! Form::open(['method' => 'delete', 'action' => [ 'GalleriesController@destroy',  $gallery->id ]  ]) !!}
                            @include('cms.pages.partials.delete_form', ['submitButtonText' => 'X' ])
                        {!! Form::close() !!}
                    </td>
                    <td style="max-width: 25px;">
                        {!! Form::open(['method' => 'GET', 'action' => ['GalleriesController@edit',  $gallery->id ]  ]) !!}
                            @include('cms.pages.partials.update_form')
                        {!! Form::close() !!}
                    </td>

                    <td>{{ $gallery->id }}</td>
                    <td>{{ $gallery->name }}</td>
                    <td>{{ $gallery->description }}</td>
                  </tr>
                @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        </div>
    </section>

@stop
