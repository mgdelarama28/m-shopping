<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.partials.meta')

    @include('admin.partials.styles')
</head>

<body class="animsition">
    <div class="page-wrapper">
        @include('admin.partials.sidebar')

        <div class="page-container2" style="height: 100vh;">
            @include('admin.partials.header')

            @include('admin.partials.breadcrumb')

            @yield('content')

        </div>
    </div>

    @include('admin.partials.scripts')
</body>
</html>
