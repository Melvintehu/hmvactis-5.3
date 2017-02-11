@extends('cms.master')

@section('content')
<div id="app">
    <section class="content-header">
      <h1> Example's <small>Example description</small> </h1>

      <!--  breadcrumbs -->
      <ol class="breadcrumb">
        <li><a href="{{ URL::to("cms/") }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Example</a></li>
      </ol>

    </section>

    <section class="content">
      <div class="row">
        <div class="col-xs-6">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Example</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                </div>
              </div>
            </div>

            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody>
                <tr>
                  <th></th>
                  <th>Pagina-naam</th>
                </tr>

                @foreach($pages as $page)
                  <tr>
                    <td>
                      @include('cms.core.partials.delete_button', [
                        'type' => 'page',
                        'id' => $page->id
                      ])
                    </td>
                    <td>
                      @include('cms.core.partials.edit_button', [
                        'type' => 'page',
                        'id' => $page->id
                      ])
                    </td>
                    <td> {{$page->name}} </td>
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