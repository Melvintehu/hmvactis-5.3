@if(session('succeed'))
	<section class="container-fluid xs-space-inside-sides-sm space-inside-sides-xl space-outside-lg">
		<div class="row">
			<div class="col-lg-12 fadeInDown wow">
				<div class="alert alert-success text-center" role="alert">
					<h2 class='xs-font-sm'>

						{!! session('succeed') !!}

					</h2>
				</div>
			</div>
		</div>
	</section>
@endif
