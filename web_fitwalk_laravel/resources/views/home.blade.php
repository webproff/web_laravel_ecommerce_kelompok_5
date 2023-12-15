@extends('layoud.main')

@section('container')
    <div class="container mt-5">
        
        @if(session('success'))
            <div class="alert alert-success">
            {{ session('success') }}
            </div> 
        @endif

    </div> 



    <div class="mt-5 mx-auto " style="width: 50rem; "><form action="/archon" class="d-flex justify-content-center" role="search" >
        <input class="form-control me-2" type="search" placeholder="Search" name="search" value="{{ request('search') }}">
        <button class="btn btn-outline-success" type="submit">Search</button>
    </form></div>
    {{-- carousel --}}
    <div class="d-flex justify-content-center">
    <div id="carouselExampleAutoplaying" class="carousel slide mt-5 " data-bs-ride="carousel" style="width: 65rem; ">
        <div class="carousel-inner " style="border-radius: 5px">
          <div class="carousel-item active">
            <img src="https://source.unsplash.com/800x400/?shoe" class="d-block w-100" alt="Shoe">
          </div>
          <div class="carousel-item">
            <img src="https://source.unsplash.com/800x400/?boots" class="d-block w-100" alt="Boots">
          </div>
          <div class="carousel-item">
            <img src="https://source.unsplash.com/800x400/?sneaker" class="d-block w-100" alt="Sneaker">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
      {{-- carousel --}}
        

    @if ($product->count())
    <div class="container mt-5">
        <div class="row">
            <h3>For you:</h3>
            @foreach ($product as $post)
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
                        
                        <p class="btn-holder"><a href="{{ route('add_to_Wish', $post->id) }}" class="btn btn-primary btn-block text-center" role="button">Add to wishlist</a> </p>
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
@endsection