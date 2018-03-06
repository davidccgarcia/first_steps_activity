@extends('layout')

@section('content')
    <h1>Notes List</h1>
    <br>
    <a href="{{ url('notes/create') }}" class="btn btn-primary">Add a note</a>
    <br><br>

    <ul class="list-group">
        @foreach($notes as $note)
        <li class="list-group-item">{{ $note->note }}</li>
        @endforeach
    </ul>
@endsection