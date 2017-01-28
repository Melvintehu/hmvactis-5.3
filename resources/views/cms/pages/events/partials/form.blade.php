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
    <label> Datum </label>
    <div class="input-group date">
      <div class="input-group-addon">
        <i class="fa fa-calendar"></i>
      </div>
      {!! Form::text('date', null, ['id' => 'datepicker', 'class' => 'form-control pull-right']) !!}
    </div>
</div>



<div class="bootstrap-timepicker">
    <div class="form-group">
      <label>Start tijd</label>

      <div class="input-group">

        <div class="input-group-addon">
          <i class="fa fa-clock-o"></i>
        </div>
        {!! Form::text('time', null, ['class' => 'form-control timepicker pull-right']) !!}
      </div>
      <!-- /.input group -->
    </div>
<!-- /.form group -->
</div>


<div class="bootstrap-timepicker">
    <div class="form-group">
      <label>Eind Tijd</label>

      <div class="input-group">

        <div class="input-group-addon">
          <i class="fa fa-clock-o"></i>
        </div>
        {!! Form::text('time', null, ['class' => 'form-control timepicker pull-right']) !!}
      </div>
      <!-- /.input group -->
    </div>
<!-- /.form group -->
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