@extends('templete.templete')

@section('content')
<div class="container my-5" style="width:40%;">
    <form action="{{route('create_product')}}" method="POST">
        @csrf
        <div class="mb-2 d-flex justify-content-center">
            <h2 class="h2 text-white">Add Product</h2>
        </div>
        <div class="mb-2 d-flex flex-column align-items-start">
            <label for="name" class="form-label text-white">Product Name</label>
            <input type="text" name="name" class="form-control text-dark-blue" id="name" placeholder="Product Name">
        </div>
        <div class="mb-2 d-flex flex-column align-items-start">
            <label for="description" class="form-label text-white">Product Description</label>
            <input type="text" name="description" class="form-control text-dark-blue" id="description" placeholder="Product Description...">
        </div>
        <div class="mb-2 d-flex flex-column align-items-start">
            <label for="price" class="form-label text-white">Price</label>
            <input type="number" name="price" class="form-control text-dark-blue" id="price" placeholder="Price">
        </div>
        <div class="mb-2 d-flex flex-column align-items-start">
            <label for="year" class="form-label text-white">Released Year</label>
            <input type="number" name="year" class="form-control text-dark-blue" id="year" placeholder="Released Year">
        </div>
        <div class="mb-2 d-flex flex-column align-items-start">
            <label for="quantity" class="form-label text-white">Quantity</label>
            <input type="number" name="quantity" class="form-control text-dark-blue" id="quantity" placeholder="Quantity">
        </div>
        <div class="mb-2 d-flex flex-column align-items-start">
            <label for="file" class="form-label text-white">Product Image</label>
            <input type="file" name="image" id="file" class="form-control text-dark-blue" accept="image/*">
        </div>
        <div class="mb-2">
            @if ($errors->any())
                <p class="text-danger">{{$errors->first()}}</p>
            @endif
        </div>
        <div class="mb-2">
            <button type="submit" class="btn btn-red w-100">Add Product</button>
        </div>
    </form>
</div>
@endsection