<nav class="navbar navbar-expand-lg navbar-light bg-info" data-spy="affix" data-offset-top="-10" style="padding-left: 100px; padding-right: 100px;">
    <a class="navbar-nav navbar-brand" style="color: yellow;" href="http://localhost/home">Home</a>
    <div class="navbar-nav ml-auto" id="navbarsExample09">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">

                <a class="nav-link dropdown-toggle"  id="dropdown09" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false" style="color: yellow;">@guest User Account @else {{ Auth::user()->name }} @endguest</a>
                <div class="dropdown-menu" aria-labelledby="dropdown09">
                    @guest
                    <a class="dropdown-item" href="{{ route('register') }}">Sign up</a>
                    <a class="dropdown-item" href="{{ route('login') }}">Sign in</a>
                    @else
                        <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    @endguest
                </div>
            </li>
        </ul>
    </div>
</nav>