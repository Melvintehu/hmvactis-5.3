@extends('cms.master')



@section('content')
    <h1>Partner kortingen aanpassen </h1>
    <hr>

    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">

                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="table-responsive">
                                            <table class="table table-hover">

                                                <tbody>
                                                   {!! Form::model($sponsorDiscount, ['method' => 'PUT', 'action' =>[ 'SponsorDiscountsController@store', $sponsorDiscount->id] ]) !!}

                                                        @include('cms.pages.sponsorDiscounts.partials.form', ['submitButtonText' => 'Aanpassen', 'sponsors' => $sponsors ])

                                                    {!! Form::close() !!}
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


            <div class="row">
                <div id="app">
                    @if($photo != null)
                    <image-display
                        id="{{$photo->id}}"
                        model_id="{{$photo->model_id}}"
                        type="{{$photo->type}}"
                        filename="{{$photo->filename}}">
                    </image-display>
                    @endif
                    <image-uploader route="photo" model_id="{{$sponsorDiscount->id}}" type="sponsor-discount" >
                        <cropper route="cropper" aspectheight="9" aspectwidth="16" > </cropper>
                    </image-uploader>
                </div>

            </div> <!-- End row -->


        </div> <!--  outer column end -->

    </div> <!-- outer row end -->

@stop

@section('scripts')
<script type="text/javascript" src="/js/vue.js"></script>
@stop