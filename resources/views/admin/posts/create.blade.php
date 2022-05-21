@extends('layouts.app')

@section('pagetitle')
    Crea Post
@endsection

@section('content')
    <div class="container">
        <form action="{{ route('admin.posts.store') }}" method="post">
            @csrf
            <div class="form-group mb-4">
                <label for="title">Titolo</label>
                <input type="text" class="form-control mb-2" id="title" name="title" placeholder="Titolo"
                    value="{{ old('title') }}">
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mb-4">
                <label for="slug">Slug</label>
                <input type="text" class="form-control mb-2" id="slug" name="slug" placeholder="Slug"
                    value="{{ old('slug') }}">
                @error('slug')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mb-4">
                <label for="content">Content</label>
                <textarea class="form-control mb-2" id="content" name="content" placeholder="Content"
                    rows="5">{{ old('content') }}</textarea>
                @error('content')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-success">CREA NUOVO POST</button>
        </form>
    </div>
@endsection
