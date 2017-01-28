<!-- form textfield  -->

<!-- form textfield  -->
<div class='form-group'>
	{!! Form::label('board_id', ' In welk bestuur wil je dit bestuurslid plaatsen?.  ') !!}
	{!! Form::select('board_id', $boards, null, ['class' => 'form-control']) !!}
</div>

<div class='form-group'>
    {!! Form::label('name', '  Wat is de naam van dit bestuurslid?  ') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<div class='form-group'>
    {!! Form::label('role', '  Wat is de functie van dit bestuurslid?  ') !!}
    {!! Form::text('role', null, ['class' => 'form-control']) !!}
</div>

<div class='form-group'>
    {!! Form::label('email', '  Wat is het emailadres van dit bestuurslid?  ') !!}
    {!! Form::text('email', null, ['class' => 'form-control']) !!}
</div>

<div class='form-group'>
    {!! Form::label('study', '  Welke studie volgt dit bestuurslid op dit moment?  ') !!}
    {!! Form::text('study', null, ['class' => 'form-control']) !!}
</div>

<div class='form-group'>
    {!! Form::label('description', '  Heb je een kort verhaaltje over dit bestuurslid?  ') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

<!-- form submit button -->
<div class='form-group'>
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-success']) !!}
</div>