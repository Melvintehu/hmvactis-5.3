@extends('master')

@section('title')
	
	Partner kortingen

@stop



@section('content')

	<div class="container no-overflow">

		<div class="row">

			<h1 class="space-outside-lg xs-text-center"> KORTINGEN </h1>

			@include('partials.page-introduction', $data['pageSection'])

			<div class="row row-centered text-white">

				@foreach($data['kortingen'] as $korting)

				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 fadeInDown wow">

					<a href='/kortingen/{{ $korting->id }}'>

						<div class="card type-1 background-primary">

							<div class="top background-accent"> 
							
							</div>

							<div class="image">

								@if($korting->photos->first()['thumbnail_path'] != null)	

									<img class="" src="{{$korting->photos->first()['thumbnail_path']}}">

								@elseif($korting->photos->first()['path'] != null)	

									<img class="" src="{{$korting->photos->first()['path']}}">
								@else
									<img class="" src="http://www.bakkerijkosters.nl/afbeeldingen/geen_afbeelding_beschikbaar_gr.gif">

								@endif

							</div>

							<div class="information no-overflow">

								<h4> {{ $korting->sponsor->name }}</h4>

								<p> {{  str_limit($korting->description, 150) }} </p>

							</div>

						</div>

					</a>

				</div>		

				@endforeach

			</div>				

		</div>
		
	</div>

@stop