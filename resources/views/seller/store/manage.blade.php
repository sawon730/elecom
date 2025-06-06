@extends('seller.layouts.layout')
@section('seller_page_title')
Seller Manage Store
@endsection

@section('seller_layout')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">All Store Created By You</h5>
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
                                <th>Store Name</th>
                                <th>Slug</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($stores as $store)
                            <tr>
                                <td>{{$store->id}}</td>
                                <td>{{$store->store_name}}</td>
                                <td>{{$store->slug}}</td>
                                <td>{{$store->details}}</td>
                                <td>
<<<<<<< HEAD
<<<<<<< HEAD
                                    <a href="" class="btn btn-info">Edit</a>
                                    {{-- {{route('delete.store', $store->id)}} --}}
                               <form action="" method="POST">
=======
=======
>>>>>>> 110997d776896d3591ccdd5dbb17958366d915b4
                                    {{-- {{route('create.store', $store->id)}}
                                    {{route('delete.store', $store->id)}} --}}
                                    <a href="" class="btn btn-info">Edit</a>

                               <form action="" method="post">
<<<<<<< HEAD
>>>>>>> 110997d776896d3591ccdd5dbb17958366d915b4
=======
>>>>>>> 110997d776896d3591ccdd5dbb17958366d915b4
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

