@extends('cms.master')

@section('content')
    <section class="content-header">

      <h1>
        Pagina's
        <small>Beheer de pagina namen</small>
      </h1>

      <ol class="breadcrumb">
        <li><a href="{{ URL::to("cms/") }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Pagina's beheren</a></li>
      </ol>

    </section>

    <section class="content">
      <div class="row">
        <div class="col-xs-4">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Leden</h3>

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
                  </tr>
                  @foreach($pages as $page)
                  <tr>
                    <td >
                        {!! Form::open(['method' => 'delete', 'action' => [ 'PagesController@destroy',  $page->id ]  ]) !!}
                            @include('cms.pages.partials.delete_form', ['submitButtonText' => 'X' ])
                        {!! Form::close() !!}
                    </td>
                    <td>
                          {!! Form::open(['method' => 'GET', 'action' => [                             'PagesController@show',  $page->id ]  ]) !!}
                              @include('cms.pages.partials.update_form')
                          {!! Form::close() !!}
                      </td>

                      <td>{{ $page->id }}</td>
                      <td>{{ $page-> title }}</td>
                  </tr>
                  @endForeach

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
