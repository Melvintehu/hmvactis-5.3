@if($user->admin == 1)
<td>
    {!! Form::open(['method' => 'DELETE', 'action' => ['AdminController@destroy',  $user->id ]  ]) !!}
        <button class="btn btn-danger"> <i class="ion ion-minus-circled"> </i></button>
    {!! Form::close() !!}
</td>
@else
<td>
    {!! Form::open(['method' => 'PUT', 'action' => ['AdminController@update',  $user->id ]  ]) !!}
        <button style="padding-left:15px;padding-right:15px;" class="btn btn-warning"> <i class="ion ion-key"> </i></button>
    {!! Form::close() !!}
</td>
@endif
