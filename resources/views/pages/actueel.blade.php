@extends('master')


@section('content')

	<section class="container-fluid space-inside-sides-xl space-outside-lg">

			
		<div class="row">

			<div class="col-lg-12 space-outside-down-lg text-center">

				<h1>{{ $data['titel']->title }}</h1>

			</div>

			<div class="col-lg-12 space-outside-down-sm text-center">

				<a class="btn-round col-centered" href="#"><span class=" circle circle-sm bg-accent text-color-dark"> < </span></a>

				<a class="btn-round col-centered" href="#"><span class="circle circle-sm  bg-accent text-color-dark"> 1 </span></a>

				<a class="btn-round col-centered" href="#"><span class="circle circle-sm  bg-accent text-color-dark"> 2 </span></a>

				<a class="btn-round col-centered" href="#"><span class="circle circle-sm  bg-accent text-color-dark"> 3 </span></a>

				<a class="btn-round col-centered" href="#"><span class="circle circle-sm  bg-accent text-color-dark"> 4 </span></a>

				<a class="btn-round col-centered" href="#"><span class="circle circle-sm  bg-accent text-color-dark"> 5 </span></a>

				<a class="btn-round col-centered" href="#"><span class="circle circle-sm  bg-accent text-color-dark"> > </span></a>

			</div>

			<div class="col-lg-12 space-outside-up-lg text-center">

				<div class="divider bg-accent"></div>

			</div>




			@foreach($data['nieuwsberichten'] as $nieuwsbericht)

				<div class="col-lg-4 space-outside-up-lg">

					<div class="image lg-rect-xl">

						<img class="responsive-image height-auto"  src="{{ $nieuwsbericht->photos->first()['path'] }}" alt='actueel bericht mentor4you' /> 

					</div>

				</div>

				<div class="col-lg-8 space-outside-up-lg">

					<div class=" space-outside-left-md">

						<h2>{{ $nieuwsbericht->title }}</h2>

						<p class="space-outside-md">

							{{ $nieuwsbericht->body }}

						</p>

						<a href="/actueel/{{ $nieuwsbericht->title }}-{{$nieuwsbericht->id}}" class="btn-round space-outside-down-sm"> Meer lezen <span class="circle circle-sm  bg-secondary text-color-light"> > </span> </a>

					</div>

				</div>

				<div class="col-lg-12 space-outside-up-lg text-center">

					<div class="divider bg-accent"></div>

				</div>

			@endforeach

			

			<div class="col-lg-12 space-outside-sm text-center">

				<a class="btn-round col-centered" href="#"><span class=" circle circle-sm bg-accent text-color-dark"> < </span></a>

				<a class="btn-round col-centered" href="#"><span class="circle circle-sm  bg-accent text-color-dark"> 1 </span></a>

				<a class="btn-round col-centered" href="#"><span class="circle circle-sm  bg-accent text-color-dark"> 2 </span></a>

				<a class="btn-round col-centered" href="#"><span class="circle circle-sm  bg-accent text-color-dark"> 3 </span></a>

				<a class="btn-round col-centered" href="#"><span class="circle circle-sm  bg-accent text-color-dark"> 4 </span></a>

				<a class="btn-round col-centered" href="#"><span class="circle circle-sm  bg-accent text-color-dark"> 5 </span></a>

				<a class="btn-round col-centered" href="#"><span class="circle circle-sm  bg-accent text-color-dark"> > </span></a>

			</div>

		</div>


	</section>
@stop