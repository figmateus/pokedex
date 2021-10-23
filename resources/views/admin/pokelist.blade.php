@extends('layouts.admin')
@section('title', 'lista de Pokemons')

@section('title-page', 'Lista de Pokemons')


@section('content')
<div id="items-list" class="container-sm" style="background-color: #889EAF; color: #FFF;">
   ...
   
    <a class="btn btn-primary btn-sm" href="#" role="button">Deletar Pokemon</a>
</div>
@endsection
@section('button')
<a id="add-button" class="btn btn-primary" href="{{route('trainer.list')}}" role="button">Adicionar Pokemon</a>
<a id="add-button" class="btn btn-primary" href="{{route('trainer.list')}}" role="button">Voltar</a>
@endsection  

