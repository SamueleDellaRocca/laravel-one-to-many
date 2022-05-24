@extends('layouts.app')

@section('pagetitle')
    Categoria View
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="card col-6">
                <h1 class="text-danger">{{ $category->name }}</h1>

                <p>{{ $category->description }}</p>
                <div class="d-flex justify-content-end w-100 mb-3 gap-3">
                    <a class="btn btn-success text-white mb-2"
                        href="{{ route('admin.categories.edit', $category->id) }}">EDIT</a>
                    <form class="form" action="{{ route('admin.categories.destroy', $category->id) }}"
                        method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger mb-2 text-white">ELIMINA</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
