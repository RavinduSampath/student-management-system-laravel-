@extends('layouts.app')

@section('title', 'Students')

@section('content')
<h1>Students List</h1>

@if(count($students) > 0)
    <ul>
        @foreach($students as $student)
            <li>{{ $student->name }} - {{ $student->email }}</li>
        @endforeach
    </ul>
@else
    <p>No students found.</p>
@endif
@endsection
