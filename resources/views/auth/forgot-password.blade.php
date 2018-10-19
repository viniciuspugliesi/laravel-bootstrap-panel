@extends('layouts.clear')

@section('title', 'Esqueceu sua senha')

@section('content')
    <div class="peers ai-s fxw-nw h-100vh">
        <div class="peer peer-greed h-100 pos-r bgr-n bgpX-c bgpY-c bgsz-cv" style="background-image: url('/images/bg.png')">
            <div class="bg-opacity"></div>
        </div>

        <div class="col-12 col-md-4 peer box-login bgc-white pos-r">
            <div class="text-center">
                <img class="logo-img" src="/images/logo.png" alt="Logo" width="200px">
            </div>

            <h4 class="fw-300 c-grey-900 mT-50 mB-60">Esqueceu sua senha? Informe seu email abaixo para gerar uma nova</h4>

            <form action="/esqueceu-sua-senha" method="post">
                @csrf

                <div class="form-group form-group-label">
                    <div class="input-group">
                        <input type="email" class="form-control" name="email" />
                        <label>Insira seu email</label>
                        <div class="input-group-prepend">
                            <div class="input-group-text input-tooltip" data-toggle="tooltip" title="Lorem ipsum dolor sit amet, consetetur sadipscing elitr.">
                                <i class="fas fa-question-circle fa-lg"></i>
                            </div>
                        </div>
                        <div class="form-line"></div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="peers ai-c jc-sb fxw-nw">
                        <div class="peer"></div>
                        <div class="peer">
                            <button class="btn btn-primary text-uppercase">Recuperar senha</button>
                        </div>
                    </div>
                </div>
            </form>

            <div class="mT-70">
                <ul class="list-inline text-center mB-20">
                    <li class="list-inline-item mX-20 mB-10"><a class="btn btn-outline-primary" href="/login">Lembrou a senha? Realizar login</a></li>
                    <li class="list-inline-item mX-20 mB-10"><a class="btn btn-outline-primary" href="/cadastro">Criar conta</a></li>
                </ul>

                <hr>

                @include('includes.helpers-list')
            </div>
        </div>
    </div>
@endsection
