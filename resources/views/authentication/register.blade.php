@extends('templete.templete')


@section('content')
    <div class="container my-5" style="width:40%;">
        <form action="{{route('register')}}" method="POST" >
        @csrf
        <div class="mb-2 d-flex justify-content-center">
            <h3 class="h3 text-white">CREATE AN ACCOUNT</h3>
        </div>
        <div class="mb-2 d-flex flex-column align-items-start">
            <label for="email" class="form-label text-white">Name</label>
            <input type="text" name="name" class="form-control text-dark-blue" id="name" placeholder="Name">
        </div>
        <div class="mb-2 d-flex flex-column align-items-start">
            <label for="email" class="form-label text-white">Email address</label>
            <input type="email" name="email" class="form-control text-dark-blue" id="email" placeholder="name@example.com">
        </div>
        <div class="mb-2 d-flex flex-column align-items-start">
            <label for="password" class="form-label text-white">Password</label>
            <input type="password" name="password" class="form-control text-dark-blue" id="password" placeholder="Password">
        </div>
        <div class="mb-2 d-flex flex-column align-items-start">
            <label for="confirm" class="form-label text-white">Confirm Password</label>
            <input type="password" name="confirm" class="form-control text-dark-blue" id="confirm" placeholder="Re-type your password">
        </div>
        <div class="mb-2 d-flex flex-column align-items-start">
            <label for="address" class="form-label text-white">Address</label>
            <input type="text" name="address" class="form-control text-dark-blue" id="address" placeholder="Address">
        </div>
        <div class="mb-2 d-flex flex-column align-items-start">
            <label for="email" class="form-label text-white">Gender</label>
            <div class="d-flex">
                <div class="form-check">
                    <input class="form-check-input " type="radio" name="gender" id="male" value="Male">
                    <label class="form-check-label me-1 text-white" for="male">
                        Male
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="female" value="Female">
                    <label class="form-check-label text-white" for="female">
                        Female
                    </label>
                </div>
            </div>

        </div>
        <div class="mb-2 form-check d-flex justify-content-start gap-2">
            <input class="form-check-input" type="checkbox" name="terms" value="0" id="terms">
            <label class="form-check-label text-white" for="terms">
            I Agree To The Terms & Conditions.
            </label>
        </div>
        <div class="mb-2">
            @if ($errors->any())
                <p class="text-danger">{{$errors->first()}}</p>
            @endif
        </div>
        <div class="mb-2">
            <button type="submit" class="btn btn-red w-100">Register</button>
        </div>
        </form>
        {{-- <hr> --}}
        <p class="text-white text-center">Already have an account ? Click <a class="text-red"  href="{{route('index_login')}}">Here</a> to Login.</p>
    </div>

@endsection
