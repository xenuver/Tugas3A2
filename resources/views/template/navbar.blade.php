<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="{{url('/')}}">Valentino 3A2</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="{{url('/riwayat')}}">Riwayat Hidup</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/hobby')}}">Hobby</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/sosmed')}}">Social Media</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/tokopedia')}}">Tokopedia</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/discord')}}">Discord</a>
        </li>
      </ul>
      <form class="d-flex">    
        @if (Route::has('login'))
                <div class="hidden fixed sm:block">
                    @auth
                        {{-- <a href="{{ url('/logout') }}" class="text-sm text-white dark:text-gray-500 underline" style="text-decoration: none;">           --}}
                          <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown">Hai, {{ Auth::user()->name }}</a>
                              <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('profile.edit') }}">Profile</a></li>
                                <form action="{{ route('logout') }}" method="POST">
                                  @csrf
                                  <li><a class="dropdown-item" href="#">Logout</a></li>
                                </form>           
                              </ul>
                            </li>
                          </ul>
                        {{-- </a> --}}
                    @else
                        <a href="{{ route('login') }}" class=""><button class="btn btn-primary" type="button" style="margin-right: 1rem;">LOGIN</button></a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class=""><button class="btn btn-secondary" type="button">REGISTER</button></a>
                        @endif
                    @endauth
                </div>
            @endif
      </form>
    </div>
  </div>
</nav>