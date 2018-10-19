@extends('layouts.clear')

@section('title', 'Login')

@section('content')
    <div class="peers ai-s fxw-nw h-100vh">
        <div class="peer peer-greed h-100 pos-r bgr-n bgpX-c bgpY-c bgsz-cv" style="background-image: url('/images/bg.png')">
            <div class="bg-opacity"></div>
        </div>

        <div class="col-12 col-md-4 peer box-login bgc-white pos-r">
            <div>
                <div class="text-center">
                    <img class="logo-img" src="/images/logo.png" alt="Logo" title="Logo" width="200px">
                </div>

                <h4 class="fw-300 c-grey-900 mT-50 mB-60">Bem vindo ao sistema. Faça login para acessa-lo.</h4>

                @include('includes.messages')

                <form action="/login" method="post">
                    @csrf

                    <div class="form-group form-group-label">
                        <div class="input-group">
                            <input type="email" name="email" value="{{ old('email') }}" class="form-control" />
                            <label>Insira seu email</label>
                            <div class="input-group-prepend">
                                <div class="input-group-text input-tooltip" data-toggle="tooltip" title="Lorem ipsum dolor sit amet, consetetur sadipscing elitr.">
                                    <i class="fas fa-question-circle fa-lg"></i>
                                </div>
                            </div>
                            <div class="form-line"></div>
                        </div>
                    </div>

                    <div class="form-group form-group-label">
                        <div class="input-group">
                            <input type="password" name="password" class="form-control">
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
                            <div class="peer">
                                <div class="checkbox checkbox-circle checkbox-info peers ai-c">
                                    <input type="checkbox" name="remember" id="remember" class="peer" {{ old('remember') ? 'checked' : '' }}>
                                    <label for="remember" class="peers peer-greed js-sb ai-c">
                                        <span class="peer peer-greed">Manter-me conectado</span>
                                    </label>
                                </div>
                            </div>
                            <div class="peer">
                                <button class="btn btn-primary text-uppercase">Realizar login</button>
                            </div>
                        </div>
                    </div>
                </form>

                <div class="mT-70 mB-10">
                    <ul class="list-inline text-center mB-20">
                        <li class="list-inline-item mX-20 mB-10"><a class="btn btn-outline-primary" href="/esqueceu-sua-senha">Esqueceu sua senha?</a></li>
                        <li class="list-inline-item mX-20 mB-10"><a class="btn btn-outline-primary" href="/cadastro">Criar conta</a></li>
                    </ul>

                    <hr>

                    @include('includes.helpers-list')
                </div>
            </div>
        </div>
    </div>
@endsection
