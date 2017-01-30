@extends('cms.master')

@section('content')
    <section class="content-header">

      <h1>
        Bestuur van {{$board->name}}
        <small>U past het bestuur van {{ $board->name }} aan </small>
      </h1>

      <ol class="breadcrumb">
        <li><a href="{{ URL::to("cms/") }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{ URL::to("cms/boards") }}"><i class="ion ion-person-stalker"></i> Besturen</a></li>
        <li><a href="#">{{ $board->name }}</a></li>
      </ol>

    </section>

    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Bestuur {{ $board->name }}</h3>

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
           {!! Form::model($board, ['method' => 'PUT', 'action' => ['BoardsController@update',  $board->id ]]) !!}
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody>
                    <!-- form textfield  -->
                    <tr>
                      <td>
                            {!! Form::label('name', '  In welk jaar is of was dit bestuur? ') !!}
                            {!! Form::text('name', null, ['class' => 'form-control']) !!}
                      <td>
                    </tr>

                    <tr>
                      <td>
                        <!-- form submit button -->

                            {!! Form::submit('Aanpassen', ['class' => 'btn btn-success']) !!}

                      </td>
                    </tr>

              </tbody>
              </table>
            </div>
                    {!! Form::close() !!}
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>

        @include('cms.pages.boards.board-members')


      </div>
    </section>

@stop
