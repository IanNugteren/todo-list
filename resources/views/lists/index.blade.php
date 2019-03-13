@extends('layout')

@section('content')
    @foreach($lists as $list)
        <li>{{ $list->title }}</li>
    @endforeach
@endsection
