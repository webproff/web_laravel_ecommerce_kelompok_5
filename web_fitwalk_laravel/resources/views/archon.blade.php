@extends('layoud.main')

@section('container')
    @foreach ($archon as $post)
        <article class="mb-5 border-bottom pb-4">
            <h2>
                <a>{{ $post->title }}</a>
            </h2>
            <p>Category: <a href="/category/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
            <h4>{{ $post['ras'] }}</h4>
            <a href="/archon/{{ $post->slug }}" class="text-decoration-none">read more..</a>
        </article>
    @endforeach
@endsection