@extends('layoud.main')

@section('container')
    
    <article class="mb-5">
        <img src="https://source.unsplash.com/500x400/?shoe" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <small>
                    <p>
                        <h5>Rp.500.000</h5>
                        Category: {{ $post->category->name }}
                        <br>
                        Seller:   {{ $post->User->name }}
                        <br>
                        rating: 5.0 | sold: 500
                    </p>        
                    </small>
                    </div>
        <h4>{{ $post->ras }}</h4>
        {!! $post->gender !!}
    </article>
    <a href="/archon">balik aja</a>
@endsection