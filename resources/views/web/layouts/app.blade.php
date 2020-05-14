<!DOCTYPE html>
<html lang="en">
<head>
    @include('web.partials.meta')

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

        @yield('content')
        
        @include('web.partials.newsletter')

        @include('web.partials.footer')

        @include('web.partials.copyright')
    </div>
    
    @include('web.partials.scripts')
</body>
</html>