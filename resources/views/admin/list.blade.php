@extends('layouts.admin')
@section('title', 'lista de treinadores')
@section('content')
    <div id="main-container" class="container-fluid big-banner d-flex flex-column align-items-center">
        <div class="d-flex justify-content-center">
            <div id="title">
                <h1>
                    Lista de Treinadores
                </h1>
            </div>
        </div>
        <div id="cardItens" class="container-sm d-flex flex-row align-items-start">
            <div class="container d-flex">
                @foreach ($list as $item)
                    <div id="items-list" class="container-sm" style="background-color: #889EAF; color: #FFF;">
                        {{ $item->name }}<br />
                        Região: {{ $item->region }}<br />
                        Idade: {{ $item->age }}<br />
                        <a class="btn btn-primary btn-sm" href="#" role="button">Lista de Pokemons</a>
                        <a class="btn btn-primary btn-sm" href="#" role="button">Editar Treinador</a>
                        <a class="btn btn-primary btn-sm" href="#" role="button">Deletar Treinador</a>
                    </div>
                @endforeach
            </div>
        </div>
        <a id="add-button" class="btn btn-primary" href="#" role="button">Adicionar Treinador</a>
    </div>
    


@endsection
