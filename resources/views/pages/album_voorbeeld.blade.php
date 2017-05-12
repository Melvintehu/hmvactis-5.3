@extends('master')

@section('title')
	Foto's
@stop

@section('content')
	<div class="container no-overflow">
		<div class="row">
			<h1 class="space-outside-lg xs-text-center"> {{ $album->title }} </h1>
		</div>

		<div class="row row-centered text-white">
			@foreach($album->photos() as $photo)
				<div class="col-lg-3  fadeInDown wow ">
					<div class="image">
						<a href='/images/{{ $photo->type }}/{{ $photo->model_id }}/{{ $photo->filename}}' data-gallery="album" data-toggle="lightbox">
							<img class="" src="/images/{{ $photo->type }}/{{ $photo->model_id }}/1x1/{{ $photo->filename }}">
						</a>
					</div>
				</div>
			@endforeach
		</div>

		<div class="row">
			<div class="col-lg-12 xs-text-center fadeInDown wow">
				<a href='/albums' class="btn-standard bg-main text-color-light space-outside-md block"> Ga terug </a>
			</div>
		</div>
	</div>
@stop