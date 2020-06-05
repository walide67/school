<nav class="navbar navbar-expand-lg navbar-light bg-light">
<a class="navbar-brand text-center" href="{{ url('/') }}">
<h5>BOUSMAHA</h5>
<h6>SCHOOL</h6>
</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto pr-4">
            <li class="nav-item"> <a href="" class="nav-link">دروس</a></li>
            <li class="nav-item"> <a href="" class="nav-link">امتحانات</a></li>
            <li class="nav-item"> <a href="" class="nav-link">اعلانات</a></li>
        </ul>
      <ul class="navbar-nav mr-auto">
            @if (Route::has('login'))
                    @auth
                    <li class="nav-item">
                        <a class="nav-link " href="{{ url('/home') }}">الرئيسية</a>
                      </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">دخول</a>
                          </li>
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">تسجيل</a>
                          </li>
                        @endif
                    @endauth
            @endif
      </ul>
    </div>
  </nav>