<nav class="navbar Navigation">
  <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#mainMenu">
    &#9776;
  </button>
  <div class="collapse navbar-toggleable-xs" id="mainMenu">
    <div class="navbar-brand">
        <a href="{{ route('welcome') }}" title="oalet">
            <img class="Main__Logo" src="{{ asset('images/logos/home-logo.png') }}" alt="Oalet">
            <span class="Logo__Text">
                alet
            </span>
        </a>
    </div>
    <ul class="nav navbar-nav pull-right">
      {{-- <li class="nav-item">
        <a class="nav-link" href="{{ route('features') }}">Features</a>
      </li> --}}
      {{-- <li class="nav-item">
        <a class="nav-link" href="{{ route('pricing') }}">Pricing</a>
      </li> --}}
      <li class="nav-item dropdown">
        <a tabindex="0" class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Account</a>
            <div class="dropdown-menu More__Menu">
                <a class="dropdown-item" href="#">Settings</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="">Log Out</a>
            </div>
      </li>
    </ul>
  </div>
</nav>