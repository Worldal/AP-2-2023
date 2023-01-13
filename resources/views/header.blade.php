<header>
    <link rel="stylesheet" href="css/app.css">
    <script src="js/app.js"></script>

    <ul  class="navigation">

      <li><a href="/nos-resto">Nos restaurants</a></li>

      <li><a class="link-navig" href="/nos-menus">Nos Menus</a></li>

      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

            <li class="dropdown dropdown-6">
                <span class="material-symbols-outlined" aria-haspopup="false" aria-expanded="false">
                    person
                    </span>Compte
                <ul class="dropdown_menu dropdown_menu--animated dropdown_menu-6">

                    @if (Route::has('login'))
                    <div=>
                        @auth
                            <li class="dropdown_item-1"><a href="{{ url('/dashboard') }}">Profil</a></li>
                        @else
                                <a href="{{ url('/dashboard') }}"><li class="dropdown_item-1" >Profil</li></a>
                                <li><a class="dropdown_item-2" href="{{ route('login') }}">Se connecter</a></li>
                                <li class="dropdown_item-1"><a href="./">Item 1</a></li>
                                <li class="dropdown_item-2">Item 2</li>
                            {{-- @if (Route::has('register'))
                                <li><a class="dropdown-item" href="{{ route('register') }}" >S'inscrire</a></li>
                            @endif --}}
                        @endauth
                    </div=>
                @endif

                </ul>
            </li>

      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </ul>
</header>
