@extends('master')

@section('title')
	Foto's
@stop

@section('content')
	<div class="container no-overflow">
		<div class="row">
			<h1 class="space-outside-lg xs-text-center"> ALBUMS </h1>
			
		</div>

		<div class="row row-centered text-white">
			@foreach($albums as $album )
				@if($album->hasPhotos())
					<a href="albums/{{ $album->id }}">
						<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 fadeInDown wow">
							<div class="card type-1 background-primary">
								<div class="top background-accent">
								</div>
								<div class="image">
									
									<img class="" src="/images/{{ $album->photos()[0]->type }}/{{ $album->photos()[0]->model_id }}/1x1/{{ $album->photos()[0]->filename }}">
									
								</div>
								<div class="information">
									<h4> {{ $album->title }} </h4>
									<p>
										{{ str_limit($album->body, 135) }}
									</p>
								</div>
							</div>
						</div>
					</a>
				@endif
			@endforeach
		</div>
	</div>
@stop