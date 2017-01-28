@extends('master')

@section('title')
    Contact
@stop

@section('content')
    <section class="container space-inside-up-lg space-inside-down-md fadeInDown wow">
        <div class="row">

            <div class="col-lg-12">
                <h1 class="space-outside-down-lg">Contact</h1>
                <p class="space-outside-down-lg">
                    {{ $pageSection->description }}
                </p>
            </div>

        </div>
        <div class="divider bg-accent"></div>
    </section>

    <section class="container space-inside-down-lg fadeInDown wow">
        <div class="row">

            <div class="col-lg-12">
                <p class="text bold">
                    Vul het onderstaande contactformulier in.
                </p>
            </div>

            {!! Form::open(['method' => 'POST', 'action' => 'MailController@contactMail' ]) !!}
            <div class="col-lg-7 space-inside-xs">
                {!! Form::text('voornaam', null, ['placeholder' => 'Voornaam', 'class' => 'input border border-accent bg-accent']) !!}
            </div>

            <div class="col-lg-7 space-inside-xs">
                {!! Form::text('achternaam', null, ['placeholder' => 'Achternaam', 'class' => 'input border border-accent bg-accent']) !!}
            </div>

            <div class="col-lg-7 space-inside-xs">
                {!! Form::text('emailadres', null, ['placeholder' => 'Emailadres', 'class' => 'input border border-accent bg-accent']) !!}
            </div>
            <div class="col-lg-7 space-inside-xs">
                {!! Form::text('telefoonnummer', null, ['placeholder' => 'Telefoonnummer', 'class' => 'input border border-accent bg-accent']) !!}
            </div>

            <div class="col-lg-12 space-inside-xs">
                {!! Form::textarea('bericht', null, ['placeholder' => 'Uw bericht of opmerking', 'class' => 'textarea border border-accent bg-accent']) !!}
            </div>

            <div class="col-lg-12 space-inside-xs">
                 {!! Form::submit('Verzenden', ['class' => 'btn-standard bg-secondary text-color-light font-xs ']) !!}
            </div>

            {!! Form::close() !!}

            <div class="col-lg-12 space-inside-xs">
                <p>
                    Bedankt voor het verzenden. Wij nemen zo snel mogelijk contact opnemen.
                </p>
            </div>

        </div>
    </section>

@stop