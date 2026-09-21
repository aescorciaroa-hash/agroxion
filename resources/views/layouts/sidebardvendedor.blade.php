<!DOCTYPE html>
<html lang="es" class="h-full bg-slate-50">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ asset('favicon.svg') }}" type="image/svg+xml">
    <title>{{ config('app.name', 'Agroxion') }} - Punto de Venta & Mostrador Agrícola</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Outfit:wght@500;600;700;800;900&display=swap" rel="stylesheet">
    
    <!-- FontAwesome & SweetAlert2 -->
    <script src="https://kit.fontawesome.com/dcb1bbced2.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <!-- Vite Assets -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <!-- AlpineJS -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @yield('css')
</head>

<body class="h-full antialiased text-slate-800 bg-slate-50 selection:bg-harvest-600 selection:text-white" x-data="{ sidebarOpen: false }">

    <div class="min-h-screen flex flex-col lg:flex-row">
        <!-- Backdrop for mobile sidebar -->
        <div x-show="sidebarOpen" 
             @click="sidebarOpen = false" 
             x-cloak 
             class="fixed inset-0 z-40 bg-slate-900/60 backdrop-blur-xs lg:hidden transition-opacity"></div>

        <!-- Sidebar Navigation Vendedor -->
        <aside class="fixed inset-y-0 left-0 z-50 w-72 bg-soil-900 text-slate-300 flex flex-col justify-between border-r border-soil-800 transition-transform duration-300 transform lg:translate-x-0 lg:static lg:inset-0"
               :class="{ 'translate-x-0 shadow-2xl': sidebarOpen, '-translate-x-full': !sidebarOpen }">
            <div>
                <!-- Brand Header -->
                <div class="h-20 px-6 flex items-center justify-between bg-soil-950/80 border-b border-soil-800">
                    <a href="{{ route('dashboard') }}" class="flex items-center gap-3 group">
                        <div class="w-10 h-10 rounded-xl bg-gradient-to-tr from-harvest-600 to-harvest-400 flex items-center justify-center text-white shadow-lg shadow-harvest-950/40 group-hover:scale-105 transition-transform duration-200">
                            <i class="fas fa-cash-register text-lg"></i>
                        </div>
                        <div>
                            <span class="font-heading font-extrabold text-xl text-white tracking-tight">AGRO<span class="text-harvest-400">XION</span></span>
                            <span class="block text-[10px] text-harvest-300 font-semibold tracking-widest uppercase">Punto de Venta POS</span>
                        </div>
                    </a>
                    <button @click="sidebarOpen = false" class="lg:hidden text-slate-400 hover:text-white p-1 rounded-lg focus:outline-none">
                        <i class="fas fa-times text-lg"></i>
                    </button>
                </div>

                <!-- Nav Menu -->
                <div class="px-4 py-6 space-y-6 overflow-y-auto max-h-[calc(100vh-160px)]">
                    <!-- Dashboard -->
                    <div>
                        <a href="{{ route('dashboard') }}" class="flex items-center gap-3 px-3.5 py-2.5 rounded-xl text-sm font-medium transition-all duration-150 {{ request()->routeIs('dashboard') ? 'bg-harvest-600 text-white shadow-md shadow-harvest-900/30' : 'text-slate-400 hover:text-slate-100 hover:bg-soil-800/70' }}">
                            <i class="fas fa-chart-line w-5 text-center text-base {{ request()->routeIs('dashboard') ? 'text-white' : 'text-harvest-400' }}"></i>
                            <span>Mostrador & Ventas</span>
                        </a>
                    </div>

                    <!-- CAJA & POS -->
                    <div class="space-y-1">
                        <p class="px-3 text-[10px] font-bold text-slate-500 uppercase tracking-wider">Caja & Mostrador</p>

                        <a href="{{ route('dashboard') }}" class="flex items-center justify-between px-3.5 py-2 rounded-xl text-sm font-medium text-harvest-300 bg-harvest-500/10 border border-harvest-500/20 hover:bg-harvest-500/20 transition-colors">
                            <div class="flex items-center gap-3">
                                <i class="fas fa-barcode w-5 text-center text-harvest-400"></i>
                                <span class="font-semibold">Nueva Venta (POS)</span>
                            </div>
                            <span class="text-[10px] font-bold bg-harvest-400 text-soil-950 px-1.5 py-0.5 rounded">F2</span>
                        </a>

                        <a href="{{ route('dashboard') }}" class="flex items-center gap-3 px-3.5 py-2 rounded-xl text-sm font-medium text-slate-400 hover:text-slate-100 hover:bg-soil-800/70 transition-colors">
                            <i class="fas fa-file-invoice-dollar w-5 text-center text-agro-400"></i>
                            <span>Mis Tickets Emitidos</span>
                        </a>

                        <a href="{{ route('dashboard') }}" class="flex items-center gap-3 px-3.5 py-2 rounded-xl text-sm font-medium text-slate-400 hover:text-slate-100 hover:bg-soil-800/70 transition-colors">
                            <i class="fas fa-vault w-5 text-center text-agro-400"></i>
                            <span>Arqueo & Cierre de Caja</span>
                        </a>
                    </div>

                    <!-- CONSULTA DE INSUMOS -->
                    <div class="space-y-1">
                        <p class="px-3 text-[10px] font-bold text-slate-500 uppercase tracking-wider">Catálogo de Insumos</p>

                        <a href="{{ route('dashboard') }}" class="flex items-center gap-3 px-3.5 py-2 rounded-xl text-sm font-medium text-slate-400 hover:text-slate-100 hover:bg-soil-800/70 transition-colors">
                            <i class="fas fa-boxes-packing w-5 text-center text-agro-400"></i>
                            <span>Consultar Stock & Precios</span>
                        </a>

                        <a href="{{ route('dashboard') }}" class="flex items-center gap-3 px-3.5 py-2 rounded-xl text-sm font-medium text-slate-400 hover:text-slate-100 hover:bg-soil-800/70 transition-colors">
                            <i class="fas fa-file-signature w-5 text-center text-agro-400"></i>
                            <span>Cotizaciones a Productores</span>
                        </a>

                        <a href="{{ route('dashboard') }}" class="flex items-center gap-3 px-3.5 py-2 rounded-xl text-sm font-medium text-slate-400 hover:text-slate-100 hover:bg-soil-800/70 transition-colors">
                            <i class="fas fa-users w-5 text-center text-agro-400"></i>
                            <span>Directorio de Clientes / Fincas</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Footer User Profile Badge -->
            <div class="p-4 bg-soil-950/90 border-t border-soil-800">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-gradient-to-tr from-harvest-600 to-harvest-500 text-white flex items-center justify-center font-bold font-heading shadow-md shadow-harvest-950/50">
                        {{ strtoupper(substr(Auth::user()->name ?? 'V', 0, 1)) }}
                    </div>
                    <div class="flex-1 min-w-0">
                        <p class="text-sm font-semibold text-white truncate">{{ Auth::user()->name ?? 'Vendedor' }}</p>
                        <p class="text-[11px] text-harvest-400 font-medium flex items-center gap-1.5">
                            <span class="w-1.5 h-1.5 rounded-full bg-harvest-400 animate-pulse"></span>
                            Asesor de Mostrador
                        </p>
                    </div>
                </div>
            </div>
        </aside>

        <!-- Main Content Canvas -->
        <div class="flex-1 flex flex-col min-w-0">
            <!-- Header Navbar Sticky -->
            <header class="h-20 bg-white/90 backdrop-blur-md border-b border-slate-200/80 px-4 sm:px-6 lg:px-8 flex items-center justify-between sticky top-0 z-30 shadow-xs">
                <!-- Mobile Toggle & POS Status -->
                <div class="flex items-center gap-3 sm:gap-4">
                    <button @click="sidebarOpen = true" class="lg:hidden text-slate-600 hover:text-slate-900 p-2 rounded-xl hover:bg-slate-100 transition-colors focus:outline-none">
                        <i class="fas fa-bars text-xl"></i>
                    </button>

                    <div class="flex items-center gap-2 px-3 py-1.5 rounded-full bg-harvest-50 text-harvest-800 border border-harvest-200 text-xs font-semibold">
                        <span class="w-2 h-2 rounded-full bg-harvest-500 animate-ping"></span>
                        <span>Caja Mostrador #01 • Turno Activo</span>
                    </div>
                </div>

                <!-- Right Actions: User Menu -->
                <div class="flex items-center gap-3" x-data="{ userMenuOpen: false }">
                    <div class="relative">
                        <button @click="userMenuOpen = !userMenuOpen" class="flex items-center gap-3 pl-2 pr-3 py-1.5 rounded-xl hover:bg-slate-100 transition-colors focus:outline-none">
                            <div class="w-8 h-8 rounded-lg bg-harvest-600 text-white flex items-center justify-center font-bold text-xs">
                                {{ strtoupper(substr(Auth::user()->name ?? 'V', 0, 1)) }}
                            </div>
                            <span class="text-sm font-semibold text-slate-700 hidden sm:inline-block">{{ Auth::user()->name ?? 'Vendedor' }}</span>
                            <i class="fas fa-chevron-down text-xs text-slate-400"></i>
                        </button>

                        <div x-show="userMenuOpen" @click.away="userMenuOpen = false" x-cloak
                             class="absolute right-0 mt-2 w-56 bg-white rounded-2xl shadow-xl border border-slate-100 py-2 z-50 transition-all">
                            <div class="px-4 py-3 border-b border-slate-100">
                                <p class="text-xs text-slate-400 font-medium">Asesor Comercial</p>
                                <p class="text-sm font-bold text-slate-800 truncate">{{ Auth::user()->email ?? 'vendedor@agroxion.com' }}</p>
                            </div>
                            <a href="{{ route('profile.edit') }}" class="flex items-center gap-2 px-4 py-2.5 text-sm text-slate-700 hover:bg-slate-50 transition-colors">
                                <i class="fas fa-user-gear text-slate-400 w-4 text-center"></i> Mi Perfil
                            </a>
                            <div class="border-t border-slate-100 my-1"></div>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="w-full flex items-center gap-2 px-4 py-2.5 text-sm text-rose-600 hover:bg-rose-50 transition-colors font-medium">
                                    <i class="fas fa-arrow-right-from-bracket w-4 text-center"></i> Cerrar Sesión
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </header>

            <!-- Alerts Banner & Content -->
            <main class="flex-1 p-4 sm:p-6 lg:p-8 max-w-7xl w-full mx-auto">
                @if(session('success'))
                    <div class="mb-6 bg-agro-50 border border-agro-200 text-agro-800 p-4 rounded-2xl shadow-xs flex items-center justify-between">
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 rounded-xl bg-agro-600 text-white flex items-center justify-center">
                                <i class="fas fa-check"></i>
                            </div>
                            <span class="font-medium text-sm">{{ session('success') }}</span>
                        </div>
                    </div>
                @endif

                @yield('content')
            </main>
        </div>
    </div>

    @yield('js')
</body>
</html>
