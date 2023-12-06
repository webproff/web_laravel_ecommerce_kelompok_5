@extends('layoud.main')

@section('container')
    
    <article class="mb-5">
        <h2>{{ $post->title }}</h2>
        <h4>{{ $post->ras }}</h4>
        {!! $post->gender !!}
    </article>
    <a href="/archon">balik aja</a>
@endsection