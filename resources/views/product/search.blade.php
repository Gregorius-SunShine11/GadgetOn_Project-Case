@extends('templete.templete')


@section('content')
<h3 class="display-4 text-center text-white my-5" style="font-weight: bold; -webkit-text-stroke: 2px #F40928;">Our Products</h3>
@if ($Gadget->isEmpty())
    <h1 class="text-white display-5 text-center">No Product</h1>
@else
<div class="d-flex flex-column justify-content-center align-items-center my-5">
    <div class="row mb-3">
        @foreach ($Gadget as $g)
                <div class="col d-flex justify-content-center mb-1">
                    <div class="card mb-3 ms-2" style="width: 480px; border-width:3px; border-color:#F40928">
                        <img src="{{asset('images/'.$g->image)}}" class="card-img-top" alt="" style="height: 360px " >
                        <div class="card-body">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">{{$g->name}} </h5>
                                <p>{{$g->year}}</p>
                            </div>
                            <h5 class="card-text">Rp.{{$g->price}}</h5>
                            <a href="{{route('view_product', $g->id)}}" class="btn btn-red">View Product</a>
                        </div>
                    </div>
                </div>
        @endforeach
    </div>
    {{$Gadget->links()}}
</div>
@endif


@endsection
