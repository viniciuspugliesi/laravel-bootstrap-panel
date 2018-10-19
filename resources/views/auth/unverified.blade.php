@extends('layouts.clear')

@section('title', 'Verificar email')

@section('content')
    <div class="peers ai-s fxw-nw h-100vh">
        <div class="peer peer-greed h-100 pos-r bgr-n bgpX-c bgpY-c bgsz-cv" style="background-image: url('/images/bg.png')">
            <div class="bg-opacity"></div>
        </div>

        <div class="col-12 col-md-4 peer box-login bgc-white pos-r">
            <div class="text-center">
                <img class="logo-img" src="/images/logo.png" alt="Logo" width="200px">
            </div>

            <div class="mT-50">
                <form action="/email-nao-verificado" method="POST">
                    @csrf

                    <h2>Olá {{ $user->name  }},</h2>

                    <h4 class="fw-300 c-grey-900 mB-60">
                        Você ainda não ativou seu cadastro, <button class="btn btn-link p-0 fsz-md">clique aqui</button>
                        para receber um novo email com o link de ativação.
                    </h4>

                    @include('includes.messages')

                    <p class="mT-60">Caso tenha dúvidas, acesse nossa página de ajuda e/ou nossos termos de uso clicando no botão abaixo.</p>
                </form>
            </div>

            <div class="mT-70">
                <ul class="list-inline text-center mB-20">
                    <li class="list-inline-item mX-20 mB-10"><a class="btn btn-outline-primary" href="/logout">Fazer login com outra conta</a></li>
                </ul>

                <hr>

                @include('includes.helpers-list')
            </div>
        </div>
    </div>
@endsection
