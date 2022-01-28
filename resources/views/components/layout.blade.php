<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Old+Standard+TT:ital,wght@0,400;0,700;1,400&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://cdn.jsdelivr.net/npm/swiffy-slider@1.3.1/dist/css/swiffy-slider.min.css" rel="stylesheet"
        crossorigin="anonymous">


    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <title>{{ $title ?? ' ' }}</title>
    <meta name="description" content="Il sito delle case vacanze di Peter's House">
    <meta name="keywords" content="vacanze">
</head>

<body>
    <div style="display: none">
        ███████╗  ████████╗
        ██╔════╝  ╚══██╔══╝
        █████╗░░  ░░░██║░░░
        ██╔══╝░░  ░░░██║░░░
        ██║░░░░░  ░░░██║░░░
        ╚═╝░░░░░  ░░░╚═╝░░░
    </div>
    <x-navbar />
    <div itemscope itemtype="https://www.petershouse.it/Person">

        {{ $slot }}



        <x-footer />
    </div>

    <script src="https://cdn.jsdelivr.net/npm/swiffy-slider@1.3.1/dist/js/swiffy-slider.min.js" crossorigin="anonymous"
        defer></script>
    <script src="https://cdn.jsdelivr.net/npm/swiffy-slider@1.3.1/dist/js/swiffy-slider-extensions.min.js"></script>

    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
