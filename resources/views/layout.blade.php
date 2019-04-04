<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Slutprojekt</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous"/>
    <link rel="stylesheet" type="text/css" href="css/main.css">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg"><a class="navbar-brand" href="#"> <img src="images/minilogo.png" alt="logo"/></a>
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
              <a class="btn btn-dark" href="/login" role="button">Login</a>
              <a class="btn btn-dark" href="/register" role="button">Register</a>
            </ul>
      </div>
    </nav>
    @yield('content')
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>