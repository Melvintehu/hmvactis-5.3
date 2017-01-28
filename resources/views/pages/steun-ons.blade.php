@extends('master')


@section('content')

	<section class="container-fluid space-inside-sides-xl space-outside-lg">

			
		<div class="row">

			<div class="col-lg-12 space-outside-down-lg text-center">

				<h1>{{ $data['titel']->title }}</h1>

			</div>

			<div class="col-lg-8 space-outside-down-lg">

				<h3 class="space-outside-down-md ">{{ $data['eerste_kop']->title }}</h3>

				<p class="space-outside-down-lg space-inside-right-lg">
					
					{{ $data['eerste_kop']->body }}

				</p>

				<h3 class="space-outside-down-md">{{ $data['tweede_kop']->title }}</h3>

				<p class="text">
					
					{{ $data['tweede_kop']->body }}
				
				</p>

			</div>

			<div class="col-lg-4 space-outside-down-lg space-inside-md  space-inside-sides-md  bg-accent">

				<div class="row">
					

					<div class="col-lg-12 ">
								
						<div class="row">


							<div class="col-lg-2 col-sm-2 col-xs-2 space-outside-down-sm">
								
								<div class="circle circle-md bg-secondary "> <span class="text-color-light"> B </span></div>	

							</div>

							<div class="col-lg-10 col-sm-10 col-xs-10 space-outside-sm">
								
								<p class="text">{{ $data['rekeningnummer']->body }}</p>

							</div>

						</div>
					

					</div>


					<div class="col-lg-12 space-outside-up-sm">
								
						<div class="row">


							<div class="col-lg-2 col-sm-2 col-xs-2 space-outside-down-sm">
								
								<div class="circle circle-md bg-secondary "> <span class="text-color-light light"> P </span></div>	

							</div>

							<div class="col-lg-10 col-sm-10 col-xs-10 space-outside-sm">
								
								<p class="">{{ $data['tav']->body }}</p>

							</div>

						</div>
					

					</div>
			
					<div class="col-lg-12 space-outside-up-md space-outside-down-lg">
						
						<p class="text">

							{{ $data['uitleg']->body }}

						</p>
						
					</div>

					<div class="col-lg-12 ">

						<a href="/contact" class="btn-standard lowercase bg-secondary light text-color-light">PARTNER WORDEN</a>

					</div>


				</div>

			</div>

		</div>

	</section>
@stop