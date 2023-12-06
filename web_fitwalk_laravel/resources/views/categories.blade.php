@extends('layoud.main')

@section('container')
	<h1 class="mb-5">poster categories</h1>
    @foreach ($categories as $category)
        <article class="mb-5">
        <ul>
            <li>
                <h2>
                    <a href="/category/{{ $category->slug }}"> {{ $category->name }}</a>
                </h2>
            </li>
        </ul>
        </article>
    @endforeach
@endsection