@extends('templete.templete')

@section('content')

<div class="row m-5">
    <div class="d-flex align-items-center justify-content-center my-5">
        <div class="card mb-3" style="width: 75%; border: 3px solid #F40928" >
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{asset('images/'.$myCart->gadget->image)}}" class="img-fluid rounded-start" alt="..." width="480px" height="360px">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h4 class="card-title mb-1 text-dark-blue">{{$myCart->gadget->name}}</h4>
                        <h4 class="card-text mb-2 text-red">Rp.{{$myCart->gadget->price}}</h4>
                        <h5 class="card-text text-dark-blue">{{$myCart->gadget->year}}</h5>
                        <p class="card-text text-dark-blue mb-3">{{$myCart->gadget->description}}</p>
                            <form action="{{route('update_qty',[$myCart->id, $myCart->user->id])}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('patch')
                                <div class="d-flex flex-column">
                                    <label for="Qty" class="mb-2">Quantity: </label>
                                    <input type="number" name="quantity" id="Qty" min="1" style="width: 60px" placeholder="1" class="w-100 text-center mb-3">
                                    <div class="mb-2">
                                        @if ($errors->any())
                                            <p class="text-danger">{{$errors->first()}}</p>
                                        @endif
                                    </div>
                                    <button class="btn btn-dark-blue" type="submit">Update quantity</button>
                                </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
