@extends('master')

@section('title')
	De vereniging en het bestuur
@stop

@section('content')

	@include('pages.partials.about.about-hmvactis')
	@include('pages.partials.about.boards')
	<div class="space-outside-down-md">
		@include('pages.partials.news.latest-news')
	</div>

@stop