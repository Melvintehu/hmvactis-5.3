@extends('master')

@section('title')
	
	Nieuws

@stop



@section('content')

	<div class="container no-overflow">

		<div class="row">
			
		<h1 class="space-outside-lg xs-text-center  fadeInDown wow"> NIEUWS</h1>


			<div class="row row-centered text-white">
			@foreach($data['nieuws'] as $nieuwsmessage)
				
					<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12  fadeInDown wow">

						<a href="nieuws/{{ $nieuwsmessage->id }}" >

							<div class="card type-1 background-secondary">

								<div class="top background-primary">

									<span >{{ $nieuwsmessage->publish_date->formatLocalized(' %d %B %Y') }}  </span>

								</div>

								<div class="image">

									@if($nieuwsmessage->photos->first()['thumbnail_path'] != null)	

										<img class="img-responsive" src="{{$nieuwsmessage->photos->first()['thumbnail_path']}}">

									@elseif($nieuwsmessage->photos->first()['path'] != null)	

										<img class="img-responsive" src="{{$nieuwsmessage->photos->first()['path']}}">

									@else
										<img class="width-auto" src="http://www.bakkerijkosters.nl/afbeeldingen/geen_afbeelding_beschikbaar_gr.gif">

									@endif

								</div>

								<div class="information background-primary">

									<h4> {{ $nieuwsmessage->title }} </h4>
									
									<p>{{ str_limit($nieuwsmessage->description, 150) }}</p>

								</div>

								<div style="clear:both;"></div>

							</div>

						</a>

					</div>

				@endforeach

				</div>

			<!-- @include('pages.cards.type-1')-->

		

		</div>

	</div>
	

@stop