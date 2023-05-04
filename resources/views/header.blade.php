<header>
    <div class="toggle"></div>
    <ul  class="navigation">
        <a class="logo-site" href="/">
                    {{-- <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script> --}}
                    <lottie-player alt="Logo" class="logo-nav" src="/json-animation/Logo-Anim.json" background="transparent" speed="1.5" loop autoplay ></lottie-player>
                </a>
        <nav class="nav-text">
            <li><a class="link-navig" href="/nos-resto">Nos restaurants</a></li>

            <li><a class="link-navig" href="/menu">Nos Menus</a></li>

            {{-- <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
            <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,1,0" /> --}}
            <ul class="menu">
                <li class="dropdown dropdown-6">
                        <lottie-player id="compte" alt="Logo" class="logo-nav" src="/json-animation/ComptePerson.json" background="transparent" speed="1" ></lottie-player>
                    <ul class="dropdown_menu dropdown_menu--animated dropdown_menu-6">

                        @if (Route::has('login'))
                            <div>
                                @auth
                                        <a href="{{ url('/dashboard') }}"><li class="dropdownItem-1" >Profil</li></a>
                                        <a href="{{ url('/profile') }}"><li class="dropdownItem-2" >Modifier</li></a>
                                        <a href="{{ route('logout') }}"><li class="dropdownItem-3" >Se déconnecter</li></a>
                                @else
                                        <a href="{{ url('/register') }}"><li class="dropdownItem-1" >S'inscrire</li></a>
                                        <a href="{{ route('login') }}"><li class="dropdownItem-2" >Se connecter</li></a>
                                @endauth
                            </div>
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
        </nav>
    </ul>
    <ul  class="navigation-mobile">
        <li><a class="link-navig" href="/nos-resto">Nos restaurants</a></li>
        <li><a class="link-navig" href="/nos-menus">Nos Menus</a></li>
        <li><a class="link-navig" href="{{ url('/register') }}">Votre panier</a></li>
        @if (Route::has('login'))
                @auth
                    <li><a class="link-navig" href="{{ url('/dashboard') }}"><li class="dropdownItem-1" >Profil</a></li>
                @else
                    <li><a class="link-navig" href="{{ route('login') }}"><li class="dropdownItem-2" >Se connecter</a></li>
                @endauth
        @endif
    </ul>
</header>

