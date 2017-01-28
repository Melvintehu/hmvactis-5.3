@extends('master')

@section('title')
	{{ $data['korting']->title }}
@stop



@section('content')
	
	<div class="bg-secondary "> 

		<div class="container">
			
			<div class="row space-outside-lg">
				

				<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 fadeInDown wow">


					<div class="row">
						

						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 xs-space-inside-left-xl">

							<h1 class="text-color-light"> {{ $data['korting']->sponsor->name }} </h1>

						</div>

						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 xs-space-inside-left-xl">

							<div class="text xs-space-outside-down-lg sm-space-outside-down-lg">

								<p class="text-color-light"> {{ $data['korting']->title }} </p>

							</div>

						</div>

					</div>

				</div>

				<div style="padding:0;" class="col-lg-5 col-md-4 col-sm-12 col-xs-12">

					<div class="image lg-rect-lg xs-space-inside-sides-lg"> 

						@if($data['korting']->photos->first()['path'] != null)	
							<img class="width-auto" src="../{{$data['korting']->photos->first()['path']}}">
						@else
							<img class="width-auto" src="http://www.bakkerijkosters.nl/afbeeldingen/geen_afbeelding_beschikbaar_gr.gif">
						@endif


					</div>

				</div>

			</div>



		</div>
	</div>

	


	<div class="container">
		<div class="page fadeInDown wow">
			<div class="text">
				<p>
					{!! nl2br($data['korting']->description) !!}

				</p>
			</div>

			<div class="verdeler"></div>

			<a href='/kortingen' class="link"> Ga terug <span class="background-secondary round"> > </span> </a>
		</div>
	</div>





@stop
