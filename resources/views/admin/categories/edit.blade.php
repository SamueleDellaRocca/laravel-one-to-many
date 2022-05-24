@extends('layouts.app')

@section('pagetitle')
    Edita Categoria
@endsection

@section('content')
    <div class="container">
        <form action="{{ route('admin.categories.update', $category->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group mb-4">
                <label for="name">Nome</label>
                <input type="text" class="form-control mb-2" id="name" name="name" placeholder="Nome"
                    value="{{ old('name', $category->name) }}">
                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mb-4">
                <label for="description">Descrizione Categoria</label>
                <input type="text" class="form-control mb-2" id="description" name="description" placeholder="description"
                    value="{{ old('description', $category->description) }}">
                @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
