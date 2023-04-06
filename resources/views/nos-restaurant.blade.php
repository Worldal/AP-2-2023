@include ('header')
<!DOCTYPE html>
<html lang="fr">
    <head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" sizes="16x16" href="/image/logo-breizhs-cooks-round.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Nous sommes une entreprise avec plusieurs petits restaurants offrant des expériences culinaires uniques. Nos restaurants ont leur propre style et menu, mais partagent une passion pour la Bretagne en soutenant les communautés locales.">
    <meta property="og:site_name" content="Breizh Cooks">
    <meta name="robots" content="index, follow">
    <meta property="og:image" content="/image/logo-breizhs-cooks-round.webp">
    <meta property="og:site_name" content="Breizh Cooks">
    <meta name="googlebot" content="notranslate"/>
    <link rel="stylesheet" href="css/app.css">
    <script src="js/app.js"></script>
    <script src="js/lottie.js"></script>
    <script src="js/animation.js"></script>

        <title>Breizh Cooks</title>
    </head>
    <body class="back">
        <div>
            <div class="part1">
                <video id="video-background" autoplay muted loop controlslist="nodownload nofullscreen noremoteplayback">
                    <source src="/videos/restau-video.webm" type="video/webm">
                </video>
                <h1>Nos autres restaurants :</h1>

            </div>
            <div class="part2">
                <h2 id="aPropos" class="titre-acc">Pomme d'Api</h2>
                <div class="container-restau">
                    <p>Le restaurant Pomme d'Api, situé au cœur de la Bretagne, vous invite à découvrir ses spécialités bretonnes authentiques. Dans une ambiance chaleureuse et conviviale dans une maison du 18èmes siècles.</p>
                    <img class="photo-acc" src="/image/restau-centre-ville.webp">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10536.445488718626!2d-3.999257653995342!3d48.68423527782151!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4813e185dc2a3fdb%3A0x828051fa9f012641!2sLa%20Pomme%20d&#39;Api!5e0!3m2!1sfr!2sfr!4v1678972617176!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

                <P><HR NOSHADE></P>

                <h2 id="Menus" class="titre-acc">Restaurant Le Bretagne Plougastel</h2>
                <div class="container-restau">
                    <p>Notre menu est inspiré par les produits de la mer et les spécialités bretonnes, avec une touche d'innovation et de modernité. Nous travaillons exclusivement avec des fournisseurs locaux pour garantir la fraîcheur et la qualité des ingrédients que nous utilisons.</p>
                    <img class="photo-acc" src="/image/restau-mer.webp">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d339234.53129373695!2d-4.91347738436513!3d48.37455373059902!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4816b718f5bf637d%3A0x93b66216227073fe!2sRestaurant%20Le%20Bretagne%20Plougastel!5e0!3m2!1sfr!2sfr!4v1678957067528!5m2!1sfr!2sfr" width="800" height="800" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

                <P><HR NOSHADE></P>

                <h2 id="Ingredient" class="titre-acc">Ingrédients frais et locaux.</h2>
                <div class="container-restau">
                    <p>le restaurant utilise des ingrédients frais et de qualité, principalement des produits de la mer et des spécialités bretonnes.</p>
                    <img alt="Eleveur avec ses vaches" class="photo-acc" src="/image/restau-campagne.webp">
                </div>
            </div>
        </div>
    </body>

</html>
@include('footer')
