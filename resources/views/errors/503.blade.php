@extends('layouts.clear')

@section('title', 'Service Unavailable')

@section('content')
    <div class='pos-a t-0 l-0 bgc-white w-100 h-100 d-f fxd-r fxw-w ai-c jc-c pos-r p-30'>
        <div>
            <img class="error-img" alt='503' src='/images/500.png'/>
        </div>

        <div class='d-f jc-c fxd-c'>
            <h1 class='mB-30 fw-900 lh-1 c-red-500' style="font-size: 60px;">503</h1>
            <h3 class='mB-10 fsz-lg c-grey-900 tt-c'>Service Unavailable</h3>
            <p class='mB-30 fsz-def c-grey-700'>We are currently in maintenance, sorry for the inconvenience.</p>
        </div>
    </div>
@endsection
