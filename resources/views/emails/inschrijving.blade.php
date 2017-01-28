

@extends('beautymail::templates.sunny')

@section('content')

    @include ('beautymail::templates.sunny.heading' , [
        'heading' => 'Je bent nu lid!',
        'level' => 'h1',
    ])

    @include('beautymail::templates.sunny.contentStart')

    <p><h2><strong>Bewijs inschrijving</strong></h2></p>

        <p>Gefeliciteerd! Binnen twee werkdagen zijn je gegevens verwerkt en ben je officieel lid van HMV Actis. </p>

<p>In dit formulier heb je HMV Actis toestemming gegeven om contributie van jouw giro-/bankrekening af te schrijven. Dit betreft een gratis lidmaatschap voor het schooljaar 2016 – 2017. Vervolgens wordt het lidmaatschap automatisch verlengd en zal er jaarlijks €12,- aan contributie worden afgeschreven. Wederopzegging dient binnen twee maanden voor de start van het nieuwe college jaar, 31 augustus 2017, in gediend te worden.</p>

<p>Let op: je wordt niet automatisch uitgeschreven als je klaar/gestopt bent met je studie. Je dient hier zelf melding van te maken door een mail te sturen naar bestuur@hmvactis.nl. </p>

<p>Voor meer informatie over onze activiteiten, vragen of opmerkingen kun je contact met ons opnemen. Je kan ons vinden in T2.15 of contact met ons opnemen via Facebook. </p>

    @include('beautymail::templates.sunny.contentEnd')

@stop