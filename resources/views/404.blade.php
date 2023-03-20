<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/app.css">
    <script src="js/app.js"></script>
    <script src="js/lottie.js"></script>
    <script src="js/animation.js"></script>
    <title>404</title>
</head>
<body class="antialiased back-404" cz-shortcut-listen="true">
    {{-- back-404 --}}
    <div class="relative flex items-top justify-center min-h-screen sm:items-center sm:pt-0">
        <div class="max-w-xl mx-auto sm:px-6 lg:px-8">
            <div class="flex items-center pt-8 sm:justify-start sm:pt-0">
                <a class="btn-404 relative flex items-top justify-center" href="{{ URL::previous() }}">Revenir</a>
                <div class="txt-404 px-4 text-lg border-r border-gray-400 tracking-wider">Il n'y a rien ici</div>
                <div class="txt-404 px-4 text-lg border-r border-gray-400 tracking-wider">404</div>

            </div>
                <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                <lottie-player src="/json-animation/data3.json" background="transparent"  speed="1"  style="width: 300px; height: 300px;" loop autoplay></lottie-player>
        </div>
    </div>
</body>


