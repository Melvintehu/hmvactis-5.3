@extends('master')




@section('content')

	<section class="container-fluid space-inside-sides-xl space-outside-lg">
			
		<div class="row">
			
			<div class="col-lg-6 space-outside-down-md">
				
				<h1 >{{ $data['news']->title }} </h1>

			</div>

			<div class="col-lg-7 space-outside-down-lg space-inside-right-lg">
				
				<p>
					
					{!! $data['news']->body !!}

				</p>

			</div>

			<div class="col-lg-5 col-md-12 col-xs-12 col-sm-12">
				
				<div class="image lg-rect-xl">
					
					<img class="height-auto" src="{{ $data['news']->photos->first()['path'] }}">

				</div>

			</div>

		</div>	

	</section>

	<section class="container-fluid space-outside-lg bg-accent">

		<div class="row-centered space-inside-sides-lg ">


			<div class="col-lg-12 space-outside-up-md space-outside-down-sm ">

				<h3 class="text-center">{{ $data['aanmeldbox']->title }}</h3>

			</div>

			<div class="col-lg-4 col-centered space-outside-down-md">

				<p class="text-center">
					{{ $data['aanmeldbox']->body }}
				</p>

			</div>

			<div class="col-lg-12 text-center space-outside-down-md">

				<a href="/aanmelden-als-mentor" class="btn-standard bg-secondary text-color-light light space-outside-down-md ">Mentor worden</a>

				<a href="/aanmelden-als-jongere"  class="space-outside-left-sm text-color-light light btn-standard bg-secondary ">Aanmelden als jongere</a>

			</div>


		</div>

	</section>

@stop