@extends('layouts.admin')
@section('title', 'Adicionar treinadores')

@section('title-page', 'Adicionar Treinadores')
@section('content')
    <div id="form-cont" class="container">
        <form id="Form" method="POST">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nome</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div id="age" class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Idade</label>
                <input type="number" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="regiao" class="form-label">Região</label><br/>
                <select id="regiao" class="form-select" aria-label="Default select example">
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