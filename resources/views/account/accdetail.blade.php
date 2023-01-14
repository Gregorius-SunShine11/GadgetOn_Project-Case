@extends('templete.templete')


@section('content')
    <div class="container my-5" style="width:40%;">
        <form action="{{route('updateProfile')}}" method="POST" >
        @csrf
        <div class="mb-2 d-flex justify-content-center">
            <h3 class="h3 text-white">Account Detail</h3>
        </div>
        <div class="mb-2 d-flex flex-column align-items-start">
            <label for="email" class="form-label text-white">Profile Name</label>
            <input type="text" name="profileName" class="form-control text-dark-blue" id="name" placeholder="Name" value="{{Auth::user()->name}}">
        </div>
        <div class="mb-2 d-flex flex-column align-items-start">
            <label for="email" class="form-label text-white">Profile Email</label>
            <input type="email" name="email" class="form-control text-dark-blue" id="email" placeholder="name@example.com" value="{{Auth::user()->email}}">
        </div>
        <div class="mb-2 d-flex flex-column align-items-start">
            <label for="address" class="form-label text-white">Profile Address</label>
            <input type="text" name="profileAddress" class="form-control text-dark-blue" id="address" placeholder="Address" value="{{Auth::user()->address}}">
        </div>
        <div class="mb-2 d-flex flex-column align-items-start">
            <label for="password" class="form-label text-white">New Password (can be left empty)</label>
            <input type="password" name="newPassword" class="form-control text-dark-blue" id="password" placeholder="New Password">
        </div>
        <div class="mb-2 d-flex flex-column align-items-start">
            <label for="confirm" class="form-label text-white">Current Password</label>
            <input type="password" name="currentPassword" class="form-control text-dark-blue" id="confirm" placeholder="Current password">
        </div>
        <div class="mb-2">
            @if ($errors->any())
                <p class="text-danger">{{$errors->first()}}</p>
            @endif
        </div>
        <div class="my-3">
            <button type="submit" class="btn btn-red w-100">Edit Profile</button>
        </div>
        </form>
    </div>

@endsection
