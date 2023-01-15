@extends('templete.templete')

@section('content')

<div class="row m-5">
    <div class="d-flex align-items-center justify-content-center my-5">
        <div class="card mb-3" style="width: 75%; border: 3px solid #F40928" >
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{$Gadget->image}}" class="img-fluid rounded-start" alt="..." width="480px" height="360px">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h4 class="card-title mb-1 text-dark-blue">{{$Gadget->name}}</h4>
                        <h4 class="card-text mb-2 text-red">Rp.{{$Gadget->price}}</h4>
                        <h5 class="card-text text-dark-blue">{{$Gadget->year}}</h5>
                        <p class="card-text text-dark-blue mb-3">{{$Gadget->description}}</p>
                        @if (!Auth::check())
                            <form action="{{ route('index_login') }}" method="GET">
                                <button type="submit"  class="btn btn-red w-100">Login to purchase</button>
                            </form>
                        @elseif (Auth::user()->role == "Member")
                            <form action="" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="d-flex flex-column">
                                    <label for="Qty" class="mb-2">Quantity: </label>
                                    <input type="number" name="Qty" id="Qty" min="1" style="width: 60px" placeholder="1" class="w-100 text-center mb-3">
                                    <button class="btn btn-dark-blue text-white" type="submit">Add To Cart</button>
                                </div>
                            </form>
                        @elseif (Auth::user()->role == "Admin")
                            <div class="d-flex justify-content-between">
                                <form action="" method="GET" style="width: 48%">
                                    <button type="submit"  class="btn btn-dark-blue w-100">Edit Product</button>
                                </form>
                                <form action="" method="GET" style="width: 48%">
                                    <button type="submit"  class="btn btn-red w-100">Delete Product</button>
                                </form>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
