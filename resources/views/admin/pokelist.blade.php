@extends('layouts.admin')
@section('title', 'lista de Pokemons')

@section('title-page', 'Lista de Pokemons')


@section('content')
@foreach ($pokemon as $poke)
<div id="items-list" class="container-sm" style="background-color: #889EAF; color: #FFF;">
    Nome: {{ $poke->name }}<br/>
    Tipo: {{$poke->type}}  
    <a class="btn btn-primary btn-sm" href="#" role="button">Deletar Pokemon</a>
</div>
@endforeach
@endsection
@section('button')
<a id="add-button" class="btn btn-primary" href="{{route('poke.Add',['id' => $trainer->id])}}" role="button">Adicionar Pokemon</a>
<a id="add-button" class="btn btn-primary" href="{{route('trainer.list')}}" role="button">Voltar</a>
@endsection  

