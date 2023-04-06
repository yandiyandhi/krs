<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
    <div class="container">
        <a class="navbar-brand" href="/">
            <div style="max-height: 80px; max-width: 180px; overflow:hidden;">
                <img src="/image/koorsus.png" alt="" class="img-fluid mt-1">
            </div>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
            aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar"
            aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <a class="navbar-brand" href="/">
                    <div style="overflow:hidden;" class="image">
                        <img src="/image/koorsusid.png" alt="" class="img-fluid">
                    </div>
                </a>
                <span></span>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body" id="navbarNav">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                        <a class="nav-link mx-3 {{ $title === 'Home' ? 'active' : '' }}" href="/">
                            Home
                            <i class="home"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-3 {{ $title === 'Blog' ? 'active' : '' }}" href="/">Blog<i class="blog"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-3 {{ $title === 'Good' ? 'active' : '' }}" href="/about"><i class="good"></i>Good News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-3 {{ $title === 'Categories' ? 'active' : '' }}"
                            href="/categories"><i class="service"></i>Service</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-3 {{ $title === 'About' ? 'active' : '' }}" href="/about"><i class="about"></i>About</a>
                    </li>
                </ul>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    @auth

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Welcome back, {{ auth()->user()->name }}
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="/dashboard"><i
                                            class="bi bi-layout-text-sidebar-reverse"></i>
                                        My
                                        Dashboard</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <form action="/logout" method="POST">
                                        @csrf
                                        <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i>
                                            Logout</button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @else
                        <li class="nav-item">
                            <a href="/login" class="nav-link {{ $title === 'Login' ? 'active' : '' }}"></i>
                                <ion-icon name="person" id="user"></ion-icon>
                            </a>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
</nav>
