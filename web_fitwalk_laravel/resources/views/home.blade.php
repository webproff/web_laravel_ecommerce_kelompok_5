@extends('layoud.main')

@section('container')
    <h1>babi kau</h1>
    <h2>{{ $name }}</h2>
    <p>{{ $email }}</p>
    <img src='{{ $image }}' alt="{{ $name }}" width=200>
@endsection