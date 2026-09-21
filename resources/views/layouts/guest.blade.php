<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-slate-50">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Agroxion') }} - Insumos & Ventas Agrícolas</title>

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
    <body class="h-full font-sans text-slate-800 antialiased bg-slate-50 selection:bg-agro-600 selection:text-white">
        <div class="min-h-screen flex">
            <!-- Left Side: Image & Agricultural Enterprise Banner -->
            <div class="hidden lg:flex lg:w-1/2 relative bg-cover bg-center overflow-hidden" style="background-image: url('{{ asset('images/auth_bg.jpg') }}');">
                <div class="absolute inset-0 bg-gradient-to-t from-soil-950 via-soil-950/70 to-agro-950/50"></div>
                <div class="relative z-10 w-full h-full flex flex-col justify-between p-12 lg:p-16">
                    <!-- Agroxion Brand Header -->
                    <a href="/" class="flex items-center space-x-3 group w-fit">
                        <div class="w-12 h-12 rounded-2xl bg-gradient-to-tr from-agro-600 to-agro-400 flex items-center justify-center text-white shadow-xl shadow-agro-950/50 group-hover:scale-105 transition-transform duration-300">
                            <i class="fas fa-seedling text-2xl"></i>
                        </div>
                        <div class="flex flex-col">
                            <span class="text-2xl font-heading font-extrabold tracking-tight text-white group-hover:text-agro-400 transition-colors">AGRO<span class="text-agro-400">XION</span></span>
                            <span class="text-[10px] tracking-widest uppercase text-agro-300 font-bold">Insumos & Inventario</span>
                        </div>
                    </a>

                    <!-- Hero Caption -->
                    <div>
                        <div class="inline-flex items-center space-x-2 px-3.5 py-1.5 rounded-full bg-agro-900/60 border border-agro-500/40 backdrop-blur-md mb-6">
                            <span class="w-2 h-2 rounded-full bg-agro-400 animate-pulse"></span>
                            <span class="text-xs font-semibold uppercase tracking-wider text-agro-300">Gestión de Insumos y Ventas</span>
                        </div>
                        <h2 class="text-4xl lg:text-5xl font-heading font-extrabold text-white mb-4 leading-tight">
                            Control total desde el almacén hasta el campo
                        </h2>
                        <p class="text-slate-200 text-base lg:text-lg max-w-lg leading-relaxed font-normal">
                            Plataforma especializada en trazabilidad de fertilizantes, semillas certificadas, agroquímicos y despacho a productores agrícolas.
                        </p>
                        
                        <!-- Mini agricultural highlights -->
                        <div class="mt-8 grid grid-cols-2 gap-4 max-w-md">
                            <div class="p-3 rounded-xl bg-white/10 backdrop-blur-md border border-white/10">
                                <p class="text-white font-heading font-bold text-sm flex items-center gap-2">
                                    <i class="fas fa-barcode text-agro-400"></i> Control de Lotes
                                </p>
                                <p class="text-[11px] text-slate-300 mt-0.5">Vencimientos y fitosanitarios</p>
                            </div>
                            <div class="p-3 rounded-xl bg-white/10 backdrop-blur-md border border-white/10">
                                <p class="text-white font-heading font-bold text-sm flex items-center gap-2">
                                    <i class="fas fa-cash-register text-harvest-400"></i> Punto de Venta POS
                                </p>
                                <p class="text-[11px] text-slate-300 mt-0.5">Venta rápida en mostrador</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Side: Form Container -->
            <div class="w-full lg:w-1/2 flex flex-col justify-center items-center p-6 sm:p-12 bg-slate-50">
                <div class="w-full max-w-md">
                    <!-- Brand Header for Mobile / Center -->
                    <div class="mb-6 flex flex-col items-center justify-center text-center">
                        <a href="/" class="flex flex-col items-center space-y-2 group mb-2">
                            <div class="w-14 h-14 rounded-2xl bg-gradient-to-tr from-agro-700 via-agro-600 to-agro-400 flex items-center justify-center text-white shadow-xl shadow-agro-900/30 group-hover:scale-105 transition-transform duration-300">
                                <i class="fas fa-seedling text-2xl"></i>
                            </div>
                            <div class="flex flex-col items-center">
                                <span class="text-3xl font-heading font-extrabold tracking-tight text-slate-900">AGRO<span class="text-agro-600">XION</span></span>
                                <span class="text-[10px] tracking-widest uppercase text-agro-700 font-bold">Insumos & Inventario</span>
                            </div>
                        </a>
                    </div>

                    <!-- Main Form Box -->
                    <div class="bg-white px-8 py-8 sm:px-10 sm:py-9 shadow-xl shadow-slate-200/60 rounded-3xl border border-slate-200">
                        {{ $slot }}
                    </div>

                    <!-- Footer -->
                    <div class="mt-8 text-center text-xs text-slate-400 flex items-center justify-center gap-2">
                        <i class="fas fa-leaf text-agro-600"></i>
                        <span>&copy; {{ date('Y') }} Agroxion ERP. Todos los derechos reservados.</span>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
