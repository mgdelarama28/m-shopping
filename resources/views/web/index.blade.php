@extends('web.layouts.app')

@section('styles')
	<link rel="stylesheet" type="text/css" href="{{ asset('js/web/slick-1.8.0/slick.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/web/main_styles.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/web/responsive.css') }}">
@endsection

@section('content')
		<!-- Banner -->
		@include('web.partials.banner')

		<!-- Characteristics -->
		@include('web.partials.characteristics')

		<!-- Deals of the week -->
		@include('web.partials.deals_of_the_week')

		<!-- Popular Categories -->
		@include('web.partials.popular_categories')

		<!-- Banner -->
		@include('web.partials.banner2')

		<!-- Hot New Arrivals -->
		@include('web.partials.new_arrivals')

		<!-- Best Sellers -->
		@include('web.partials.bestsellers')

		<!-- Ads -->
		@include('web.partials.advertisements')

		<!-- Trends -->
		@include('web.partials.trends')

		<!-- Reviews -->
		@include('web.partials.reviews')

		<!-- Recently Viewed -->
		@include('web.partials.recently_viewed')

		<!-- Brands -->
		@include('web.partials.brands')
@endsection

@section('scripts')
	<script src="{{ asset('js/web/slick-1.8.0/slick.js') }}"></script>
	<script src="{{ asset('js/web/custom.js') }}"></script>
@endsection