<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.partials.meta')

    @include('admin.partials.styles')
</head>

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                @yield('content')
            </div>
        </div>
    </div>

    @include('admin.partials.scripts')
</body>
</html>