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
               {!! Form::model($gallery, ['method' => 'PUT', 'action' => ['BoardMembersController@update', $gallery->id] ]) !!}
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
                </tbody>
              </table>
              </div>
              {!! Form::close() !!}
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        <div class="col-xs-12">
          <div id="app">
            @if($photo == 'iets')
              <image-display
                  id="{{$photo->id}}"
                  model_id="{{$photo->model_id}}"
                  type="{{$photo->type}}"
                  filename="{{$photo->filename}}">
              </image-display>
            @endif
            <image-uploader route="photo/multi" model_id="{{$gallery->id}}" type="gallery" >
                <cropper route="cropper"  aspectwidth="16" aspectheight="9" > </cropper>
            </image-uploader>
          </div>
        </div>
        </div>



        </div>
    </section>

@stop


@section('scripts')
  <script type="text/javascript" src="/js/vue.js" ></script>
@stop