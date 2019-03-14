@extends('layouts.master')

@section('content')
    @foreach($lists as $list)
        <a href="/lists/{{ $list->id }}">
            <li>{{ $list->title }}</li>
        </a>
        <button><a href="/lists/{{ $list->id }}/edit">Edit list</a></button>
        <form method="POST" action="/lists/{{ $list->id }}">
            @csrf
            @method('DELETE')
            <button class="submit">Delete list</button>
        </form>
    @endforeach
    <button><a href="/lists/create">Create new list</a></button>
@endsection
