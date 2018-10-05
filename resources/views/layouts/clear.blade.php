<!DOCTYPE html>
<html>
<head>
    @include('includes.head')
</head>
<body>
    <div class="app" id="app">
        @yield('content')
    </div>

    @include('includes.scripts')
    @yield('js')
</body>
</html>
