@include ('header')
<head>
    <title>Profil - Breizh Cooks</title>
</head>
<div class="part2">
    <div class="p-gauche">
    <h1>Bonjour
        {{-- {{ $profil->PRENOM }} --}}
    </h1>
        <ul> <a href="">Informations</a></ul>
        <ul> <a href="">Historique</a></ul>
        <ul> <a href="#modification">Modifier</a></ul>
    </div>

    <div class="p-droite">
        <div>
            <p>
                {{-- {{ $profil->EMAIL }} --}}
            </p>
            <p>
                {{-- {{ $profil->LOGIN }} --}}
            </p>
        </div>
        <iframe class="iframe" id="Modification"
        title="Modification profil" src="{{ url('/profile') }}">
        </iframe>
    </div>

</div>
@include('footer')
