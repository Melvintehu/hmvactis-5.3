
	<div class="container fadeInDown wow">
		<div class="page">
			<h1> Bestuur 2016 - 2017 </h1>

			<div class="row row-centered ">
				@foreach($boards->members as $boardMember)
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 col-centered">
					<div class="card type-4">
						<div class="top background-primary">

						</div>
						<div class="information text-center">
							<h3> {{ $boardMember->name }} </h3>
							<h5> {{ $boardMember->role }} </h5>
							<h5> {{ $boardMember->study }} </h5>
						</div>
						<div class="image round">
							@if($boardMember->photo() != null)
								<img class="img-responsive" src="{{$boardMember->thumbnail}}">
							@else
								<img class="width-auto" src="http://www.bakkerijkosters.nl/afbeeldingen/geen_afbeelding_beschikbaar_gr.gif">
							@endif
						</div>
						<div style="clear:both;"></div>
					</div>
				</div>
				@endforeach
			</div>
			<div class="verdeler"></div>
		</div>
	</div>
