<!-- form textfield  -->
<div class='form-group'>
    {!! Form::label('name', '  In welk jaar is of was dit bestuur? ') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>


<!-- form submit button -->
<div class='form-group'>
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-success']) !!}
</div>