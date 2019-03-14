@extends('layouts.master')

@section('content')
    <form method="POST" action="/lists/{{ $list->id }}">
        @csrf
        @method('PATCH')
        <h1>Edit list</h1>

        <h2>List title</h2>
        <input type="text" name="title" value="{{ $list->title }}">

        <button type="submit">Submit project</button>

    </form>
    @include('layouts.errors')
@endsection
