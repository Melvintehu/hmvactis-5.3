@extends('cms.master')

@section('content')
    <section class="content-header">

      <h1>
        Leden
        <small>Betalende leden van HMV Actis</small>
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
                <tbody><tr>
                  @include('cms.pages.members.partials.table', compact('users'))
              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        </div>
    </section>

@stop
