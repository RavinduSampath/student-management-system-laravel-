@extends('layouts.app')

@section('title', 'Posts')

@section('content')
<h1>All students</h1>
<a href="{{ route('students.create') }}">Create New Post</a>
<ul>
    @foreach($students as $post)
        <li>
            <strong>{{ $post->title }}</strong>
            <a href="{{ route('students.edit', $post->id) }}">Edit</a>
            <form action="{{ route('students.destroy', $post->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </li>
    @endforeach
</ul>
@endsection
