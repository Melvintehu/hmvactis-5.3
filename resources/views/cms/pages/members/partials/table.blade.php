<tr>
  <th>Naam</th>
  <!-- <th>Adres </th> -->
  <th>Email</th>
  <th>Studentnummer</th>
  <th>Iban</th>
  <th>T.N.V.</th>
  <th>Heeft admin rechten</th>
</tr>

@foreach($users as $user)
<tr>
    <td> {{ $user->name }} </td>
    <!-- <td> {{ $user->address }}  </td> -->
    <td> {{ $user->profile->email_address }} </td>
    <td> {{ $user->profile->student_number }} </td>
    <td> {{ $user->profile->iban }} </td>
    <td> {{ $user->profile->tnv }}</td>
    <td> {{ $user->admin_rights }} </td>

    <!-- buttons for showing the member -->
    <td>
        {!! Form::open(['method' => 'GET', 'action' => ['MembersController@show',  $user->id ]  ]) !!}
            <button class="btn btn-primary"> <i class="ion ion-search"> </i></button>
        {!! Form::close() !!}
    </td>
</tr>

@endforeach
