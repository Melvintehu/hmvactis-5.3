<div class='col-lg-4 col-xs-12 xs-space-outside-down-md space-inside-right-xs'>

	<h2 class="xs-text-center">Hoofdpartner</h2>
  	<div class="space-outside-up-sm" style="min-height:50px;">
  		<p > {{ $hoofdpartner->name }} </p>
  	</div>
	<a class="block space-outside-down-sm" href='http://{{ $hoofdpartner->website }}'>
		<div style="width:250px;" class="image space-inside-up-md">
  		@if($hoofdpartner->photo() != null)
  			<img class="height-auto" src="{{$hoofdpartner->thumbnail}}">
  		@else
  			<img class="width-auto" src="http://www.bakkerijkosters.nl/afbeeldingen/geen_afbeelding_beschikbaar_gr.gif">
  		@endif
		</div>
	</a>

</div>