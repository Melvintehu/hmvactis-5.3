@extends('cms.master')



@section('content')
    <h1>Activiteiten Aanpassen </h1>
    <hr>

    <div class="row"> <!-- outer row start -->

        <div class="col-lg-12">  <!--  Outer column start- -->


            <div class="row">

                <div class="col-md-12">

                    <div class="panel panel-default">
                       
                        <div class="panel-body">

                            <div class="row">

                                <div class="col-md-12 col-sm-12 col-xs-12">

                                    <div class="table-responsive">

                                        <table class="table table-hover">
                                            
                                            <tbody>

                                               {!! Form::model($event, ['method' => 'PUT', 'action' => ['EventsController@update', $event->id ]]) !!}

                                                    @include('cms.pages.events.partials.form', ['submitButtonText' => 'Aanpassen' ])

                                                {!! Form::close() !!}

                                            </tbody>

                                        </table>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div> <!-- End row -->



            <div class="row">

                <div class="col-md-12">

                    <div class="panel panel-default">
                       
                        <div class="panel-body">

                            <div class="row">

                                <div class="col-md-12 col-sm-12 col-xs-12">

                                    <div class="table-responsive">

                                        <table class="table table-hover">
                                            
                                            <tbody>
                                               @foreach($event->photos as $photo)
                                                <td>

                                                    <div id='newsPhoto' class="col-lg-3">    <img  src="/{{ $photo->thumbnail_path }}"> </div>

                                                </td>
                                                @endforeach

                                            </tbody>

                                        </table>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div> <!-- End row -->


            
            <div class="row">

                <div class="col-md-12">

                    <h1>Foto beheren </h1>

                    <hr>

                    <div class="panel panel-default">
                       
                        <div  class="panel-body">

                            <div class="row">

                                <div class="col-md-12 col-sm-12 col-xs-12">

                                    <div class="table-responsive">

                                        <table class="table">
                                            
                                            <tbody>

                                                <tr>

                                                    <td>

                                                        <form  enctype="multipart/form-data" action='/cms/event/{{ $event->id }}/photos' method="POST" id="PhotoUpload" class="dropzone" >
                                                            {{ csrf_field() }}
                                                        </form>

                                                    </td>

                                                </tr>

                                            </tbody>

                                        </table>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div> <!-- End row -->


        </div> <!-- end outer column -->

    </div> <!-- end outer row -->
@stop
@section('scripts')

<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.js"></script>
<script >
Dropzone.options.PhotoUpload = {
  maxFilesize: 5,
  accept: function(file, done) {
    console.log("uploaded");
    done();
  },
  init: function() {
    this.on("addedfile", function() {
      if (this.files[1]!=null){
        this.removeFile(this.files[0]);
      }
    });
  }
};

</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue-resource/0.7.0/vue-resource.min.js"></script>
<script type="text/javascript" src="../../js/app.js"></script>

@stop