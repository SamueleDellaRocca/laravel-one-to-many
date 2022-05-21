@extends('layouts.app')

@section('pagetitle')
    Lista Posts
@endsection

@section('content')
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Slug</th>
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
