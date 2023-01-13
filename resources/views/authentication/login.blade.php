@extends('templete.templete')

@section('content')
<div class="container" style="width:400px">
    <form action="{{route('login')}}" method="POST">
        @csrf
      <div class="mb-2">
        <h3 class="h3">Login Page</h3>
      </div>
      <div class="mb-2 d-flex flex-column align-items-start">
        <label for="email" class="form-label">Email address</label>
        <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
      </div>
      <div class="mb-2 d-flex flex-column align-items-start">
        <label for="password" class="form-label">Password</label>
        <input type="password" name="password" class="form-control" id="password" placeholder="8 - 20 Characters">
      </div>
      <div class="mb-2 form-check d-flex justify-content-start gap-2">
        <input class="form-check-input" type="checkbox" name="remember" value="0" id="remember">
        <label class="form-check-label" for="remember">
          Remember Me
        </label>
      </div>
      <div class="mb-2">
            @if ($errors->any())
                <p class="text-danger">{{$errors->first()}}</p>
            @endif
      </div>
      <div class="mb-2">
        <button type="submit" class="btn btn-light w-100">Login</button>
      </div>
    </form>
    <hr>
    <p class="text-light">Don't Have an Account Yet ? Click <a class="link-light" href="{{route('register')}}">Here</a> to Register.</p>
  </div>

@endsection
