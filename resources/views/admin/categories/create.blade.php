@extends('layouts.app')

@section('pagetitle')
    Crea Categoria
@endsection

@section('content')
    <div class="container">
        <form action="{{ route('admin.categories.store') }}" method="post">
            @csrf
            <div class="form-group mb-4">
                <label for="name">Nome</label>
                <input type="text" class="form-control mb-2" id="name" name="name" placeholder="Nome"
                    value="{{ old('name') }}">
                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mb-4">
                <label for="description">Descrizione Categoria</label>
                <input type="text" class="form-control mb-2" id="description" name="description" placeholder="description"
                    value="{{ old('description') }}">
                @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
