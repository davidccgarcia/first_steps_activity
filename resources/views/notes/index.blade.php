@extends('layout')

@section('content')
    <h1>Notes List</h1>
    <br>
    <a href="{{ url('notes/create') }}" class="btn btn-primary">Add a note</a>
    <br><br>

    <ul class="list-group">
        @foreach($notes as $note)
        <li class="list-group-item">
            <span class="label label-info">{{ $note->category->name }}</span> 
            {{ $note->note }}
        </li>
        @endforeach
    </ul>
    {!! $notes->render() !!}
@endsection