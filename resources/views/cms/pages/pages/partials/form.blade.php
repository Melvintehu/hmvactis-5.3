<!-- form textfield  -->
<div class='form-group'>
    {!! Form::label('title', '  Pagina Titel  ') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>


<!-- form submit button -->
<div class='form-group'>
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-success']) !!}
</div>