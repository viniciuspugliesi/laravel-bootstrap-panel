@if ($errors->all())
    <div class="alert alert-danger alert-dismissible fade in" role="alert">
        <button class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
        <strong>Ops!</strong> {{ $errors->first() }}
    </div>
@elseif (Session::has('error'))
    <div class="alert alert-danger alert-dismissible fade in" role="alert">
        <button class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
        <strong>Ops!</strong> {{ Session::get('error') }}
    </div>
@elseif (Session::has('success'))
    <div class="alert alert-warning alert-dismissible fade in" role="alert">
        <button class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
        {{ Session::get('success') }}
    </div>
@endif