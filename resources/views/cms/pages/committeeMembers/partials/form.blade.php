<!-- form textfield  -->
<div class='form-group'>
	{!! Form::label('committee_id', ' Bij welke commissie hoort dit commissielid?.  ') !!}
	{!! Form::select('committee_id', $committees, null, ['class' => 'form-control']) !!}
</div>


<!-- form textfield  -->
<div class='form-group'>
    {!! Form::label('name', '  Naam  ') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- form textfield  -->
<div class='form-group'>
    {!! Form::label('role', ' Functie  ') !!}
    {!! Form::text('role', null, ['class' => 'form-control']) !!}
</div>

<!-- form textfield  -->
<div class='form-group'>
    {!! Form::label('email', '  Emailadres  ') !!}
    {!! Form::text('email', null, ['class' => 'form-control']) !!}
</div>

<!-- form textfield  -->
<div class='form-group'>
    {!! Form::label('study', '  Studie  ') !!}
    {!! Form::text('study', null, ['class' => 'form-control']) !!}
</div>



<!-- form submit button -->
<div class='form-group'>
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-success']) !!}
</div>