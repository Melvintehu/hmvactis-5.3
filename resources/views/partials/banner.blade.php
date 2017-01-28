
<div class="container-fluid no-overflow hidden-xs ">

	<div class="row ">
		
		<div style="min-height:440px;" class="col-lg-12 banner push-aside-xl text-center">
			
			<?php 

				// dd(Auth::user()->profile);

			?>

			@if(Auth::user() == null || Auth::user()->profile ==null  )

				

			<h1 class="text-color-light space-outside-md"> VOOR 5 EURO LID WORDEN</h1>

			<p class="text-color-light block space-outside-md">Lid worden bij HMV Actis kost het eerste jaar slechts 5 euro. <br> Meld je snel aan!</p>

			<a class="btn-standard bg-secondary text-color-light" href="/lid-worden">LID WORDEN</a>
			
			<div  class="overlay-banner"></div>

				

			@endif

			<img class="responsive-image height-auto" style="position:absolute;bottom:0px;top:0px;"  src="../images/bannerfoto2.jpg"  alt='banner image hmvactis' />
		
		</div>

	</div>	

</div>