@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
            <div class="card card-default">
                <div class="card-header">Módulo Atleta</div>

                <div class="card-body">
                    <a href="{{ route('cadastrarAtleta') }}">Cadastrar Atleta</a>
                    <!--a href="{{ route('GerenciarAtleta') }}">Gerenciar Atletas</a-->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
