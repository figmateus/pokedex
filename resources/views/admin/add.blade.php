@extends('layouts.admin')
@section('title', 'Adicionar treinadores')

@section('title-page', 'Adicionar Treinadores')
@section('content')
    <div id="form-cont" class="container">
        <form id="Form" method="GET">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nome</label>
                <input type="text" class="form-control" id="name">
            </div>
            <div id="age" class="mb-3">
                <label for="age" class="form-label">Idade</label>
                <input type="number" class="form-control" id="age">
            </div>
            <div class="mb-3">
                <label for="regiao" class="form-label">Região</label><br/>
                <select id="regiao" class="form-select">
                    <option selected></option>
                    <option value="Jhoto">Jhoto</option>
                    <option value="Hoenn">Hoenn</option>
                    <option value="Sinnoh">Sinnoh</option>
                    <option value="Kanto">Kanto</option>
                </select>
                
            </div>
              <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        
    </div>
    
@endsection
@section('button')
<a id="add-button" class="btn btn-primary" href="{{route('trainer.list')}}" role="button">Voltar</a>
@endsection