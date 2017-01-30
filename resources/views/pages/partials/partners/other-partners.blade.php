
<div class="col-lg-8">
	<h2 class="xs-text-center">Overige partners</h2>
	<div class="slider1 ">
		@foreach($partners as $partner)
	  	<div class="slide ">
		  	<div class="space-outside-up-sm" style="min-height:50px;">
		  		<p > {{ $partner->name }} </p>
		  	</div>
	  		<a class="block space-outside-down-sm" href='http://{{ $partner->website }}'>
	  			<div style="height:150px;width:200px;" class="image imageCentered">
	  				@if($partner->photo() != null )
	  					<img  src="{{$partner->thumbnail}}">
			  		@else
			  			<img class="width-auto" src="http://www.bakkerijkosters.nl/afbeeldingen/geen_afbeelding_beschikbaar_gr.gif">
			  		@endif
	  			</div>
	  		</a>
	  	</div>
	  	@endforeach
	</div>
</div>