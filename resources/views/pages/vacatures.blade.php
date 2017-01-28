@extends('master')

@section('title')
	
	Vacatures

@stop



@section('content')


	<div class="container no-overflow">
		
		<div class="row">
			
			<h1 class="space-outside-lg xs-text-center"> VACATURES </h1>

			@include('partials.page-introduction', $data['pageSection']) 

		</div>

		<div class="row row-centered text-white">

			@foreach($data['vacancies'] as $vacancie )

			<a href="vacatures/{{ $vacancie->id }}">

			<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 fadeInDown wow">

				<div class="card type-1 background-primary">

					<div class="top background-accent"> 
					

					</div>

					<div class="image">

						@if($vacancie->photos->first()['thumbnail_path'] != null)	

							<img class="" src="{{$vacancie->photos->first()['thumbnail_path']}}">

						@elseif($vacancie->photos->first()['path'] != null)	

							<img class="" src="{{$vacancie->photos->first()['path']}}">

						@else
							<img class="" src="http://www.bakkerijkosters.nl/afbeeldingen/geen_afbeelding_beschikbaar_gr.gif">

						@endif

					</div>

					<div class="information">

						<h4> {{ $vacancie->title }} </h4>

						<p> 

							{{ str_limit($vacancie->description, 135) }}

						</p>

					</div>

				</div>

			</div>

			</a>

			@endforeach		

		</div>

	</div>		

@stop