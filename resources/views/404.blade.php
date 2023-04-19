<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/app.css">
    <script src="js/app.js"></script>
    <script src="js/lottie.js"></script>
    <script src="js/animation.js"></script>
    <title>404</title>
</head>
<body class="back-404" cz-shortcut-listen="true">
    {{-- back-404 --}}
    <div class="page-404">
            <div class="">
                <div class="txt-404">Je pense que nous sommes au mauvais endroit...</div>
                <a class="btn-404" href="{{ URL::previous() }}">Revenir</a>
                <div class="txt-404">404</div>

            </div>
            <script>
                
            </script>
                <lottie-player src="/json-animation/data3.json" background="transparent"  speed="1"  style="width: 300px; height: 300px;" loop autoplay></lottie-player>

                <video id="video-background-404" autoplay muted loop controlslist="nodownload nofullscreen noremoteplayback">
                    <source src="/videos/lego.webm" type="video/webm">
                </video>
    </div>
</body>


