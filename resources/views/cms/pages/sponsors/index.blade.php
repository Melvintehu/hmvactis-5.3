@extends('cms.master')

@section('content')
<div id="app">
    <section class="content-header">
      <h1> Sponsoren<small> Hieronder ziet u een lijst met sponsoren.</small> </h1>

      <!--  breadcrumbs -->
      <ol class="breadcrumb">
        <li><a href="{{ URL::to("cms/") }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Sponsoren</a></li>
      </ol>

    </section>

    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Hoofdpartners</h3>

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
                    <th></th>
                    <th>
                    Naam
                    </th>
                    <th>
                      Beschrijving
                    </th>

                  </tr>

                  @foreach($hoofdsponsoren as $sponsor)
                    <tr>
                      <td>
                        @include('cms.core.partials.delete_button', [
                          'type' => 'sponsors',
                          'id' => $sponsor->id
                        ])
                      </td>
                      <td>
                        @include('cms.core.partials.edit_button', [
                          'type' => 'sponsors',
                          'id' => $sponsor->id
                        ])
                      </td>
                      <td>
                          {!! Form::open(['method' => 'DELETE', 'action' => ['MainPartnerController@destroy',  $sponsor->id ]  ]) !!}
                              <button style="display:inline-block;float:left;margin:3px;" class="btn btn-danger"> <i class="ion ion-minus-circled"> </i></button>
                          {!! Form::close() !!}
                      </td>
                      <td>
                        {{$sponsor->name}}
                      </td>
                      <td>{{$sponsor->description}}</td>

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
<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Overige sponsoren</h3>

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
                    <th></th>
                    <th>
                    Naam
                    </th>
                    <th>
                      Beschrijving
                    </th>

                  </tr>

                  @foreach($sponsoren as $sponsor)
                    <tr>
                      <td>
                        @include('cms.core.partials.delete_button', [
                          'type' => 'sponsors',
                          'id' => $sponsor->id
                        ])
                      </td>
                      <td>
                        @include('cms.core.partials.edit_button', [
                          'type' => 'sponsors',
                          'id' => $sponsor->id
                        ])
                      </td>
                      <td>
                          {!! Form::open(['method' => 'PUT', 'action' => ['MainPartnerController@update',  $sponsor->id ]  ]) !!}
                              <button style="float:left;margin:3px;display:inline-block;padding-left:15px;padding-right:15px;" class="btn btn-warning"> <i class="ion ion-key"> </i></button>
                          {!! Form::close() !!}

                      </td>
                      <td>
                        {{$sponsor->name}}
                      </td>
                      <td>{{$sponsor->description}}</td>

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

</div>
@stop
@section('scripts')
  <script type="text/javascript" src="/js/vue.js" ></script>
@stop