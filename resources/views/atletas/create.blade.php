@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <form action="{{route('atleta.store')}}" method="post" class="form">
                @csrf

                <label for="nome" class="col-md-12 col-form-label text-md-left">Nome</label>
                <div class="col-md-12">
                    <input id="nome" type="text" placeholder="Nome  do atetla" class="form-control{{ $errors->has('nome') ? ' is-invalid' : '' }}" name="nome" value="{{ old('nome') }}" required autofocus>
                </div>

                <label for="idade" class="col-md-12 col-form-label text-md-left">Idade</label>
                <div class="col-md-12">
                    <input id="idade" type="number" placeholder="Idade do atleta" class="form-control" name="idade" required> </input>
                </div>

                <label for="titulos" class="col-md-12 col-form-label text-md-left">Nº Títulos</label>
                <div class="col-md-12">
                    <input id="titulos" type="number" placeholder="Idade do atleta" class="form-control" name="titulos" required> </input>
                </div>

                <br>

                <div class="col-md-6">
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                </div>
            </form>
        </div>
    </div>
@endsection


