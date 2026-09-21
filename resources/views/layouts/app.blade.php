<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-slate-50">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Agroxion') }} - Gestión de Insumos Agrícolas</title>

        <!-- Favicon -->
        <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">
        <link rel="alternate icon" href="{{ asset('favicon.ico') }}">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Outfit:wght@500;600;700;800;900&display=swap" rel="stylesheet">

        <!-- FontAwesome -->
        <script src="https://kit.fontawesome.com/dcb1bbced2.js" crossorigin="anonymous"></script>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="h-full font-sans antialiased text-slate-800 bg-slate-50 selection:bg-agro-600 selection:text-white">
        <div class="min-h-screen flex flex-col">
            <!-- Top Navigation Bar -->
            <nav class="bg-white/95 backdrop-blur-md border-b border-slate-200 sticky top-0 z-30 shadow-xs">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex justify-between h-16 items-center">
                        <div class="flex items-center gap-6">
                            <a href="{{ route('dashboard') }}" class="group">
                                <x-application-logo />
                            </a>
                            <a href="{{ route('dashboard') }}" class="hidden sm:inline-flex items-center gap-2 text-xs font-semibold px-3 py-1.5 rounded-lg text-agro-700 bg-agro-50 hover:bg-agro-100 border border-agro-200 transition-colors">
                                <i class="fas fa-arrow-left text-[10px]"></i>
                                <span>Volver al Panel</span>
                            </a>
                        </div>

                        <div class="flex items-center gap-3">
                            <div class="flex items-center gap-2 text-sm font-semibold text-slate-700">
                                <div class="w-8 h-8 rounded-lg bg-agro-600 text-white flex items-center justify-center font-bold text-xs">
                                    {{ strtoupper(substr(Auth::user()->name ?? 'U', 0, 1)) }}
                                </div>
                                <span class="hidden md:inline">{{ Auth::user()->name ?? 'Usuario' }}</span>
                            </div>
                            <form method="POST" action="{{ route('logout') }}" class="inline">
                                @csrf
                                <button type="submit" class="p-2 text-slate-400 hover:text-rose-600 rounded-lg hover:bg-slate-100 transition-colors" title="Cerrar Sesión">
                                    <i class="fas fa-sign-out-alt"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </nav>

            <!-- Page Heading -->
            @isset($header)
                <header class="bg-white border-b border-slate-200">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main class="flex-1 max-w-7xl w-full mx-auto p-4 sm:p-6 lg:p-8">
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
