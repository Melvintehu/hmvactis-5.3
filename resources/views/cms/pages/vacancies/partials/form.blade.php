<!-- form textfield  -->
<div class='form-group'>
    {!! Form::label('title', '  Titel ') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<div class='form-group'>
    {!! Form::label('details', '  Details ( Elke detail scheiden met een komma) ') !!}
    {!! Form::text('details', null, ['class' => 'form-control']) !!}
</div>

<div class='form-group'>
    {!! Form::label('description', '  Beschrijving ') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>


<!-- form submit button -->
<div class='form-group'>
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-success']) !!}
</div>