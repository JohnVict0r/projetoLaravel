@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Listagem dos atletas</div>

                    <div class="card-body">
                        @forelse($atletas as $atleta)
                            <p>{{$atleta->nome}} | Idade: {{$atleta->idade}} | Nº Títulos : {{$atleta->titulos}}</p>
                            <hr>
                        @empty
                            Não há atletas cadastrados
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection