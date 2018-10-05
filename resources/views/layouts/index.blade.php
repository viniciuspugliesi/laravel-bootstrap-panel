<!DOCTYPE html>
<html>
<head>
    @include('includes.head')
</head>
<body>
    <div class="app" id="app">
        <menu-component></menu-component>

        <div class="page-container">
            <header-component></header-component>

            <main class='main-content bgc-grey-100'>
                <div>
                    <div class="full-container">

                        @yield('content')

                    </div>
                </div>
            </main>

            @include('includes.footer')
        </div>
    </div>

    @include('includes.scripts')
    @yield('js')
</body>
</html>
