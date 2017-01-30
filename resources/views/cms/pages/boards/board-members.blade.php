<div class="col-xs-12">
  <div class="box">
    <div class="box-header">
      <h3 class="box-title">Bestuur {{ $board->name }}</h3>

      <div class="box-tools">
        <div class="input-group input-group-sm" style="width: 150px;">
          <!-- <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

          <div class="input-group-btn">
            <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
          </div> -->
        </div>
      </div>
    </div>


    <div class="box-body table-responsive no-padding">
      <table class="table table-hover">
        <thead>
          <tr>
          <th> </th>
              <th>#</th>
              <th>Bestuur</th>
              <th>Naam</th>
              <th>Beschrijving</th>
              <th>Functie</th>
              <th>E-mail</th>
              <th>Studie</th>

          </tr>
      </thead>
      <tbody>



          @foreach($board->members as $boardMember)
          <tr>
              <td style="min-width:70px;">
                  {!! Form::open(['method' => 'delete', 'action' => [                             'BoardMembersController@destroy',  $boardMember->id ]  ]) !!}
                      @include('cms.pages.partials.delete_form')
                  {!! Form::close() !!}

                  {!! Form::open(['method' => 'GET', 'action' => ['BoardMembersController@edit',  $boardMember->id ]  ]) !!}
                      @include('cms.pages.partials.update_form')
                  {!! Form::close() !!}
              </td>
              <td>{{ $boardMember->id }}</td>
              <td><b>{{ $boardMember->board->name }}</b></td>
              <td>{{ $boardMember->name }}</td>
              <td>{{ $boardMember->description }} </td>
              <td>{{ $boardMember->role }}</td>
              <td>{{ $boardMember->email }}</td>
              <td>{{ $boardMember->study }}</td>
          </tr>
          @endForeach

      </tbody>

      </table>
    </div>


  </div>
  <!-- /.box -->
</div>