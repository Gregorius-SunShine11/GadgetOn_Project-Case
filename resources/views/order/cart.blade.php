@extends('templete.templete')


@section('content')
    <h3 class="display-4 text-center text-white my-5" style="font-weight: bold; -webkit-text-stroke: 2px #F40928;">My Cart</h3>
    @php
        $price = 0;
    @endphp
    @if ($myCart->isEmpty())
        <h1 class="text-white display-5 text-center">You don't have any product yet inside your cart</h1>
    @else
        <div class="container mb-5">
            <div class="row justify-content-center">
                <div class="col-12">
                    <table class="table table-bordered text-white">
                        <thead>
                            <tr>
                                <th>Product Image</th>
                                <th>Product Name</th>
                                <th>Product Description</th>
                                <th>Quantity</th>
                                <th>Product Price</th>
                                <th>Total Price</th>
                                <th colspan=2>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($myCart as $cart)
                                <tr>
                                    <td> <img src="{{asset('images/'.$cart->gadget->image)}}" class="card-img-top" alt="" style="height: 240px; width: 320px" ></td>
                                    <td>{{ $cart->gadget->name }}</td>
                                    <td>{{ $cart->gadget->description }}</td>
                                    <td>{{$cart->quantity}} pc(s)</td>
                                    <td>Rp.{{ $cart->gadget->price }}</td>
                                    <td>Rp.{{$cart->gadget->price * $cart->quantity}}</th>
                                    <td>
                                        <a class="btn btn-primary w-100" href="{{route('index_editQty', $cart->id)}}" role="button">Edit qty</a>
                                        <form method="POST" action="{{route('remove_cart', $cart->id)}}" class="w-100">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger w-100" type="submit">Remove</button>
                                        </form>
                                    </td>
                                </tr>
                                @php
                                    $price += $cart->gadget->price * $cart->quantity;
                                @endphp
                            @endforeach
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-between w-100">
                        <h5 class="text-white">Total Price : IDR {{$price}}</h5>
                        <form action="{{route('checkout', Auth::user()->id)}}" method="POST" style="width: 48%" class="d-flex justify-content-end" enctype="multipart/form-data">
                            @csrf
                            <button type="submit"  class="btn btn-green w-25">Checkout</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endif








@endsection
