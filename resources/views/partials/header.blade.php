<header>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
      <a class="navbar-brand" href="#">Navbar</a>
      <button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"
        class="navbar-toggler" data-bs-target="#navbarSupportedContent" data-bs-toggle="collapse" type="button">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a aria-current="page" @class(['nav-link', 'active' => Route::currentRouteName()=='home']) href="{{route('home')}}">Home</a>
          </li>

        </ul>
        <form class="d-flex" role="search">
          <input aria-label="Search" class="form-control me-2" placeholder="Search" type="search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
</header>
