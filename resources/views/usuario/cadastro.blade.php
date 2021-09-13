@extends('layout.base')

@section('titulo', 'Cadastrar Usuario')

@section('extraheaderlinks')
<link rel="stylesheet" href="/css/style.css">
@endsection

@section('conteudo')
<div class="container">

    <div class="row">
        <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
            <form role="form" method="post" action="/salvar">
                {{ csrf_field() }}
                <h2>@yield('titulo') <small>Complete os dados para continuar.</small></h2>
                <hr class="colorgraph">
                @if($errors->any())
                <div class="alert alert-danger" role="alert">
                    <h4 class="alert-heading">Oops... Ocorreram os seguintes erros:</h4>
                    @foreach($errors->all() as $error => $value)
                    <p class="mb-0">• {{ $value }}
                    </p>
                    @endforeach
                </div>
                @endif
                <div class="form-group">
                    <input type="text" class="form-control input-lg" placeholder="Nome" name="nome" id="nome"
                        tabindex="3">
                </div>
                <div class="form-group">
                    <input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email"
                        tabindex="4">
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="form-group">
                            <input type="password" name="senha" id="senha" class="form-control input-lg"
                                placeholder="Senha" tabindex="5">
                        </div>
                    </div>
                </div>
                <hr class="colorgraph">
                <div class="row">
                    <div class="col-xs-12 col-md-12"><input type="submit" value="Cadastrar"
                            class="btn btn-primary btn-block btn-lg" tabindex="7"></div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection