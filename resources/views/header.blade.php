<html lang="fr">
<header>
    <link rel="stylesheet" href="css/app.css">
    <div class="toggle"></div>
    <ul  class="navigation">
        <a class="logo-site" href="/">
                    {{-- <img alt="Logo" class="logo-nav" src="/image/Logo Breizh's Cooks.png"> --}}
                    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                    <lottie-player alt="Logo" class="logo-nav" src="/json-animation/Logo-Anim.json" background="transparent" speed="1.5" loop autoplay ></lottie-player>
                </a>
        <nav class="nav-text">
            <li><a class="link-navig" href="/nos-resto">Nos restaurants</a></li>

            <li><a class="link-navig" href="/nos-menus">Nos Menus</a></li>

            <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
            <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,1,0" />
            <ul class="menu">
                <li class="dropdown dropdown-6">
                    <span class="material-symbols-outlined" aria-haspopup="false" aria-expanded="false">
                        person
                        </span>Compte
                    <ul class="dropdown_menu dropdown_menu--animated dropdown_menu-6">

                        @if (Route::has('login'))
                            <div=>
                                @auth
                                    <a href="{{ url('/dashboard') }}"><li class="dropdownItem-1" >Profil</li></a>
                                @else

                                        <a href="{{ url('/register') }}"><li class="dropdownItem-1" >S'inscrire</li></a>
                                        <a href="{{ route('login') }}"><li class="dropdownItem-2" >Se connecter</li></a>
                                        {{-- <li><a class="dropdown_item-2" href="{{ route('login') }}">Se connecter</a></li> --}}
                                    {{-- @if (Route::has('register'))
                                        <li><a class="dropdown-item" href="{{ route('register') }}" >S'inscrire</a></li>
                                    @endif--}}
                                @endauth
                            </div=>
                        @endif
                    </ul>
                </li>
            </ul>
            <ul class="menu">
                <li class="dropdown dropdown-6">
                    <lottie-player alt="Card" class="logo-shop" src="/json-animation/shop card 3.json" background="transparent" speed="1" loop autoplay ></lottie-player>
                    <ul class="dropdown_menu dropdown_menu--animated dropdown_menu-6">
                        <a href="{{ url('/register') }}"><li class="dropdownItem-1" >Votre panier</li></a>
                        <a href="{{ route('login') }}"><li class="dropdownItem-2" >Vider le panier</li></a>
                    </ul>
                </li>
            </ul>
            {{-- <span class="material-symbols-outlined">
                    shopping_cart
                </span> --}}
        </nav>
    </ul>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
</header>
<script src="js/app.js"></script>
</html>
