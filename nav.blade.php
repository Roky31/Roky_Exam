<nav class="navbar navbar-expand-lg bg-dark">
        <div class="container-xl">
            <a class="navbar-brand text-light fs-1 fw-bold" href="#">Hotel?<span
                    class="text-danger">TriWeb</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="bi bi-list h1 text-light"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active text-light mx-lg-4 border-bottom border-2 border-danger"
                            ria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="{{route('search') }}">Search</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light mx-lg-4" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light mx-lg-4" href="{{ route('register') }}">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="{{ route('logout') }}">Log out</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
