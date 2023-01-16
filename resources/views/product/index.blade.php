@extends('templete.templete')

@section('content')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-12">
            <table class="table table-bordered text-white">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Product Image</th>
                        <th>Product Name</th>
                        <th>Product Description</th>
                        <th>Product Price</th>
                        <th colspan=2>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($Gadget as $g)
                    <tr>
                        <td>{{ $g->id }}</td>
                        <td> <img src="{{asset('images/'.$g->image)}}" class="card-img-top" alt="" style="height: 240px; width: 320px" ></td>
                        <td>{{ $g->name }}</td>
                        <td>{{ $g->description }}</td>
                        <td>Rp.{{ $g->price }}</td>
                        <td>
                            <a class="btn btn-primary w-100" href="{{route('edit_product',$g->id)}}" role="button">Update</a>
                            <form method="post" action="/product/delete/{{ $g->id }}" class="w-100">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger w-100" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
