@extends('master')

@section('title')
	
	Activiteiten

@stop



@section('content')

	<div class="container no-overflow">
		
		<div class="row">
		
			<h1 class="space-outside-lg xs-text-center"> ACTIVITEITEN </h1>

			@include('partials.page-introduction', $data['pageSection']) 

			<div class="divider bg-accent space-outside-down-lg"></div>

			<h1 class="xs-text-center"> {{ strtoupper(Carbon::now()->formatLocalized('%B %Y')) }} </h1>

			<div class="divider bg-accent space-outside-lg "> </div>

			<div class="row row-centered space-inside-sides-md">

			@foreach($data['currentMonthsEvents'] as $event)

				<a href="activiteit/{{ $event->id }}">
					
				<div class="col-lg-12 space-outside-down-sm  fadeInLeft wow">

					<div class="row">
						
						<div style="padding:0;" class="col-lg-4 col-md-4 ">

							<div class="image lg-rect-lg">
								@if($event->photos->first()['thumbnail_path'] != null)	

									<img class="responsive-image height-auto" src="{{$event->photos->first()['thumbnail_path']}}">

								@elseif($event->photos->first()['path'] != null)	

									<img class="responsive-image height-auto" src="{{$event->photos->first()['path']}}">


								@else
									<img class="responsive-image height-auto" src="http://www.bakkerijkosters.nl/afbeeldingen/geen_afbeelding_beschikbaar_gr.gif">
								@endif

							</div>

						</div>

						<div class="col-lg-8 col-md-8  lg-space-inside-left-sm xs-space-outside-up-sm sm-space-outside-up-md     text-left">
							
							<div class="row  space-inside-sides-md space-inside-xs">
								
								<h2 class="space-outside-up-xs space-outside-down-xs">{{ $event->title }}</h2>

								<div class="row space-outside-down-xs">
									
									<div class="col-lg-4 space-outside-down-xs">
										
										<p class=" "> {{ $event->location }} </p>

									</div>

									<div class="col-lg-8 space-outside-down-xs">
										
										<p class=" "> {{ $event->date->formatLocalized(' %d %B %Y') }} </p>

									</div>

									<div class="col-lg-12">
										
										<p class=" font-xs">{{ str_limit($event->description, 480 ) }}</p>

									</div>

								</div>

							</div>

						</div>

					</div>

				</div>
			
				</a>
			@endForeach

			</div>

			<div class="divider bg-accent space-outside-lg"> </div>

			<?php 
				$date = new Carbon('next month');
			?>




			<h1 class="space-outside-down-lg xs-text-center"> {{ strtoupper($date->formatLocalized(' %B %Y') )}} </h1>

			<div class="divider bg-accent "> </div>

			<div class="row row-centered space-outside-down-lg text-white">

			@foreach($data['nextMonthsEvents'] as $event)
			
				<div class="col-lg-12 col-md-4 col-sm-6 col-xs-12 ">

				<a href="#{{ $event->id }}">

					<div class="card type-1 background-secondary">

						<div class="top background-primary">

							<span > {{ $event->date }} </span>

						</div>

						<div class="image">

							<img class="img-responsive" src="../images/imagetest2.png">

						</div>

						<div class="information background-primary">

							<h3>{{ $event->title }}</h3>

							<div class="details">

								<p class="detail"> {{ $event->location }} </p>

								<p class="detail"> {{ $event->date->formatLocalized(' %d %B %Y') }} </p>

							</div>

							<p>{{ str_limit($event->description, 200 ) }}</p>

						</div>

						<div style="clear:both;"></div>

					</div>

					</a>

				</div>
			
			@endForeach

			@if($data['nextMonthsEvents'] != null)

				<div class="text-left font-xs space-outside-xs space-inside-sides-sm">Er zijn nog geen activiteiten gepland voor deze maand. </div>

			@endif

			</div>

		</div>
	
	</div>

@stop