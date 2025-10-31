<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TriWeb</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fancybox.css') }}">
    <link rel="stylesheet" href="{{ asset('css/splide.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/image.css') }}">
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/typed.js') }}"></script>
    <script src="js/aos.js"></script>
        <script>
            AOS.init()
        </script>
        <script src='{{ asset("js/bootstrap.bundle.min.js")}}'></script>
        <script src='{{ asset("js/fancybox.umd.js")}}'></script>
        <script>
            Fancybox.bind("[data-fancybox]", {
                'animated': true,
            });
        </script>
        <script src='{{ asset("js/splide.min.js")}}'></script>

        <script>
            document.addEventListener('DOMContentLoaded', function () {
                var splide = new Splide('#banner', {
                    type: 'loop',
                    autoplay: 1, // Awtomat ozi gecip duran etmegi [0, 1]
                    arrows: 0, // gapdaldaky strelka  [0, 1]
                    interval: 3000,  // nace millisekunt wagtdan gecmelidigi
                    pauseOnHover: 1,  // ustune baranynda pause bolyar  [0, 1]
                    perMove: 1, // nace slide yygylykda gecmeli
                    perPage: 1, // her sahypada nace slide gorkezmeli
                    gap: "1.5rem",
                    breakpoints: {
                        640: {
                            perPage: 1,
                        },
                        990: {
                            perPage: 1,
                        },
                        1420: {
                            perPage: 1,
                        }
                    }

                });
                splide.mount();
            });
        </script>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                var splide = new Splide('#banner-2', {
                    type: 'loop',
                    autoplay: 1, // Awtomat ozi gecip duran etmegi [0, 1]
                    arrows: 0, // gapdaldaky strelka  [0, 1]
                    interval: 3000,  // nace millisekunt wagtdan gecmelidigi
                    pauseOnHover: 1,  // ustune baranynda pause bolyar  [0, 1]
                    perMove: 1, // nace slide yygylykda gecmeli
                    perPage: 3, // her sahypada nace slide gorkezmeli
                    gap: "1.5rem",
                    breakpoints: {
                        640: {
                            perPage: 1,
                        },
                        990: {
                            perPage: 2,
                        },
                        1420: {
                            perPage: 3,
                        }
                    }

                });
                splide.mount();
            });
        </script>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                var splide = new Splide('#banner-3', {
                    type: 'loop',
                    autoplay: 1, // Awtomat ozi gecip duran etmegi [0, 1]
                    arrows: 0, // gapdaldaky strelka  [0, 1]
                    interval: 3000,  // nace millisekunt wagtdan gecmelidigi
                    pauseOnHover: 1,  // ustune baranynda pause bolyar  [0, 1]
                    perMove: 1, // nace slide yygylykda gecmeli
                    perPage: 3, // her sahypada nace slide gorkezmeli
                    gap: "1.5rem",
                    breakpoints: {
                        640: {
                            perPage: 1,
                        },
                        990: {
                            perPage: 2,
                        },
                        1420: {
                            perPage: 3,
                        }
                    }

                });
                splide.mount();
            });
        </script>
</head>

<body>
    @include('client.layouts.nav')
    @yield('content')
</body>
