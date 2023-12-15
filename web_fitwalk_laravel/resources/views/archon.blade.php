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
    
    @if ($archon->count())
    <div class="container">
        <div class="row">
            @foreach ($archon as $post)
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
    
    



    {{-- @if ($archon->count())
    <div class="card" style="width: 18rem;">
        <img src="https://source.unsplash.com/500x400/?shoe" class="card-img-top" alt="...">
        <div class="card-body">
        <h5 class="card-title"><a href="/archon/{{ $archon[0]->slug }}" class="text-decoration-none">{{ $archon[0]->title }}</a></h5>
        <small>
        <p>
            Category: <a href="/category/{{ $archon[0]->category->slug }}" class="text-decoration-none">{{ $archon[0]->category->name }}</a>
            <br>
            Seller:   <a href="/User/{{ $archon[0]->User->username }}" class="text-decoration-none">{{ $archon[0]->User->name }}</a>
        </p>        
        </small>
        
        </div>
    </div>
    @else    
    <p class="text-center fs-4">No product.</p>
    @endif --}}
    
    {{-- @foreach ($archon as $post)
        <article class="mb-5 border-bottom pb-4">
            <h2>
                <a>{{ $post->title }}</a>
            </h2>
            <p>
            Category: <a href="/category/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a>
            Writer:   <a href="/User/{{ $post->User->username }}" class="text-decoration-none">{{ $post->User->name }}</a>
            </p>
            <h4>{{ $post['ras'] }}</h4>
            <a href="/archon/{{ $post->slug }}" class="text-decoration-none">read more..</a>
        </article>
    @endforeach --}}

    {{-- @if ($archon->count())
    <div class="card" style="width: 18rem;"><a href="/archon/{{ $archon[0]->slug }}" class="text-decoration-none text-dark">
        <img src="https://source.unsplash.com/500x400/?shoe" class="card-img-top" alt="...">
        <div class="card-body">
        <h5 class="card-title">{{ $archon[0]->title }}</h5>
        <small>
        <p>
            <h5>Rp.500.000</h5>
            Category: {{ $archon[0]->category->name }}
            <br>
            Seller:   {{ $archon[0]->User->name }}
            <br>
            rating: 5.0 | sold: 500
        </p>        
        </small>
        </div>
    </a>
    </div>
    @else    
    <p class="text-center fs-4">No product.</p>
    @endif --}}
@endsection