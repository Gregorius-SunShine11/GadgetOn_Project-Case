@extends('templete.templete')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <h1>Our Products</h1>
            @foreach($Gadget as $g)
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{asset('IMG/'.$g->image)}}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title"> {{ $g->name }}</h5>
                    <p class="card-text"> {{ $g->price }}</p>
                    <a href="#" class="btn btn-primary">View Product</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection
