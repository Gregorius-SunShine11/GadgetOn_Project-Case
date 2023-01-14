<nav class="navbar navbar-expand-lg navbar-light bg-light p-0" >
    <div class="container-fluid" style="background: #112138; height: 100px;  box-shadow: 2px 2px 1px rgba(0, 0, 0, 0.25)">
        <div class="d-flex align-items-center justify-content-center">
            <a class="navbar-brand m-0" href="{{route('index_home')}}">
                <img src={{asset('IMG/logo.png')}}  alt="Logo" width="200px">
            </a>
        </div>
        <div class="me-auto mb-2 mb-lg-0 d-flex justify-content-evenly w-100 align-items-center">

            @if (Auth::check() && Auth::user()->role == 'Admin')
                <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Manage Product
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{route('index_home')}}" style="color: #112138">Add Product</a>
                        <a class="dropdown-item" href="{{route('index_home')}}" style="color: #112138">Update Product</a>
                    </div>
                 </div>

            @else
                <a class="nav-link text-white" href="{{route('index_cart')}}">My Cart</a>
            @endif

            <form class="d-flex w-75">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            @if (!Auth::check())
                <a class="nav-link  text-white" href="{{route('index_login')}}">Login</a>
                <a class="nav-link  text-white" href="{{route('index_register')}}">Register</a>
            @else
                <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        My Account
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{route('index_account')}}" style="color: #112138">Account Detail</a>
                        <form action="{{ route('logout') }}" method="POST" class="dropdown-item">
                            @csrf
                            <button type="submit "  class="btn-polos dropdown-item">Logout</button>
                        </form>
                    </div>
                </div>
            @endif

        </div>
    </div>
</nav>


