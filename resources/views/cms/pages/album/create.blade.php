@extends('cms.master')

@section('content')
<div id="app">
    <section class="content-header">
      <h1> Album <small></small> </h1>

      <!--  breadcrumbs -->
      <ol class="breadcrumb">
        <li><a href="{{ URL::to("cms/") }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Album toevoegen</a></li>
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
              <h3 class="box-title">Toevoegen</h3>

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
              <form method="POST" action="{{ URL::to('cms/album') }}" >
                {{csrf_field()}}
                  <table class="table table-responsive">
                    <tbody>
                      <tr>
                           <td>
                                <label>Titel</label>
                                <input type='text' class='form-control' name='titel'/>
                           </td>
                        </tr>
                        <tr>
                           <td>
                                <label>Beschrijving</label>
                                <textarea class='form-control' name='beschrijving'></textarea>
                           </td>
                        </tr>
                        <tr>
                           <td>
                              <label>Datum</label>
                              <div class="input-group date">
                                <div class="input-group-addon">
                                  <i class="fa fa-calendar"></i>
                                </div>
                                <input type='text' name='datum' class='form-control datepicker' />
                              </div>
                           </td>
                        </tr>

                        <tr>
                          <td>

                              <div class="form-group">
                                <button class="btn btn-success" type="submit" >Toevoegen</button>
                              </div>

                          </td>

                        </tr>

                    </tbody>
                  </table>
                </form>
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