@extends('layout.base')

@section('titulo', 'Cadastrado com Sucesso')

@section('extraheaderlinks')
<link rel="stylesheet" href="/css/style.css">
@endsection

@section('conteudo')
<div class="container">

    <div class="row">
        <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
                <h2>@yield('titulo') </h2>
                <hr class="colorgraph">
                <div class="alert alert-success" role="alert">
                    <h4 class="alert-heading">Sucesso!</h4>
                    <p class="mb-0">O usuario foi cadastrado com sucesso!</p>
                </div>
                <hr class="colorgraph">
                <div class="row">
                    <div class="col-xs-12 col-md-6"><a href="/" class="btn btn-success btn-block btn-lg">Cadastrar Outro Usuario</a>
                    </div>
                </div>
        </div>
    </div>
</div>
@endsection