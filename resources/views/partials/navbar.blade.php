
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="/">Valorant</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Home")?'active' : '' }}" href="/">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              List
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="/senjatas">Senjata</a></li>
              <li><a class="dropdown-item" href="/tipes">Tipe Senjata</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Agent")?'active' : '' }}" href="/agent">Agent</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Map")?'active' : '' }}" href="/map">Map</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "About")?'active' : '' }}" href="/about">About</a>
          </li>
        </ul>

        @auth
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <form action="/logout" method="post">
              @csrf
              <button class="nav-link bt"><i class="bi bi-box-arrow-right"></i> Logout</button>
            </form>
          </li>
        </ul>  
        @else
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a href="/login" class="nav-link {{ ($title === "Login")?'active' : '' }}"><i class="bi bi-box-arrow-in-right"></i> Login</a>
          </li>
        </ul>  
        @endauth

        
      </div>
    </div>
  </nav>

  <style>
    .bt {
      border:none;
      background-color: transparent;
    }
  </style>