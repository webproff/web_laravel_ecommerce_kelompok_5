@extends('layoud.main')

@section('container')
	<h1 class="mb-5">poster user: {{ $User }}</h1>
    @foreach ($poster as $post)
        <article class="mb-5">
            <h2>
                <a href="/archon/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a>
            </h2>
            <p>
                Category: <a href="/category/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a>
                Writer:   <a href="/User/{{ $post->User->username }}" class="text-decoration-none">{{ $post->User->name }}</a>
                </p>
            <h4>{{ $post['ras'] }}</h4>
            <h5>{{ $post['gender'] }}</h5>
        </article>
    @endforeach
@endsection