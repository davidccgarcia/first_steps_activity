@extends('layout')

@section('content')
    <h1>Notes details</h1>

    <ul class="list-group">
        <li class="list-group-item">
            {{ $note->note}} 
        </li>
    </ul>
@endsection()