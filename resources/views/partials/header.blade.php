
<div class="container">
	

		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 xs-text-center">
			
			<a href='../../../'>

				<div style="width:200px;max-width:100%;" class="image auto space-outside-up-md xs-space-outside-down-md">
					
					<img class="height-auto" src='../images/logo.png' >
					
				</div>

			</a>

		</div>



	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 space-inside-down-sm ">

		<div class="col-lg-3 col-xs-12 xs-text-center xs-space-outside-down-sm">
				
				<a  target="_blank" href="https://twitter.com/hmvactis "> 

					<div style="width:30px;" class="image  inline-block space-outside-right-xs">
						
						<img class="height-auto" src="../images/twitter.png">
						
					</div>

				</a>
				
				<a target="_blank" href="https://www.facebook.com/hmvactis"> 

					<div style="width:30px;" class="image inline-block space-outside-right-xs">
						
						<img class="height-auto" src="../images/facebook.png">
						
					</div>
					
				</a>

				<a target="_blank" href="https://www.linkedin.com/company/hmv-actis"> 

					<div style="width:30px;" class="image inline-block space-outside-right-xs">
						
						<img class="height-auto" src="../images/linkedin.png">
						
					</div>
					
				</a>

			

		</div>
@if (Auth::check())
		<div class="col-lg-9 col-xs-12 xs-text-center text-right">
			
			<p><strong>Ingelogd als: </strong>{{ Auth::user()->name }}</p>

			@if($profiel->isEmpty())<br/>

				<a href='/lid-worden'>Word lid!</a>

			@endif

		</div>
@endif
	</div>



</div>