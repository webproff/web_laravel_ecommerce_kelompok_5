@extends('layoud.main')

@section('container')
	<h1 class="mb-5">poster category: {{ $category }}</h1>
    @foreach ($poster as $post)
        <article class="mb-5">
            <h2>
                <a href="/archon/{{ $post->slug }}">by: {{ $post->title }}</a>
            </h2>
            <p>by anto <a href="/category/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
            <h4>{{ $post['ras'] }}</h4>
            <h5>{{ $post['gender'] }}</h5>
        </article>
    @endforeach
@endsection