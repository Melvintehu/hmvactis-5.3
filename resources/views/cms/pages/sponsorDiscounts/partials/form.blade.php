<!-- form textfield  -->

<!-- form textfield  -->
<div class='form-group'>
	{!! Form::label('sponsor_id', ' Van welke partner is deze korting?  ') !!}
	{!! Form::select('sponsor_id', $sponsors, null, ['class' => 'form-control']) !!}
</div>


<div class='form-group'>
    {!! Form::label('title', '  Titel  ') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
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