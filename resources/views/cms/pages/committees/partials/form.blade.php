<!-- form textfield  -->
<div class='form-group'>
    {!! Form::label('name', '   Wat is de naam van deze commissie?  ') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<div class='form-group'>
    {!! Form::label('description', '  Hoe beschrijf je deze commissie?  ') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

<div class='form-group'>
    {!! Form::label('email', '  Wat is het emailadres voor deze commissie? ( Wij kunnen altijd een nieuw emailadres aanmaken)  ') !!}
    {!! Form::text('email', null, ['class' => 'form-control']) !!}
</div>

<!-- form submit button -->
<div class='form-group'>
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-success']) !!}
</div>