@extends('layout')

@section('content')
    <h1>Notes List</h1>

    <ul class="list-group">
        @foreach($notes as $note)
        <li class="list-group-item">{{ $note->note }}</li>
        @endforeach
    </ul>
@endsection