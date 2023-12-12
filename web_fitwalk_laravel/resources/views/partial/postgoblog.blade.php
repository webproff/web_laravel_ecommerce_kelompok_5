@extends('layoud.main')

@section('container')
    <article class="col-md-4 mb-5 mt-5">
        <img src="https://source.unsplash.com/500x400/?shoe" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <small>
                    <p>
                        <h5>Rp.{{ $post->price }}</h5> 
                        Category: <a href="/category/{{ $post->category->slug }}">{{ $post->category->name }}</a>
                        <br>
                        Seller:   <a href="/User/{{ $post->User->username }}">{{ $post->User->name }}</a>
                        <br>
                        rating: {{ $post->rating }} | sold: {{ $post->sold }}
                    </p>        
                    </small>
                    </div>
        <h6>Description: {{ $post->description }}</h6>
        {!! $post->gender !!}
    </article>
    <a class="btn btn-primary" href="#" role="button">wishlist</a>

    <form action="{{ route('cart.add') }}" method="post">
        @csrf
    
        <input type="hidden" name="poster_id" value="{{ $post->id }}">
    
        {{-- <div class="form-group">
            <label for="quantity">Quantity</label>
            <input type="number" name="quantity" id="quantity" class="form-control" value="1">
        </div> --}}
    
        <button type="submit" class="btn btn-primary">Add to Cart</button>
    </form>
    
    <br>
    <a href="/archon">balik aja</a>
@endsection