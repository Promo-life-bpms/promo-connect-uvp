@extends('layouts.guest')

@section('content')

    <div class="flex justify-center py-4 h-32 md:justify-start">
        <img class="w-60" src="{{ asset('img/logo_uvp_black.png')}}"
        style="object-fit: contain;"
        class="max-w-full max-full md:max-w-full" >
    </div>
    <div class="container h-full w-full m-0">
        <div class="g-6 flex h-full flex-wrap items-center justify-center lg:justify-center">
            <div class="md:w-6/12" style="width:400px">

                <div class="max-w-full p-3 rounded overflow-hidden shadow-2xl">
                    <div class="separator mt-8"></div>
                    <div class="flex items-center justify-center">
                        <h1 class="text-4xl font-bold ">
                            Bienvenido
                        </h1>
                    </div>

                        <form class="w-full p-4" method="POST" action="{{ route('login') }}">
                        @csrf
                        
                            <label class="block text-gray-500 font-bold md:text-left mb-1 md:mb-0 pr-4 pb-2" for="inline-full-name">
                                Correo
                            </label>
                        
                            <div class="w-full">
                                <input type="email" class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:bg-white focus:border-[#662D91]" name="email" value="{{ old('email') }}" placeholder="Ingrese su correo" required autocomplete="email" autofocus>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <p class="text-sm text-red-700 font-semibold">{{ $message }}</p>
                                </span>
                                @enderror
                            </div>
                    
                    
                            <div class="separador mt-4"></div>
                            <label class="block pb-2 text-gray-500 font-bold md:text-left mb-1 md:mb-0 pr-4" for="inline-password">
                                Contraseña
                            </label>
                        
                            <div class="w-full mb-4">
                                <input id="password" type="password" class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-[#662D91]" placeholder="Ingrese su contraseña" name="password" requiredautocomplete="current-password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <p class="text-sm text-red-700 font-semibold">{{ $message }}</p>
                                </span>
                                @enderror
                            </div>
                            <br>
                            <div class="md:flex md:items-center mt-4">
                                <div class="w-full mb-2">
                                    <button type="submit" class="text-black bg-[#FECB2E] hover:bg-[#F79C19] inline-block w-full rounded px-7 pb-2.5 pt-3 text-sm font-medium uppercase leading-normal shadow-[0_4px_9px_-4px_#000000] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]">
                                        INICIAR SESIÓN
                                    </button>
                                </div>
                            </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
