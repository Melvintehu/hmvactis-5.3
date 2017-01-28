@extends('master')

@section('title')
	
	Commissies

@stop



@section('content')

	<div class="container no-overflow">

		<div class="row">

			<h1 class="space-outside-lg xs-text-center fadeInDown wow"> COMMISSIES </h1>

			@include('partials.page-introduction', $data['pageSection'])

			<div class="verdeler"> </div>

			@foreach($data['committees'] as $committee)

			<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 col-centered   fadeInDown wow">

				<a href="commissies/{{ $committee->id }}">

					<div class="card type-6">

						<div class="top background-primary">

							<span >30 maart 2016  </span>

						</div>
						
						<div class="image round background-accent">

							<img class="img-responsive icon" src="../images/{{ $committee->name }}-icon.png">

						</div>

						

							<h4 class="text-center space-outside-up-md"> {{ $committee->name }} </h4>

						

						<div style="clear:both;"></div>

					</div>

				</a>

			</div>

			@endforeach

		</div>

	</div>


@stop