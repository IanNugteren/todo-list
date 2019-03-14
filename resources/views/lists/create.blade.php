@extends('layouts.master')

@section('content')
    <h1>Make new list</h1>
    <form method="POST" action="/lists">
        @csrf

        <h2>Project title</h2>
        <input type="text" name="title" value="{{ old('title')}}">

        <button type="submit">Submit list</button>
    </form>

    @include('layouts.errors')
@endsection
