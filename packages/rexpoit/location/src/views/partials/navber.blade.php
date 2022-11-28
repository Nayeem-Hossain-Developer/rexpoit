<div class="col-md-12">
    <nav class="navbar navbar-expand-lg navbar-light bg-light border mt-3">
        <div class="container-fluid">
          {{-- <a class="navbar-brand" href="#">Navbar scroll</a> --}}
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
              <li class="nav-item">
                <a class="nav-link active" href="{{auth()->user()->role == 1? route('admin.dashboard'):route('dashboard') }}">Home</a>
              </li>
              @if(auth()->user()->role == 1)
              <li class="nav-item">
                <a class="nav-link" href="{{route('userinfo')}}">User-Information</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('activity')}}">User-Activity</a>
              </li>
              @endif
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            <div class="dropdown ms-3">
              <button class="btn border dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              @auth {{auth()->user()->name}} @endauth
              </button>
              <ul class="dropdown-menu">
                <li><button class="dropdown-item" type="button" onclick="event.preventDefault();document.getElementById('logout').submit();">logout</button></li>
              </ul>
              <form action="{{route('logout')}}" id="logout" method="post">@csrf</form>
            </div>
          </div>
        </div>
      </nav>
</div>