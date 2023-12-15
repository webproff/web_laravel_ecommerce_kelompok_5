@extends('layoud.main')

@section('container')
    <div class="mx-auto d-flex justify-content-center" >

    <article class="col-md-4 mb-5 mt-5 " >
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
        <p class="btn-holder"><a href="{{ route('add_to_cart', $post->id) }}" class="btn btn-primary btn-block text-center" role="button">Add to cart</a> </p>
                        
        <p class="btn-holder"><a href="{{ route('add_to_Wish', $post->id) }}" class="btn btn-primary btn-block text-center" role="button">Add to wishlist</a> </p>

        <a href="/archon">Back</a>
    </article>

    {{-- <form action="{{ route('cart.add') }}" method="post">
        @csrf
    
        <input type="hidden" name="poster_id" value="{{ $post->id }}"> --}}
    
        {{-- <div class="form-group">
            <label for="quantity">Quantity</label>
            <input type="number" name="quantity" id="quantity" class="form-control" value="1">
        </div> --}}
    
        {{-- <button type="submit" class="btn btn-primary">Add to Cart</button>
        </form> --}}
    
    </div>
@endsection