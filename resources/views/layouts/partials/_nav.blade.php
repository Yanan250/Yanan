<nav class="navbar navbar-expand-sm static-top navbar-dark bg-dark">
 <div class="container">

      <a class="navbar-brand" href=" #">{{ config('app.name') }}</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample03">
        <ul class="navbar-nav mr-auto">
          <li>
            <a class="nav-link" href="{{route('accueil_path') }}">Accueil</a>
          </li>
          <li>
            <a class="nav-link" href="{{ route('contact_path') }}">Connexion</a>
          </li>
        </ul>
        <ul class="navbar-nav ">
          @guest
            <li class="nav-item">
              <a class="nav-link" href="#">Connexion</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Enregistrement</a>
            </li>
            @else
             <li class="nav-item dropdown">
                 <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                  </a>

                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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