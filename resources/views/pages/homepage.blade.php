@extends('master')

@section('banner')
	@include('partials.banner')
@stop

@section('title')
	Homepage
@stop

@section('content')

	@include('pages.partials.flashmessage-registration-succeeded')
	@include('pages.partials.news.latest-news')
	@include('pages.partials.events.activities-current-month')
	@include('pages.partials.about.about')
	@include('pages.partials.partners.partners-slider')

@stop