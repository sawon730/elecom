@extends('seller.layouts.layout')
@section('seller_page_title')
<<<<<<< HEAD
<<<<<<< HEAD
Seller Manage Product
@endsection

@section('seller_layout')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">All Product Created By You</h5>
            </div>
            @if(session('message'))
            <div class="alert alert-success my-2">
                {{session('message')}}
            </div>
            @endif
           <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Product Name</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                            <tr>
                                <td>{{$product->id}}</td>
                                <td>{{$product->product_name}}</td>
                                <td>{{$product->stock_quantity}}</td>
                                <td>{{$product->regular_price}}</td>
                                <td>
                                    <a href="" class="btn btn-info">Edit</a>
                                    {{-- {{route('delete.product', $product->id)}} --}}
                               <form action="" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="Delete" class="btn btn-danger">
                            </form> 
                            </tr>
                        </td>
                            @endforeach
                         
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

=======
=======
>>>>>>> 110997d776896d3591ccdd5dbb17958366d915b4
      Manage Product
@endsection

@section(section: 'seller_layout')
      Manage Product
<<<<<<< HEAD
@endsection
>>>>>>> 110997d776896d3591ccdd5dbb17958366d915b4
=======
@endsection
>>>>>>> 110997d776896d3591ccdd5dbb17958366d915b4
