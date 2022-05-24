@extends('layouts.app')

@section('pagetitle')
    Lista Categorie
@endsection

@section('content')
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <th scope="row">{{ $category->id }}</th>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->description }}</td>
                        <td><a class="btn btn-primary" href="{{ route('admin.categories.show', $category->id) }}">SHOW</a>
                        </td>
                        <td><a class="btn btn-success" href="{{ route('admin.categories.edit', $category->id) }}">EDIT</a>
                    </tr>
                @endforeach
            </tbody>

        </table>
    </div>
@endsection
