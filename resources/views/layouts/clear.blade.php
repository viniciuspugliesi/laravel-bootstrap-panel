<!DOCTYPE html>
<html>
<head>
    @include('includes.head')
</head>
<body>
    <div class="app" id="app">
        @yield('content')
    </div>

    @yield('js')
</body>
</html>
