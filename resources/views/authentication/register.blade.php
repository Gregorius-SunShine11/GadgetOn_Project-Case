@extends('templete.templete')


@section('content')
    <div class="container" style="width:400px">
        <form action="{{route('register')}}" method="POST" >
        @csrf
        <div class="mb-2">
            <h3 class="h3">Register Page</h3>
        </div>
        <div class="mb-2 d-flex flex-column align-items-start">
            <label for="email" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Name">
        </div>
        <div class="mb-2 d-flex flex-column align-items-start">
            <label for="email" class="form-label">Email address</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
        </div>
        <div class="mb-2 d-flex flex-column align-items-start">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="8 - 20 Characters">
        </div>
        <div class="mb-2 d-flex flex-column align-items-start">
            <label for="confirm" class="form-label">Confirm Password</label>
            <input type="password" name="confirm" class="form-control" id="confirm" placeholder="Re-type your password">
        </div>
        <div class="mb-2 d-flex flex-column align-items-start">
            <label for="address" class="form-label">Address</label>
            <input type="text" name="address" class="form-control" id="address" placeholder="Address">
        </div>
        <div class="mb-2 d-flex flex-column align-items-start">
            <label for="email" class="form-label">Gender</label>
            <div class="d-flex">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="male" value="Male">
                    <label class="form-check-label" for="male">
                        Male
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="female" value="Female">
                    <label class="form-check-label" for="female">
                        Female
                    </label>
                </div>
            </div>

        </div>
        <div class="mb-2 form-check d-flex justify-content-start gap-2">
            <input class="form-check-input" type="checkbox" name="terms" value="0" id="terms">
            <label class="form-check-label" for="terms">
            I Agree To The Terms & Conditions.
            </label>
        </div>
        <div class="mb-2">
            @if ($errors->any())
                <p class="text-danger">{{$errors->first()}}</p>
            @endif
        </div>
        <div class="mb-2">
            <button type="submit" class="btn btn-light w-100">Register</button>
        </div>
        </form>
        <hr>
        <p class="text-light">Already have an account ? Click <a class="link-light" href="{{route('index_login')}}">Here</a> to Login.</p>
    </div>

@endsection
