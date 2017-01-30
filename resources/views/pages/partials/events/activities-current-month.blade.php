<section class=" space-outside-lg bg-secondary">
	<div class="container">
		<div class="row space-outside-lg fadeInDown wow">

			<div class="col-lg-5  space-outside-lg">
				<a href="/activiteiten">
					<div class="circle circle-xl bg-main block auto">
						<p class="font-md light text-color-light   uppercase font-secondary"> {{ Carbon::now()->formatLocalized('%B') }}  </p>
					</div>
				</a>
			</div>
			<div class="col-lg-7 md-space-inside-sides-lg lg-space-inside-sides-lg">
				<h1 class="uppercase xs-text-center text-color-light space-outside-down-md "> Agenda </h1>

				@foreach($events as $event)
					<a class="btn-round block space-outside-sm" href="activiteit/{{ $event->id }}" >
						<span class="circle circle-sm bg-main inline-block text-color-light "> > </span>
						<span class="text-color-light"> {{ $event->day }}   </span> <p class="text-color-light"> - {{ $event->title }}  </p>
					</a>
				@endforeach

			</div>

		</div> <!-- end of the row -->
	</div>
</section>