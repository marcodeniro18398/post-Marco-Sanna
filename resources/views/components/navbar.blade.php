<nav class="navbar  navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active title-font fw-bold" aria-current="page" href="/">Home</a>
                    </li>
                    @auth
                        <div class="dropdown">
                            <li class=" dropdown">
                                <a class="nav-link dropdown-toggle title-font" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false" href="">
                                    Benvenuto {{ Auth::user()->name }}
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item parag-font" href="#">Profilo</a></li>
                                    <li><a class="dropdown-item parag-font" href="#"
                                            onclick="event.preventDefault(); document.querySelector('#form-logout').submit(); ">Logout</a>
                                    </li>
                                    <form id="form-logout" action="{{route('logout')}}" method="POST" class="d-none">
                                    @csrf</form>
                                </ul>
                            </li>
                        </div>
                    @else
                        <li class="nav-item">
                            <a class="nav-link active title-font fw-bold" aria-current="page"
                                href="{{ route('register') }}"> <i class="bi bi-person-fill"></i> Zona utente!</a>
                        </li>
                    @endauth

                </ul>
            </div>
        </div>
    </div>
</nav>
