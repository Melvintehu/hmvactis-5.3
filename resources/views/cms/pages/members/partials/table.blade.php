<tr>
  <th></th>
  <th></th>
  <th>Naam</th>
  <!-- <th>Adres </th> -->
  <th>Email</th>
  <th>Studentnummer</th>
  <th>Iban</th>
  <th>T.N.V.</th>
  <th> Admin / Maak admin </th>
</tr>

@foreach($users as $user)
<tr>
    <!-- buttons for showing the member -->
    <td>
        {!! Form::open(['method' => 'GET', 'action' => ['MembersController@show',  $user->id ]  ]) !!}
            <button class="btn btn-primary"> <i class="ion ion-search"> </i></button>
        {!! Form::close() !!}
    </td>


    <td>
        {!! Form::open(['method' => 'GET', 'action' => ['PDFController@generate', 'user/' . $user->id ]  ]) !!}
            <button class="btn btn-primary"> <i class="ion ion-archive"> </i></button>
        {!! Form::close() !!}
    </td>
    <td> {{ $user->name }} </td>
    <!-- <td> {{ $user->address }}  </td> -->
    <td> {{ $user->profile->email_address }} </td>
    <td> {{ $user->profile->student_number }} </td>
    <td> {{ $user->profile->iban }} </td>
    <td> {{ $user->profile->tnv }}</td>
    @include('cms.admin.controls')
</tr>

@endforeach
