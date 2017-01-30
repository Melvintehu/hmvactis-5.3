@extends('cms.master')

@section('content')
    <section class="content-header">

      <h1>
        Sectie's
        <small>Beheer de secties van een pagina</small>
      </h1>

      <ol class="breadcrumb">
        <li><a href="{{ URL::to("cms/") }}"><i class="fa fa-dashboard"></i> Home </a></li>
        <li><a href="#">Secties beheren</a></li>
      </ol>

    </section>

    <section class="content">
      <div class="row">

        @foreach($pages as $page)
        @if(!$page->sections->isEmpty())
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Pagina <strong>{{ $page->title }} </strong></h3>

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
            <div class="box-body no-padding">
              <table class="table table-hover">
                <tbody>

                <tr>
                  <th></th>
                  <th></th>
                  <th> # </th>
                  <th> Titel </th>
                  <th> Body</th>
                </tr>

                @foreach($page->sections as $section)
                <tr>
                    <td style="max-width: 45px;">
                       {!! Form::open(['method' => 'GET', 'action' => ['PageSectionsController@edit', $section->id] ]) !!}
                      @include('cms.pages.partials.update_form')
                      {!! Form::close() !!}
                    </td>
                    <!-- Verwijderen form -->
                    <td style="max-width: 50px;">
                         {!! Form::open(['method' => 'DELETE','action' => ['PageSectionsController@destroy', $section->id]]) !!}
                          @include('cms.pages.partials.delete_form', ['submitButtonText' => 'X' ])
                        {!! Form::close() !!}
                    </td>
                    <td >{{ $section->id }}</td>
                    <td >{{ $section->title }}</td>
                    <td >{{ $section->description }}</td>

                </tr>
                @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        @endif
        @endforeach

      </div>
    </section>

@stop
