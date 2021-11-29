@extends('layouts.admin')
@section('title', 'lista de Pokemons')

@section('title-page', 'Lista de Pokemons')


@section('content')
    @foreach ($pokemon as $poke)
        <div id="items-list" class="card mb-4" style="background-color: #889EAF; color: #FFF;">
            <div class="card-body d-flex flex-column justify-content-center align-items-center">
            <img src="{{$poke->image_url}}" alt="poke image">
                Nome: {{$poke->name}}<br/>
                Tipo: {{$poke->type}}<br/>
            <a class="btn btn-primary btn-sm" href="{{ route('poke.delete', ['id' => $trainer->id, 'pokeId' => $poke->id]) }}" role="button">Deletar Pokemon</a>
            </div>
        </div>
    @endforeach
@endsection
@section('button')
    <a id="add-button" class="btn btn-primary" href="{{ route('poke.Add', ['id' => $trainer->id]) }}" role="button">Adicionar
        Pokemon</a>
    <a id="add-button" class="btn btn-primary" href="{{ route('trainer.list') }}" role="button">Voltar</a>
@endsection
