@extends('layoud.main')

@section('container')
	<h1 class="mb-5">Seller: {{ $User }}</h1>

    @if ($poster->count())
    <div class="container">
        <div class="row">
            @foreach ($poster as $post)
            <div class="col-md-4 mt-5">
                <div class="card" style="width: 20rem;"><a href="/archon/{{ $post->slug }}" class="text-decoration-none text-dark">
                    <img src="https://source.unsplash.com/500x400/?shoe" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <small>
                    <p>
                        <h5>Rp.{{ $post->price }}</h5>
                        Category: {{ $post->category->name }}
                        <br>
                        Seller:   {{ $post->toko }}
                        <br>
                        rating: {{ $post->rating }} | sold: {{ $post->sold }}
                        <br>
                        <p class="btn-holder"><a href="{{ route('add_to_cart', $post->id) }}" class="btn btn-primary btn-block text-center" role="button">Add to cart</a> </p>
                    </p>        
                    </small>
                    </div>
                </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    @else    
    <p class="text-center fs-4">No product.</p>
    @endif






















    {{-- @foreach ($poster as $post)
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
    @endforeach --}}

@endsection