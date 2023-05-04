@include ('header')
<head>
    <title>Profil - Breizh Cooks</title>
</head>
<div class="part2">
    <div class="p-gauche">
    <h1>Bonjour
        {{ $profil->PRENOM }}
    </h1>
        <ul href="">Informations</ul>
        <ul href="">Historique</ul>
        <ul href="">Modifier</ul>
    </div>
    <div class="p-droite">

    </div>
</div>
@include('footer')
