<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">RESTAURANTADVISOR</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          @auth
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Fai la tua Recensione
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{route('tickets.create')}}">Crea Recensione</a></li>
              <li><a class="dropdown-item" href="{{route('tickets.index')}}">Lista Recensioni</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#" onclick="
              event.preventDefault();
              document.getElementById('form-logout').submit();
              ">Esci</a>
                <form method="POST" action="/logout" id="form-logout">
                  @csrf
                </form>

              </li>
            </ul>
          </li>

          @else
          <li class="nav-item">
            <a class="nav-link" href="/login">Accedi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/register">Registrati</a>
          </li>
          @endauth


        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Cerca</button>
        </form>
      </div>
    </div>
  </nav>