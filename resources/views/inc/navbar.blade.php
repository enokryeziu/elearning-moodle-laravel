<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{asset("images/e-logo.png")}}" width="30" height="30" class="d-inline-block align-top" alt="">-Learning
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="customMargin collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-50">
                <li class="nav-item dropdown active categoriesBtn">
                    <a class="nav-link" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false">
                        <img src="{{asset("images/categoriesIcon.png")}}" width="20" height="20" class="d-inline-block align-top" alt="">
                        Categories
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdown01">
                        <a class="dropdown-item" href="{{ route('courses.create') }}">Create course</a>
                        @foreach ($courses as $course)
                        @auth
                            <a class="dropdown-item" href="{{ url('course/'.$course->id) }}/{{ Auth::user()->id }}">{{ $course->name }}</a>
                        @endauth
                        @guest
                            <a class="dropdown-item" href="{{ url('course/'.$course->id) }}">{{ $course->name }}</a>
                        @endguest
                        @endforeach
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <img src="{{asset("images/dotIcon.png")}}" width="20" height="20" class="d-inline-block align-top" alt="">
                        LIVE
                    </a>
                </li>
            </ul>
            <input class="form-control form-control-dark w-50" type="text" placeholder="Search" aria-label="Search">
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
                @endif
                @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        @can('isAdmin')
                        <a class="dropdown-item" href="adminpanel">Admin Panel</a>
                        @endcan
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                            {{ __('Logout') }} 
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>