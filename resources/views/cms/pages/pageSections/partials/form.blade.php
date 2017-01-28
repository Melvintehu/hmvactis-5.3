<!-- form textfield  -->
<div class='form-group'>
	{!! Form::label('page_id', ' Kies hier op welke pagina je deze pagina sectie wilt hebben.  ') !!}
	{!! Form::select('page_id', $pages, null, ['class' => 'form-control']) !!}
</div>


<div class='form-group'>
    {!! Form::label('name', '   Beschrijvende titel voor in het CMS. ') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- form textfield  -->
<div class='form-group'>
    {!! Form::label('title', ' De titel die op de pagina wordt weergegeven.  ') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>


<!-- form textfield  -->
<div class='form-group'>
	{!! Form::label('description', ' De tekst die je voor deze pagina sectie wilt. ') !!}
	{!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

<!-- form submit button -->
<div class='form-group'>
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-success']) !!}
</div>