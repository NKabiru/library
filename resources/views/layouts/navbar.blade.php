<nav class="navbar">
    <div class="navbar-brand">
        <a class="navbar-item" href="{{ route('home') }}">
            <strong> {{ config('app.name', 'Laravel') }}</strong>
        </a>

        <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </a>
    </div>
    <div class="navbar-menu">
        <div class="navbar-start">
            <a href="{{ route('books.index') }}" class="navbar-item">Library</a>
            <a href="#" class="navbar-item">Reviews</a>
        </div>

        <div class="navbar-end">
            <div class="navbar-item">
                @guest
                    <div class="buttons">
                        <a href="{{ route('login') }}" class="button is-white">Login</a>
                        <a href="{{ route('register') }}" class="button is-white">Register</a>
                    </div>
                @else
                    <div class="navbar-item has-dropdown is-hoverable">
                        <a class="navbar-link">{{ auth()->user()->name }}</a>

                        <div class="navbar-dropdown">
                            <a href="#" class="navbar-item">Profile</a>
                            <a href="#" class="navbar-item">Reading List</a>

                            <a href="{{ route('logout') }}" class="navbar-item" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                @csrf
                            </form>
                        </div>

                    </div>
                @endguest
            </div>
        </div>
    </div>
</nav>
