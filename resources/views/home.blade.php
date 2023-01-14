@extends('templete.templete')


@section('content')
<div class="d-flex flex-column justify-content-center align-items-center my-5">
    <h3 class="display-4 text-center text-white mb-5" style="font-weight: bold; -webkit-text-stroke: 2px #F40928;">Our Products</h3>
    <div class="row">
        @foreach ($Gadget as $g)
                <div class="col d-flex justify-content-center mb-1">
                    <div class="card mb-3 ms-2" style="width: 480px; border-width:3px; border-color:#F40928">
                        <img src="{{$g->image}}" class="card-img-top" alt="" style="height: 360px " >
                        <div class="card-body">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">{{$g->name}} </h5>
                                <p>{{$g->year}}</p>
                            </div>
                            <h5 class="card-text">Rp.{{$g->price}}</h5>
                            <a href="" class="btn btn-red">View Product</a>
                        </div>
                    </div>
                </div>
        @endforeach
    </div>
</div>

@endsection
