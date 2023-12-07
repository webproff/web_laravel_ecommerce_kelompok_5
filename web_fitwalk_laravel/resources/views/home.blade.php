@extends('layoud.main')

@section('container')
    <div class="mt-5"><form action="/archon" class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" name="search" value="{{ request('search') }}">
        <button class="btn btn-outline-success" type="submit">Search</button>
    </form></div>
@endsection