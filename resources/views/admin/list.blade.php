@extends('layouts.admin')
@section('title', 'lista de treinadores')

@section('title-page', 'Lista de treinadores')


@section('api')
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
@endsection
@section('button')
<a id="add-button" class="btn btn-primary" href="#" role="button">Adicionar Treinador</a>
@endsection  

