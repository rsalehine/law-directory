<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm fixed-top">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('/') ? 'active text-primary' : '' }}"
                        href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('about') ? 'active text-primary' : '' }}"
                        href="{{ url('/about') }}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('contact') ? 'active text-primary' : '' }}"
                        href="{{ url('/contact') }}">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('lawyers') ? 'active text-primary' : '' }}"
                        href="{{ url('/lawyers') }}">Lawyers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('law-firms') ? 'active text-primary' : '' }}"
                        href="{{ url('/law-firms') }}">Law Firms</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('blog') ? 'active text-primary' : '' }}"
                        href="{{ url('/blog') }}">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('privacy') ? 'active text-primary' : '' }}"
                        href="{{ url('/privacy') }}">Privacy Policy</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('terms') ? 'active text-primary' : '' }}"
                        href="{{ url('/terms') }}">Terms & Conditions</a>
                </li>
                <!-- Add more links as needed -->
            </ul>

            <div class="d-flex align-items-center ms-auto">
                <form class="d-flex" action="/search-results">
                    <input class="form-control me-2" name="s" type="text" placeholder="Search">
                </form>
                <a class="btn btn-primary ms-2" href="{{ url('/login') }}">Login</a>
                <a class="btn btn-warning ms-2" href="{{ url('/register') }}">Register</a>
            </div>

        </div>
    </div>
</nav>
