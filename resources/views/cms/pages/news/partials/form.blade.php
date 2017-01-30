<!-- form textfield  -->


<div class='form-group'>
    {!! Form::label('title', '   Titel  ') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>


<!-- form textfield  -->
<div class='form-group'>
    <label> Wanneer wil je dat het nieuwsbericht op de website komt? </label>
    <div class="input-group date">
      <div class="input-group-addon">
        <i class="fa fa-calendar"></i>
      </div>
      {!! Form::text('publish_date', null, ['id' => 'datepicker', 'class' => 'form-control pull-right datepicker']) !!}
    </div>
</div>


<!-- form textfield  -->
<div class='form-group'>
    <label> Van welke datum is het nieuwsbericht? </label>
    <div class="input-group date">
      <div class="input-group-addon">
        <i class="fa fa-calendar"></i>
      </div>
      {!! Form::text('date_added', null, ['id' => 'datepicker', 'class' => 'form-control pull-right datepicker']) !!}
    </div>
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