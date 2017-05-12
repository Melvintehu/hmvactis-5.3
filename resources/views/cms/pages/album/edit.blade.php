@extends('cms.master')

@section('content')
<div id="app">
    <section class="content-header">
      <h1> Album <small></small> </h1>

      <!--  breadcrumbs -->
      <ol class="breadcrumb">
        <li><a href="{{ URL::to("cms/") }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Album aanpassen</a></li>
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
              <form method="POST" action="/cms/album/{{$album->id}}" >
                {{csrf_field()}}
                {{ method_field('PUT') }}
                  <table class="table table-hover">
                    <tbody>
                        <tr>
                           <td>
                                <label>Titel</label>
                                <input type='text' class='form-control' value="{{ $album->title }}" name='titel'/>
                           </td>
                        </tr>
                        <tr>
                           <td>
                                <label>Beschrijving</label>
                                <textarea class='form-control' name='beschrijving'>{{ $album->body }}</textarea>
                           </td>

                        </tr>
                         <tr>
                           <td>
                                <label>Datum</label>
                                <div class="input-group date">
                                  <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                  </div>
                                  <input type='text' name='datum' value="{{ $album->date }}" class='form-control datepicker' />
                                </div>
                           </td>

                        </tr>

                        <tr>
                          <td>

                              <div class="form-group">
                                <button class="btn btn-success" type="submit" >Aanpassen</button>
                              </div>

                          </td>

                        </tr>

                    </tbody>
                  </table>
              </form>
            </div>
            <!-- /.box-body -->

              @foreach($photos as $photo)
                <div class="col-lg-3 thumb">
                  <a class="thumbnail" href="/cms/photo/album/{{$photo->id}}/edit">
                    <img src="/images/{{ $photo->type }}/{{ $photo->model_id }}/16x9/{{ $photo->filename }}">
                  </a>
                </div>
              @endforeach

              <div id="app">
                  <image-uploader route="photo" multi="true" model_id="{{$album->id}}" type="album" >
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