@extends('templete.templete')

@section('content')
<div class="d-flex align-items-center justify-content-center my-5">
    <div class="card mb-3" style="width: 50%;">
        <div class="row g-0">
          <div class="col-md-4" style="width: 40%;">
            <img src="{{asset('IMG/phone.png')}}" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="container my-5 px-5 d-flex flex-column justify-content-center" style="width:60%">
            <form action="{{route('login')}}" method="POST" enctype="multipart/form-data">
                @csrf
              <div class="mb-2 d-flex justify-content-center">
                <h3 class="h3 text-dark-blue">Sign In</h3>
              </div>
              <div class="mb-2 d-flex flex-column align-items-start">
                <label for="email" class="form-label text-dark-blue">Email address</label>
                <input type="email" name="email" class="form-control text-dark-blue" id="email" placeholder="name@example.com" value="{{Cookie::get('CookieEmail') !== null ? Cookie::get('CookieEmail'): "" }}">
              </div>
              <div class="mb-2 d-flex flex-column align-items-start">
                <label for="password" class="form-label text-dark-blue">Password</label>
                <input type="password" name="password" class="form-control text-dark-blue" id="password" placeholder="Min. 5 Characters" value="{{Cookie::get('CookiePassword') !== null ? Cookie::get('CookiePassword'): "" }}">
              </div>
              <div class="mb-2 form-check d-flex justify-content-start gap-2">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" checked={{Cookie::get('CookieEmail')!== null }}>
                <label class="form-check-label text-dark-blue" for="remember">
                  Remember Me
                </label>
              </div>
              <div class="mb-2">
                    @if ($errors->any())
                        <p class="text-danger">{{$errors->first()}}</p>
                    @endif
              </div>
              <div class="mb-2">
                <button type="submit" class="btn btn-red w-100">Login</button>
              </div>
            </form>
            <p class="text-dark-blue text-center">Don't Have an Account? Click <a class="text-red" href="{{route('register')}}">Here</a> to Register.</p>
          </div>

        </div>
      </div>
</div>


@endsection
