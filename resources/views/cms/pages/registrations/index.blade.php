@extends('cms.master')

@section('content')
    <section class="content-header">

      <h1>
        Aanmeldingen
        <small>Zijn gebruikers die lid willen worden.</small>
      </h1>

      <ol class="breadcrumb">
        <li><a href="{{ URL::to("cms/") }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Aanmeldingen</a></li>
      </ol>

    </section>

    <section class="content">
      <div class="row">

        <div class="col-xs-12">
          {!! Form::open(['method' => 'GET', 'action' => ['PDFController@generate',  'aanmeldingen' ]]) !!}
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
                </div>
              </div>
            </div>


            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody><tr>

                  @include('cms.pages.registrations.partials.table', compact('users'))

              </tbody></table>
            </div>

          </div>

        </div>
      </div>
    </section>

@stop
