<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        @hasSection('title')
            @yield('title') |
        @endif {{ config('app.name', 'Laravel') }}
    </title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    {{-- <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css"> --}}

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{-- <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet"> --}}
    @livewireStyles
</head>

<body class="h-screen">
    <div class="h-full flex flex-col justify-between">  
        <div class="w-full bg-white">
            @include('layouts.components.navbar')
        </div>
        <div class="flex-grow w-full mt-40">
            @yield('content')
        </div>
        <div class="py-5 w-full bg-[#002A4C] ">
            
            <div class="flex flex-wrap">
                <div class="w-full sm:w-1/2 md:w-1/4 lg:w-1/4 xl:w-1/4 text-white">
                    
                    <p class="ml-40 mt-10">Contáctanos</p>
                    <p class="ml-40 mt-4">Quienes somos</p>
                    <p class="ml-40 mt-4 mb-20">Documentos</p>
                   
                </div>
                <div class="w-full sm:w-1/2 md:w-1/4 lg:w-1/4 xl:w-1/4 text-white">
                    <p class="ml-40 mt-10">Acuerdos comerciales</p>
                    <p class="ml-40 mt-4">Lista de precios</p>
                    <p class="ml-40 mt-4 mb-20">Manual de pagos</p>
                </div>
                <div class="w-full sm:w-1/2 md:w-1/4 lg:w-1/4 xl:w-1/4 text-white  items-center justify-center">
                    <p class="ml-40 mt-10">Manual de sistema</p>
                    <p class="ml-40 mt-4">Hojas de seguridad</p>
                    <p class="ml-40 mt-4 mb-20">Fichas técnicas</p>  
                </div>
                <div class="w-full sm:w-1/2 md:w-1/4 lg:w-1/4 xl:w-1/4 text-white items-center justify-center">
                    <p class="ml-40 mt-10">Términos y condiciones</p>
                    <p class="ml-40 mt-5">Aviso de privacidad</p>
                </div>
            </div>

            <div class="w-full bg-sky-900 mt-10" style="height:0.2px;"></div>
            <div class="w-full flex items-center justify-center text-white mt-4">
                <p>© 2023 GProcura. All Rights Reserved.  </p>
            </div>

            <!-- <div
                class="container mx-auto max-w-7xl flex justify-between flex-col md:flex-row items-center text-white font-semibold px-4 md:px-1">
                <p class="text-xl">CONTACTO: 55-18-75-17-89</p>
                <p class="text-xl">POWER BY PROMO LIFE</p>
            </div> -->
        </div>
        @role(['buyers-manager', 'buyer'])
            @livewire('soporte-component')
        @endrole
    </div>
    @livewireScripts
    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://js.pusher.com/7.2/pusher.min.js"></script>
</body>

</html>
