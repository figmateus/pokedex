@extends('layouts.admin')
@section('title', 'Adicionar Pokemon')
@section('title-page', 'Adicionar pokemon')
@section('content')
    <div id="form-cont" class="container">
        <form id="Form" method="GET" action="{{route('poke.AddAction',['id' => $trainer->id])}}">
            @csrf
            <div class="mb-3">
                <label for="pokeSearch" class="form-label">Digite o nome do Pokemon</label>
                <input type="text" class="form-control" id="pokeSearch">
            </div>
            <button type="submit" class="btn btn-primary">Adicionar</button>
        </form>
    </div>  
@endsection
@section('button')
<a id="add-button" class="btn btn-primary" href="{{route('trainer.TrainerListPoke',['id' =>$trainer->id])}}" role="button">Voltar</a>
@endsection