<!-- form textfield  -->


<div class='form-group'>
    {!! Form::label('title', '   Titel  ') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<!-- form textfield  -->
<div class='form-group'>
    {!! Form::label('publish_date', '  Wanneer wil je dat het nieuwsbericht op de website komt?  ') !!}
    {!! Form::date('publish_date', null, ['class' => 'form-control']) !!}
</div>

<!-- form textfield  -->
<div class='form-group'>
    {!! Form::label('date_added', '  Van welke datum is het nieuwsbericht?  ') !!}
    {!! Form::date('date_added', null, ['class' => 'form-control']) !!}
</div>

<!-- form textfield  -->
<div class='form-group'>
    {!! Form::label('description', '  Beschrijving  ') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>


<!-- form submit button -->
<div class='form-group'>
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-success']) !!}
</div>