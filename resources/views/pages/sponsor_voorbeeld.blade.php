@extends('master')

@section('title')
	{{ $data['sponsor']->name }}
@stop

@section('content')
	
	<div class="bg-secondary "> 

		<div class="container">
			
			<div class="row space-outside-lg fadeInDown wow">
				

				<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 ">


					<div class="row">
						

						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 xs-space-inside-left-xl">

							<h1 class="text-color-light"> {{ $data['sponsor']->name }} </h1>

						</div>

						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 xs-space-inside-left-xl">

							<div class="text xs-space-outside-down-lg sm-space-outside-down-lg">

								<a href="http://{{ $data['sponsor']->website }}"><p class="text-color-light">Klik hier Bezoek de website!</p></a>

							</div>

						</div>

					</div>

				</div>

				<div style="padding:0;" class="col-lg-5 col-md-4 col-sm-12 col-xs-12">

					<div class="image lg-rect-lg xs-space-inside-sides-lg"> 

						@if($data['sponsor']->photos->first()['path'] != null)
							  			<img class="width-auto" src="/{{$data['sponsor']->photos->first()['path']}}">
							  		@else
							  			<img class="width-auto" src="http://www.bakkerijkosters.nl/afbeeldingen/geen_afbeelding_beschikbaar_gr.gif">
							  		@endif


					</div>

				</div>

			</div>



		</div>
	</div>

	<!-- Section inschrijven voor activiteit -->
	<section class="container fadeInDown wow">
		
		<div class="row">
			
			<div class="col-lg-7 col-xs-12 space-inside-lg xs-text-center">
				
				<p class="space-outside-md xs-space-inside-right-md-none xs-padding-sm space-inside-right-md"> {!! nl2br($data['sponsor']->description) !!} </p>

			</div>

		</div>

	</section>

	
	<div class="container-fluid bg-accent space-outside-down-lg space-inside-sides-xl fadeInDown wow">
		
		<div class="row ">
			
			<div class="col-lg-12 space-inside-lg text-center">

				<p class="block space-outside-down-md">Bent u geïnteresseerd in het samenwerken met HMV Actis? <br>Neem gerust contact met ons op.</p>
				
				<a class="btn-standard bg-main text-color-light" href="/contact"> Contact opnemen </a>

			</div>

		</div>

	</div>



@stop
