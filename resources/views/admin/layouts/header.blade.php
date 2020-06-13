<nav class="navbar navbar-expand-lg navbar-light m-0 bg-info text-light">
    <a class="navbar-brand text-center text-light" href="{{ url('/') }}">
        <h5>BOUSMAHA</h5>
        <h6>SCHOOL</h6>
        </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto pr-4 ">
                    <li class="nav-item mx-2 position-relative"> <a href="" class="nav-link "><span class="badge badge-pill badge-success rounded-circle position-absolute" style="top:5px; left:2px;width:15px;height: 15px;"> </span><h5><i class="fas fa-envelope text-light"></i></h5></a></li>
                    <li class="nav-item mx-2 position-relative"> <a href="" class="nav-link "><span class="badge badge-pill badge-danger rounded-circle position-absolute "style="top:5px; left:2px;width:15px;height: 15px;"> </span><h5><i class="fas fa-bell text-light"></i></h5></a></li>
                </ul>
              <ul class="navbar-nav mr-auto">
                    @if (Route::has('login'))
                           @auth
                            <li class="nav-item ">
                                <a class="nav-link text-light" href="{{ route('admin.logout') }}">خروج</a>
                              </li>
                            @endauth
                    @endif
              </ul>
            </div>
  </nav>