<header>
    <link rel="stylesheet" href="css/app.css">
    <script src="js/app.js"></script>

    <ul  class="navigation">

      <li><a href="/nos-resto">Nos restaurants</a></li>

      <li><a class="link-navig" href="/nos-menus">Nos Menus</a></li>

      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

      <div class="dropdown">
        <span class="dropdown-toggle material-symbols-outlined" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            person
            </span>
        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
            @if (Route::has('login'))
            <div=>
                @auth
                    <li><a class="dropdown-item" href="{{ url('/dashboard') }}">Profil</a></li>
                @else
                        <li><a class="dropdown-item" href="{{ route('login') }}">Se connecter</a></li>

                    {{-- @if (Route::has('register'))
                        <li><a class="dropdown-item" href="{{ route('register') }}" >S'inscrire</a></li>
                    @endif --}}
                @endauth
            </div=>
        @endif

            {{-- <button class="dropdown-item" type="button">Action</button>
          <button class="dropdown-item" type="button">Another action</button>
          <button class="dropdown-item" type="button">Something else here</button> --}}
        </div>
      </div>

      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </ul>
</header>
