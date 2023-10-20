<nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Gaming Blog</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('homepage')}}">Home</a>
        </li>
        @auth
        <li class="nav-item">
          <a class="nav-link" href="{{route('game.create')}}">Inserisci un videogame</a>
        </li>
        @endauth
        <li class="nav-item">
          <a class="nav-link" href="{{route('game.index')}}">Tutti i videogames</a>
        </li>
        @auth
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Benvenuto {{ Auth::user()->name }}
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{route('profile')}}">Profilo</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" onclick="event.preventDefault(); document.querySelector('#form-logout').submit();" href="#">Logout</a></li>
            <form action="{{route('logout')}}" method="POST" id="form-logout">
              @csrf
            </form>
          </ul>
        </li>
        @endauth
        @guest
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Benvenuto Ospite
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{route('login')}}">Accedi</a></li>
            <li><a class="dropdown-item" href="{{route('register')}}">Registrati</a></li>
          </ul>
        </li>
        @endguest
      </ul>
    </div>
  </div>
</nav>