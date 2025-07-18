@extends('layouts.app')

@section('title', 'Create Post')

@section('content')
<h1>Create Post</h1>
<form action="{{ route('students.store') }}" method="POST">
    @csrf
    <input type="text" name="title" placeholder="Title"><br>
    <textarea name="content" placeholder="Content"></textarea><br>
    <button type="submit">Save</button>
</form>
@endsection
