<tr>
  <td> Maak lid </td>
  <th>Naam</th>
  <th>Email</th>
  <th>Studentnummer</th>
  <th>Iban</th>
  <th>T.N.V.</th>
  <th>Heeft admin rechten</th>
</tr>

@foreach($users as $user)
<tr>
    <td>
      {!! Form::open(['method' => 'GET', 'action' => ['ProfilesController@processUser',  $user->id ]  ]) !!}
          <button class="btn btn-success"> <i class="ion ion-checkmark"> </i></button>
      {!! Form::close() !!}
    </td>

    <td> {{ $user->name }} </td>
    <!-- <td> {{ $user->address }}  </td> -->
    <td> {{ $user->profile->email_address }} </td>
    <td> {{ $user->profile->student_number }} </td>
    <td> {{ $user->profile->iban }} </td>
    <td> {{ $user->profile->tnv }}</td>
    <td> {{ $user->admin_rights }} </td>
        <!-- buttons for showing the member -->
    <td>
        {!! Form::open(['method' => 'GET', 'action' => ['RegistrationsController@show',  $user->id ]  ]) !!}
            <button class="btn btn-primary"> <i class="ion ion-search"> </i></button>
        {!! Form::close() !!}
    </td>


    <td>
        {!! Form::open(['method' => 'GET', 'action' => ['PDFController@generate', 'user/' . $user->id ]  ]) !!}
            <button class="btn btn-primary"> <i class="ion ion-archive"> </i></button>
        {!! Form::close() !!}
    </td>
</tr>
@endforeach
