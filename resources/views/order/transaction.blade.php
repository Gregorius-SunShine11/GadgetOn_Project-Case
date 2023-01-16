@extends('templete.templete')



@section('content')
    <h3 class="display-4 text-center text-white my-5" style="font-weight: bold; -webkit-text-stroke: 2px #F40928;">Transaction History</h3>
    @if ($transaction->isEmpty())
        <h1 class="text-white display-5 text-center">You haven't done any transaction yet</h1>
    @else
        @php
            $price = 0;
        @endphp

        @foreach ($purchasedOn as $time)
            <div class="container mb-5">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <h5 class="text-white">Purchased On : {{$time->transaction_date}}</h5>
                        <table class="table table-bordered text-white">
                            <thead>
                                <tr>
                                    <th>Product Image</th>
                                    <th>Product Name</th>
                                    <th>Product Description</th>
                                    <th>Quantity</th>
                                    <th>Total Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($transaction as $order)
                                    @if ($order->transaction_date == $time->transaction_date)
                                        <tr>
                                            <td> <img src="{{asset('images/'.$order->gadget->image)}}" class="card-img-top" alt="" style="height: 240px; width: 320px" ></td>
                                            <td>{{ $order->gadget->name }}</td>
                                            <td>{{ $order->gadget->description }}</td>
                                            <td>{{$order->quantity}} pc(s)</td>
                                            <td>Rp.{{$order->gadget->price * $order->quantity}}</th>
                                        </tr>
                                        @php
                                            $price += $order->gadget->price * $order->quantity;
                                        @endphp
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                        <h5 class="text-white">Total Price : IDR {{$price}}</h5>
                        @php
                            $price = 0;
                        @endphp
                    </div>
                </div>
            </div>
        @endforeach
    @endif
@endsection
