<!DOCTYPE html>
<html lang="en">
<head>
	<title>OneTech</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="OneTech shop project">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	@include('web.partials.styles')
</head>

<body>
	<div class="super_container">
		<!-- Header -->
		<header class="header">
			<!-- Top Bar -->
			@include('web.partials.top_bar')

			<!-- Header Main -->
			@include('web.partials.main_header')
			
			<!-- Main Navigation -->
			@include('web.partials.main_navigation')
			
			<!-- Menu -->
			@include('web.partials.menu')

		</header>
		
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

		<!-- Adverts -->
		@include('web.partials.advertisements')

		<!-- Trends -->
		@include('web.partials.trends')

		<!-- Reviews -->
		@include('web.partials.reviews')

		<!-- Recently Viewed -->
		@include('web.partials.recently_viewed')

		<!-- Brands -->
		@include('web.partials.brands')

		<!-- Newsletter -->
		@include('web.partials.newsletter')

		<!-- Footer -->
		@include('web.partials.footer')

		<!-- Copyright -->
		@include('web.partials.copyright')
	</div>

	@include('web.partials.scripts')
</body>
</html>