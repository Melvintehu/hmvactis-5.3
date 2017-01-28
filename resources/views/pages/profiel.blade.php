@extends('master')

@section('title')

	Profieloverzicht

@stop



@section('content')

	<section class="container fadeInDown wow">

		<div class="row">

			<div class="col-lg-12 space-outside-lg">

				<h1 class="xs-text-center sm-text-center"> Welkom  {{ $profile->name }} </h1>

			</div>

			<div class="col-lg-12 bg-secondary padding-md">

			<h2 class="space-outside-down-sm text-color-light xs-text-center sm-text-center">Persoonsgegevens </h2>

				<table class="table">

					<tr>

						<th class="text-color-light">Naam:</th><td  class="text-color-light">{{ $profile->name }}</td>

					</tr>

					<tr>

						<th  class="text-color-light">Adres:</th><td  class="text-color-light">{{ $profile->street }} {{ $profile->house_number }}</td>

					</tr>

					<tr>

						<th  class="text-color-light">Telefoonnummer:</th><td  class="text-color-light">{{ $profile->phone_number }}</td>

					</tr>

					<tr>

						<th  class="text-color-light">Emailadres:</th><td  class="text-color-light">{{ $profile->email_address }}</td>


					</tr>

					<tr>

						<th  class="text-color-light">Geboortedatum:</th><td  class="text-color-light">{{ $profile->birthdate }}</td>

					</tr>

					<tr>

						<th  class="text-color-light">Studie:</th><td  class="text-color-light">{{ $profile->current_study }}</td>

					</tr>

					<tr>

						<th  class="text-color-light">Studiejaar:</th><td  class="text-color-light">{{ $profile->study_year }}</td>

					</tr>

					<tr>

						<th  class="text-color-light">IBAN:</th><td  class="text-color-light">{{ $profile->iban }}</td>

					</tr>

				</table>



			</div>
			{!! Form::open(['method' => 'GET', 'action' => ['PDFController@generate',  'user/' . Auth::user()->id ]]) !!}
                    <button class="btn-standard bg-main text-color-light space-outside-down-lg space-outside-up-sm"> Gegevens in pdf</button>
                {!! Form::close() !!}

			<div class="col-lg-12">

				<div class="divider bg-accent space-outside-down-lg"></div>

			</div>

			<div class="col-lg-12 bg-accent border  border-accent space-inside-up-md space-outside-down-sm text-center">

				<p class="text-color-dark block space-outside-down-sm  font-md"> Zou je een functie binnen HMV Actis willen bekleden? Meld je dan nu aan! </p>

				<a class="btn-standard bg-main text-color-light space-outside-down-lg space-outside-up-sm" href="/contact">Klik hier voor het contactformulier</a>

			</div>


			<div class="col-lg-12">

				<h2 class="space-outside-down-sm space-outside-up-md xs-text-center sm-text-center">Geplande activiteiten</h2>

				<table class="table ">
					@if($events->isEmpty())
						<p class="font-xs"> Je hebt je nog niet ingeschreven voor een activiteit. </p>
					@else

						<tr>

							<td> Titel </td>

							<td> Datum </td>

							<td> Tijd </td>

							<td> Locatie </td>

						</tr>

					@foreach($events as $event)

						<tr>

							<td > {{ $event->title }}</td>

							<td> {{ substr($event->date, 0,10) }} </td>

							<td> {{ substr($event->time,0,5) }}   </td>

							<td> {{ $event->location }} </td>

							<td>

								 {!! Form::open(['method' => 'post', 'action' => ['EventsController@uitschrijven',  $event->id ]  ]) !!}
									<button class="btn-standard hover-secondary bg-main text-color-light " href="">Uitschrijven</button>
								{!! Form::close() !!}
							</td>
						</tr>
					@endforeach

					@endif
				</table>
			</div>
		</div>
	</section>
@stop