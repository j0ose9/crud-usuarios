<nav class="navbar navbar-expand-lg bg-black">
  <div class="container-fluid">
    <a class="navbar-brand text-white" href="#">CRUD Usuarios</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon text-white"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="{{route('users.index')}}">Usuarios</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Link</a>
        </li>
      </ul>
      <div class="d-flex">
        <a class="nav-link nav-item active text-white" aria-current="page" href="#">Logout</a>
      </div>
    </div>
  </div>
</nav>