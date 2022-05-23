@extends('layouts.app')

@section('pagetitle')
    Lista Posts
@endsection

@section('content')
    <div class="container">
        <form action="" method="get" class="row g-3 mb-3">
            <div>
                <label for="search-string" class="form-label">{{ __('Stringa di ricerca') }}</label>
                <input type="text" class="form-control" id="search-string" name="s" value="{{ $request->s }}">
            </div>

            <div>
                <select class="form-select" aria-label="Default select example" name="category" id="category">
                    <option value="" selected>Select a category</option>

                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" @if ($category->id == $request->category) selected @endif>
                            {{ $category->name }}</option>
                    @endforeach
                </select>
            </div>

            <div>
                <select class="form-select" aria-label="Default select example" name="author" id="author">
                    <option value="" selected>Select an author</option>

                    @foreach ($users as $user)
                        <option value="{{ $user->id }}" @if ($user->id == $request->author) selected @endif>
                            {{ $user->name }}</option>
                    @endforeach
                </select>
            </div>

            <div>
                <button class="btn btn-primary">Applica filtri</button>
            </div>
        </form>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Slug</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Created at</th>
                    <th scope="col">updated at</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <th scope="row">{{ $post->id }}</th>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->slug }}</td>
                        <td>{{ $post->category->name }}</td>
                        <td>{{ $post->created_at }}</td>
                        <td>{{ $post->updated_at }}</td>
                        <td><a class="btn btn-primary" href="{{ route('admin.posts.show', $post->slug) }}">SHOW</a></td>
                        @if (Auth::user()->id === $post->user_id)
                            <td><a class="btn btn-success" href="{{ route('admin.posts.edit', $post->slug) }}">EDIT</a>
                            </td>
                        @endif
                    </tr>
                @endforeach
            </tbody>

        </table>
        {{ $posts->links() }}
    </div>
@endsection
