@include ('header')
<head>
    <title>Profil - Breizh Cooks</title>
</head>
<div class="part2">
    <div class="p-gauche">
    <h1>Bonjour
        {{ $profil->PRENOM }}
    </h1>
        <ul> <a href="#info">Informations</a></ul>
        <ul> <a href="#historique">Historique</a></ul>
        <ul> <a href="#modif">Modifier</a></ul>
    </div>
    <div class="p-droite">
        <div>
            <p>
                {{ $profil->EMAIL }}
            </p>
            <p>
                {{ $profil->LOGIN }}
            </p>
        </div>
        <iframe class="iframe" id="Modification"
            title="Modification profil" src="{{ url('/profile') }}">
        </iframe>
    </div>
</div>
@include('footer')
