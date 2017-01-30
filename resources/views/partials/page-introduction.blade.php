<div class="row fadeInDown wow">

	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

		<div class="space-inside-down-lg space-outside-down-lg  bg-secondary">

				<div class="image image-responsive">
					@if($data['pageSection']->photo() != null)
						<img class="responsive-image height-auto" src="{{$data['pageSection']->thumbnail}}">
					@else
						<img class="height-auto" src="../images/bannerfoto2.jpg">
					@endif


				</div>

				<p class="text-color-light padding-sm">

					{{ $data['pageSection']->description }}

				</p>

		</div>

	</div>

</div>
