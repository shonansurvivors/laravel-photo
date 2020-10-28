<nav class="navbar navbar-expand navbar-light bg-white shadow-sm">
  <a class="navbar-brand" href="{{ url('/') }}">
    {{ config('app.name', 'Laravel') }}
  </a>

  <!-- Left Side Of Navbar -->
  <ul class="navbar-nav mr-auto">

  </ul>

  <!-- Right Side Of Navbar -->
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
      <li class="nav-item">
        <a class="nav-link" href="{{ route('pictures.create') }}"><i class="fas fa-pen mr-1"></i>投稿する</a>
      </li>

      <li class="nav-item dropdown">
        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
          {{ Auth::user()->name }} <span class="caret"></span>
        </a>

        <div class="dropdown-menu dropdown-menu-right dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
          <button class="dropdown-item" type="button"
                  onclick="location.href=''">
            お気に入り
          </button>
          <div class="dropdown-divider"></div>
          <button form="logout-button" class="dropdown-item" type="submit">
            {{ __('Logout') }}
          </button>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
          </form>
        </div>
      </li>
    @endguest
  </ul>
</nav>
