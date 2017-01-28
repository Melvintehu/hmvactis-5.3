<!-- form textfield  -->

<div class='form-group'>
    {!! Form::label('name', '  Wat is de naam van deze gebruiker ?  ') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<div class='form-group'>
    {!! Form::label('street', ' In welke straat woont deze gebruiker ?  ') !!}
    {!! Form::text('street', null, ['class' => 'form-control']) !!}
</div>

<div class='form-group'>
    {!! Form::label('house_number', '  Wat is het huisnummer ?  ') !!}
    {!! Form::text('house_number', null, ['class' => 'form-control']) !!}
</div>

<div class='form-group'>
    {!! Form::label('phone_number', '  Wat is het telefoonnummer van deze gebruiker ?  ') !!}
    {!! Form::text('phone_number', null, ['class' => 'form-control']) !!}
</div>

<div class='form-group'>
    {!! Form::label('email_address', '  Wat is het emailadres van deze gebruiker ?  ') !!}
    {!! Form::text('email_address', null, ['class' => 'form-control']) !!}
</div>

<div class='form-group'>
    {!! Form::label('birthdate', '  Wat is de geboortedatum ?  ') !!}
    {!! Form::text('birthdate', null, ['class' => 'form-control']) !!}
</div>


<div class='form-group'>
    {!! Form::label('current_study', '  Wat is de huidige studie ?  ') !!}
    {!! Form::text('current_study', null, ['class' => 'form-control']) !!}
</div>

<div class='form-group'>
    {!! Form::label('study_year', '  In welk jaar is deze gebruiker gestart ?  ') !!}
    {!! Form::text('study_year', null, ['class' => 'form-control']) !!}
</div>



<div class='form-group'>
    {!! Form::label('student_number', '  Wat is het studentnummer ?  ') !!}
    {!! Form::text('student_number', null, ['class' => 'form-control']) !!}
</div>

<div class='form-group'>
    {!! Form::label('iban', '  Wat is de iban ?  ') !!}
    {!! Form::text('iban', null, ['class' => 'form-control']) !!}
</div>

<div class='form-group'>
    {!! Form::label('tnv', 'TNV') !!}
    {!! Form::text('tnv', null, ['class' => 'form-control']) !!}
</div>



<!-- form submit button -->
<div class='form-group'>
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-success']) !!}
</div>