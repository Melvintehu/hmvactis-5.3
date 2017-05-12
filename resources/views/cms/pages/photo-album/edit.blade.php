@extends('cms.master')

@section('content')
<div id="app">
    <section class="content-header">
      <h1> Foto beheren <small></small> </h1>

      <!--  breadcrumbs -->
      <ol class="breadcrumb">
        <li><a href="{{ URL::to("cms/") }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Foto's</a></li>
      </ol>

    </section>

    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          @if (count($errors) > 0)
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
          @endif
        </div>
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Aanpassen</h3>

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
              <form method="POST" action="/cms/photo/album" >
                {{csrf_field()}}
                {{ method_field('PUT') }}
                  <table class="table table-hover">
                    <tbody>
                    </tbody>
                </table>
            </div>
            <!-- /.box-body -->
            <div id="app">
                @if($photo != null)
                  <image-display
                      id="{{$photo->id}}"
                      model_id="{{$photo->model_id}}"
                      type="{{$photo->type}}"
                      filename="{{$photo->filename}}">
                  </image-display>
                @endif

                <image-uploader route="photo"  photo_id="{{ $photo->id }}" multi="true" model_id="{{$photo->model_id}}" type="album" >
                    <cropper route="cropper" multi="true" aspectheight="9" aspectwidth="16" > </cropper>
                    <cropper route="cropper" multi="true" aspectheight="1" aspectwidth="1" > </cropper>
                    <cropper route="cropper" multi="true" aspectheight="11" aspectwidth="16" > </cropper>
                </image-uploader>
            </div>

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