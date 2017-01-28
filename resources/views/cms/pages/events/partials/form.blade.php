<!-- form textfield  -->
<div class='form-group'>
    {!! Form::label('title', ' Naam ') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<!-- form textfield  -->
<div class='form-group'>
    {!! Form::label('location', '  Locatie  ') !!}
    {!! Form::text('location', null, ['class' => 'form-control']) !!}
</div>

<!-- form textfield  -->
<div class='form-group'>
    {!! Form::label('date', '  Datum  ') !!}
    {!! Form::date('date', null, ['class' => 'form-control']) !!}
</div>

<!-- form textfield  -->
<div class='form-group'>
    {!! Form::label('time', '  tijd  ') !!}
    {!! Form::text('time', null, ['class' => 'form-control']) !!}
</div>

<!-- form textfield  -->
<div class='form-group'>
    {!! Form::label('description', '  Beschrijving  ') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

<!-- form textfield  -->
<!-- <div class='form-group'>
    {!! Form::label('lustrum_event', '  Is dit een activiteit voor het lustrum?  ') !!}
    {!! Form::select('lustrum_event', array('ja' => 'Ja', 'nee' => 'Nee')) !!}
</div> -->

<!-- form textfield  -->
<div class='form-group'>
    {!! Form::label('subscription', '  Kan je je inschrijven voor deze activiteit ?  ') !!}
    {!! Form::select('subscription', array('yes' => 'Ja', 'no' => 'nee')) !!}
</div>


<!-- form submit button -->
<div class='form-group'>
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-success']) !!}
</div>