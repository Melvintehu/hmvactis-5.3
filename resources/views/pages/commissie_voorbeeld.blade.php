@extends('master')

@section('title')
	Feestcommissie
@stop



@section('content')
	
	<div class="container fadeInDown wow">
		<div class="page">
			<div class='row'>
				<div class="col-lg-2 space-outside-md">	
					<div class="space-inside-md space-inside-sides-md image round background-accent">
						<img class="img-responsive" src="../images/{{ $data['committee']->name }}-icon.png">
					</div>
				</div>
				<div class="col-lg-10 space-outside-md">
					<h1 class="page-title"> {{ $data['committee']->name }} </h1>
				</div>
			</div>
		</div>
	</div>

	<div class="section background-primary text-white fadeInDown wow">
		<div class="container">
			<p class="text">  
				{!! nl2br($data['committee']->description) !!}
			</p>
		</div>
	</div>

	<div class="container fadeInDown wow">
		<div class="row row-centered">
		@foreach($data['committeemembers'] as $committeemember)
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 col-centered">
				<div class="card type-4">
					<div class="top background-primary">
						<span >30 maart 2016  </span>
					</div>
					<div class="information text-center">
						<h3>{{ $committeemember->name }}</h3>
						<h5>{{ $committeemember->role }}</h5>
						<h5>{{ $committeemember->study }}</h5>
					</div>
					@if($committeemember->photos->first()['thumbnail_path'] != null)
					<div class="image round">
						<img class="img-responsive" src="../{{$committeemember->photos->first()['thumbnail_path']}}">
					</div>
					<div style="clear:both;"></div>
					@elseif($committeemember->photos->first()['path'] != null)
					<div class="image round">
						<img class="img-responsive" src="../{{$committeemember->photos->first()['path']}}">
					</div>
					<div style="clear:both;"></div>

					@else
					<div class="image round">
						<img class="img-responsive" src="http://www.bakkerijkosters.nl/afbeeldingen/geen_afbeelding_beschikbaar_gr.gif">
					</div>
					<div style="clear:both;"></div>
					@endif
				</div>
			</div>
		@endforeach


		</div>

		<div class="verdeler"></div>

		<a href='../commissies' class="btn-standard bg-main text-color-light space-outside-down-md"> Ga terug <span class="background-secondary round"> > </span> </a>

	</div>



@stop
