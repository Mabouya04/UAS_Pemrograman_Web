
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
            <a class="nav-link {{ ($title === "Agents")?'active' : '' }}" href="/agents">Agents</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "About")?'active' : '' }}" href="/about">About</a>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a href="/login" class="nav-link {{ ($title === "Login")?'active' : '' }}"><i class="bi bi-box-arrow-in-right"></i> Login</a>
          </li>

        </ul>
      </div>
    </div>
  </nav>

