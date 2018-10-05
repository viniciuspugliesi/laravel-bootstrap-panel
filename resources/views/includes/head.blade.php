<!-- METAS -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta http-equiv="Cache-Control: max-age=3600, must-revalidate" />
<meta http-equiv="Content-Language" content="pt-br, en">

<meta name="csrf-token" content="{{ csrf_token() }}">

<!-- FAVICON -->
<link rel="icon" href="/images/favicon.ico" type="image/x-icon" />

<title>@yield('title')</title>

<link href="/css/app.css" rel="stylesheet">

@yield('css')
