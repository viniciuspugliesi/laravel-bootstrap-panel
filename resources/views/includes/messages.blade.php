@if ($errors->all())
    <div class="alert alert--danger alert-dismissible" role="alert">
        <button class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
        <strong>Erro!</strong> {{ $errors->first() }}
    </div>
@elseif (Session::has('error'))
    <div class="alert alert--danger alert-dismissible" role="alert">
        <button class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
        <strong>Erro!</strong> {{ Session::get('error') }}
    </div>
@elseif (Session::has('success'))
    <div class="alert alert--success alert-dismissible" role="alert">
        <button class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
        <strong>Sucesso!</strong> {{ Session::get('success') }}
    </div>
@elseif (Session::has('info'))
    <div class="alert alert--info alert-dismissible" role="alert">
        <button class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
        {{ Session::get('info') }}
    </div>
@elseif (Session::has('warning'))
    <div class="alert alert--warning alert-dismissible" role="alert">
        <button class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
        <strong>Atenção!</strong> {{ Session::get('warning') }}
    </div>
@endif
