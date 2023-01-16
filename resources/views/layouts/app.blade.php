<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
        <title>{{config('app.name')}}</title>
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">

        <style type="text/css">
            body {
                font-size: 1.2rem;
             }

             p{
                letter-spacing: 1.2px;
             }
            * {
              -webkit-font-smoothing: antialiased;
              -moz-osx-font-smoothing: grayscale;
            }

            .bg-primary {
                background: #231f20 !important;
            }

            .bg-secondary {
                background: #EABD5E !important;
            }

            h1, h2, h3 {
                font-family: 'Libre Franklin', sans-serif;
                font-weight: 700;
            }

            p, div, h5, h6, .lead {
                font-family: 'Libre Franklin', sans-serif;
                font-weight: 300;
            }

            .lead {
                font-size: 1.55rem;
                font-weight: 300;
            }

            .link-none {
                color: inherit;
                text-decoration: none;
                transition: .2s;
            }

            .link-none:hover {
                color: inherit;
                opacity: 0.8;
            }
        </style>
        @stack('header')
    </head>
    <body class="bg-primary">
            
        @include('components.header.nav')

        @yield('content')

        <footer class="p-4" style="background: rgba(0,0,0,0.2)">
            <div class="container my-6">
                <div class="row">
                    <div class="col-lg-8 col-md-6 col-12">
                            <div class="mb-4"><img src="{{asset('images/logo_full.svg')}}" style="width: 220px"></div>
                            <p class="opacity-6 text-white">Contracting company offering Renovation and Installation Services founded by professionals with over 30-years of industry experience.</p>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 mb-4">
                        <p class="opacity-6 text-white"><a class="link-none" href="#about-us">About Us</a></p>
                        <p class="opacity-6 text-white"><a class="link-none" href="#services">Services</a></p>
                        <p class="opacity-6 text-white"><a class="link-none" href="#case-studies">Case Studies</a></p>
                    </div>
                </div>
            </div>
            <div class="text-white opacity-4 text-center border-top pt-4" style="border-color: rgba(255,255,255,0.4) !important; font-size: 80%">© Copyright {{now()->year}}. All Rights Reserved.</div>
        </footer>

        <script src="{{ mix('js/app.js') }}"></script>
        <script type="text/javascript" src="{{asset('js/vendor/jquery.jscroll.min.js')}}"></script>
        @stack('scripts')
    </body>
</html>
