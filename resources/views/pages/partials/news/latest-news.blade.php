<section class="container space-outside-up-lg fadeInDown wow">
		<div class="row">

			<div class="col-lg-12 xs-text-center sm-text-center">
				<h1 class="space-outside-down-lg"> NIEUWS </h1>
			</div>

			@foreach($news as $nieuwsmessage)

			<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 no-overflow ">
				<div class="row">

					<a href="nieuws/{{ $nieuwsmessage->id }}" >
						<div class="card type-1 background-secondary">
							<div class="top background-primary">
								<span class="text-color-light" >{{  $nieuwsmessage->publish_date->formatLocalized(' %d %B %Y') }}  </span>
							</div>
							<div class="image">

							@if($nieuwsmessage->photos->first()['thumbnail_path'] != null)

								<img class="" src="{{$nieuwsmessage->photos->first()['thumbnail_path']}}">

							@elseif($nieuwsmessage->photos->first()['path'] != null)

								<img class="" src="{{$nieuwsmessage->photos->first()['path']}}">

							@else

								<img class="height-auto" src="http://www.bakkerijkosters.nl/afbeeldingen/geen_afbeelding_beschikbaar_gr.gif">

							@endif

							</div>
							<div class="information background-primary ">
								<h4 class="text-color-light"> {{ $nieuwsmessage->title }} </h4>
								<p class="text-color-light ">{{ str_limit($nieuwsmessage->description, 150) }}</p>
							</div>
							<div style="clear:both;"></div>
						</div>
					</a>
				</div>
			</div>

			@endforeach

			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
				<a class="btn-standard bg-accent text-color-dark inline-block" href="/nieuws"> meer nieuws </a>
			</div>

		</div>
	</section>