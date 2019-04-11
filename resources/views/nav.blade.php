<nav class="navbar navbar-expand-lg"><a class="navbar-brand" href="#"> <img src="NTI/logotyper/purelogovit.png" alt="logo"/></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
    <div class="collapse navbar-collapse " id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item"> <a class="nav-link" href="/index">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="/breakout">Breakout</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Pong</a>
          <li class="nav-item"><a class="nav-link" href="#">Info</a>
          <li class="nav-item"><a class="nav-link" href="#">Highscores</a>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            @if (Route::has('login'))
              @auth
                <a class="btn btn-dark" href="{{ url('/home') }}">Home</a>
            @else
              <a class="btn btn-dark" href="{{ route('login') }}">Login</a>
            @if (Route::has('register'))
              <a class="btn btn-dark" href="{{ route('register') }}">Register</a>
            @endif
          @endauth
        @endif
          </ul>
    </div>
  </nav>