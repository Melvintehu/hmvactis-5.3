@extends('master')

@section('title')
	
	Lustrum

@stop



@section('content')

	<div class="container ">
		<div class="page">
			<h1 class="page-title"> LUSTRUM </h1>

			@include('partials.page-introduction', $data['pageSection']) 

			<div class="verdeler"></div>

			<h1> APRIL </h1>

			<div class="verdeler "> </div>

			<div class="row row-centered text-white">
			@foreach($data['events'] as $event)
				<div class="col-lg-12 col-md-4 col-sm-6 col-xs-12 ">
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
								<p class="detail"> {{ $event->date }} </p>
							</div>
							<p>{{ $event->description }}</p>
						</div>
						<div style="clear:both;"></div>
					</div>
				</div>
			@endForeach

			</div>
		</div>
		


	
	</div>

@stop