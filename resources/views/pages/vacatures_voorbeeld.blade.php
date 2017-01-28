@extends('master')

@section('title')
	Vacatures
@stop



@section('content')
	
	<section class="bg-secondary no-overflow">
		
		<div class="container space-inside-lg">
			
			<div class="row">
				
				<div class="col-lg-8 fadeInDown wow">
					
					<div class="row" >


						<div class="col-lg-12 xs-text-center ">
							
							<h1 class="text-color-light"> {{ $data['vacature']->title }} </h1>

						</div>
							
						<div class="col-lg-12 space-outside-md xs-text-center">
							
							<p class="text-color-light">

								{!! nl2br($data['vacature']->details) !!}

							</p>

						</div>
						
					</div>

				</div>

				<div class="col-lg-4 xs-text-center fadeInDown wow">
					
					<div class="image lg-rect-lg"> 

						@if($data['vacature']->photos->first()['path'] != null)	

							<img class="width-auto" src="../{{$data['vacature']->photos->first()['path']}}">

						@else

							<img class="width-auto" src="http://www.bakkerijkosters.nl/afbeeldingen/geen_afbeelding_beschikbaar_gr.gif">

						@endif

					</div>

				</div>

			</div>

		</div>

	</section>

	<div class="container no-overflow">

		<div class="row">

			<div class="col-lg-12 space-outside-md fadeInDown wow">

				<p class="xs-text-center">

					{!! nl2br($data['vacature']->description) !!}

				</p>

			</div>

			<div class="divider bg-accent "></div>


		</div>

		<div class="col-lg-12 xs-text-center space-outside-down-md fadeInDown wow">

			<a href='/vacatures' class="btn-standard bg-main text-color-light space-outside-md block"> Ga terug </a>
			
		</div>

	</div>





@stop
