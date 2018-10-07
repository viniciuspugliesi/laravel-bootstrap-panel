@extends('layouts.clear')

@section('title', 'Cadastro')

@section('content')
    <div class="peers ai-s fxw-nw h-100vh">
        <div class="peer peer-greed h-100 pos-r bgr-n bgpX-c bgpY-c bgsz-cv" style="background-image: url('/images/bg.png')">
            <div class="bg-opacity"></div>
        </div>

        <div class="col-12 col-md-4 peer pX-40 pY-90 h-100 bgc-white scrollable pos-r" style='min-width: 450px;'>
            <div class="text-center">
                <img class="logo-img" src="/images/logo.png" alt="Logo" title="Logo" width="200px">
            </div>

            <h4 class="fw-300 c-grey-900 mT-50 mB-60">Preencha os dados abaixo para realizar seu cadastro no sistema.</h4>

            <form action="/cadastro" method="post">
                @csrf

                <div class="form-group form-group-label">
                    <input type="email" class="form-control" name="email" />
                    <label>Insira seu email</label>
                    <div class="form-line"></div>
                </div>

                <div class="form-group form-group-label">
                    <div class="input-group">
                        <input type="password" class="form-control">
                        <label>Insira sua senha</label>
                        <div class="input-group-prepend">
                            <div class="input-group-text input-password">
                                <i class="far fa-eye-slash fa-lg"></i>
                            </div>
                        </div>
                        <div class="form-line"></div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="peers ai-c jc-sb fxw-nw">
                        <div class="peer"></div>
                        <div class="peer">
                            <button class="btn btn-primary text-uppercase">Realizar cadastro</button>
                        </div>
                    </div>
                </div>
            </form>

            <div class="mT-70">
                <ul class="list-inline text-center mB-20">
                    <li class="list-inline-item mX-20"><a class="btn btn-outline-primary" href="/login">Já possui cadastro? Realizar login</a></li>
                </ul>

                <hr>

                <ul class="list-inline text-center mT-30">
                    <li class="list-inline-item mX-20"><a class="btn btn-link" href="#">Ajuda</a></li>
                    <li class="list-inline-item mX-20"><a class="btn btn-link" href="#">Privacidade</a></li>
                    <li class="list-inline-item mX-20"><a class="btn btn-link" href="#">Termos de uso</a></li>
                </ul>
            </div>
        </div>
    </div>
@endsection
