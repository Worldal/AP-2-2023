@include ('header')
<!DOCTYPE html>
<html lang="fr">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="Découvrez notre super carte dès maintenant">
    <meta property="og:site_name" content="Breizh Cooks">
    <link rel="canonical" href="https://breizh-cooks.pq.lu/">
    <meta name="robots" content="index, follow">
    <meta property="og:image" content="/image/logo-breizhs-cooks-round.webp">
    <meta property="og:site_name" content="Breizh Cooks">
    <meta name="googlebot" content="notranslate"/>
    <meta name="color-scheme" content="only dark">
        <title>Le Menu</title>

    <!-- Killy Head -->
    <link rel="stylesheet" href="css/menuCSS.css">
    <!-- FrameWork Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>

    </head>
<body class="back">
    <div>
        <div class="part1">
            <video id="video-background" autoplay muted loop controlslist="nodownload nofullscreen noremoteplayback">
                <source src="/videos/Food.webm" type="video/mp4">
            </video>
            <h1>Le Menu !</h1>
        </div>
        <div class="part2">
        <form action="{{route('menu.store')}}" methode="POST">
            <!-- -->
            @foreach($plats as $plat)

            <div class="" >
                <img class="objectif-cover aspect-square rounded-lg" src="{{$plat->LIEN_IMG }}"/>
                <p id="Ingredient" class="font-bold text-xl" > {{$plat->TITRE_PLAT }} </p>
                <p class="font-normal text-sm"> {{$plat->DESCRIPTION_PLAT }}  </p>
                <input type='number' name="orderId[{{$plat->ID_PLAT}}]" value="0"/>
                <P><HR NOSHADE></P>
            </div>
            @endforeach
            <input type="submit" value="Commander">
            </form>
        </div>
    </div>
</body>
</html>
