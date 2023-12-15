@extends('layoud.main')

@section('container')
    <table id="cart" class="table table-hover table-condensed">
    <thead>
        <tr>
            <th style="width:50%">Product</th>
            <th style="width:40%">Price</th>

            <th style="width:10%"></th>
        </tr>
    </thead>
    <div class="container mt-5">
    
        @if(session('success'))
            <div class="alert alert-success">
            {{ session('success') }}
            </div> 
        @endif
    
    </div>
    <tbody>
        @if(session('wishlist'))
            @foreach(session('wishlist') as $id => $details)
                <tr data-id="{{ $id }}">
                    <td data-th="Product">
                        <div class="row">
                            <div class="col-sm-9">
                                <h4 class="nomargin">{{ $details['title'] }}</h4>
                            </div>
                        </div>
                    </td>
                    <td data-th="Price">Rp{{ $details['price'] }}</td>
                    <td class="actions" data-th="" >

                        <form action="{{ route('remove_from_wish', $id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" value="delete">Remove item</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        @endif
    </tbody>
    <tfoot>
        <tr>
            <td colspan="5" class="text-right">
                <a href="{{ url('/') }}" class="btn btn-success"> <i class="fa fa-arrow-left"></i> Continue Shopping</a>
            </td>
        </tr>
    </tfoot>
</table>
@endsection