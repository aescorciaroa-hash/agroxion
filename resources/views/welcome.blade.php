<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Agroxion') }} - Inventario e Insumos Agrícolas</title>
    
    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">
    <link rel="alternate icon" href="{{ asset('favicon.ico') }}">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Outfit:wght@500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- FontAwesome -->
    <script src="https://kit.fontawesome.com/dcb1bbced2.js" crossorigin="anonymous"></script>

    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-50 text-slate-800 antialiased selection:bg-agro-600 selection:text-white font-sans">

    <!-- HEADER / NAVIGATION -->
    <header class="fixed top-0 left-0 right-0 z-50 bg-slate-950/80 backdrop-blur-md border-b border-slate-800/60 transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                
                <!-- Logo -->
                <a href="#inicio" class="flex items-center space-x-3 group">
                    <div class="w-10 h-10 rounded-xl bg-gradient-to-tr from-agro-700 via-agro-600 to-agro-400 flex items-center justify-center shadow-lg shadow-agro-900/40 group-hover:scale-105 transition-transform duration-300">
                        <i class="fas fa-seedling text-white text-lg"></i>
                    </div>
                    <div class="flex flex-col">
                        <span class="text-xl font-heading font-extrabold tracking-tight text-white group-hover:text-agro-400 transition-colors">Agro<span class="text-agro-400">xion</span></span>
                        <span class="text-[10px] tracking-wider uppercase text-agro-300 font-semibold">Insumos & Inventario</span>
                    </div>
                </a>

                <!-- Navigation Links -->
                <nav class="hidden md:flex items-center space-x-1 lg:space-x-2">
                    <a href="#inicio" class="px-4 py-2 text-sm font-medium text-slate-200 hover:text-white hover:bg-slate-800/60 rounded-xl transition-all">Inicio</a>
                    <a href="#nosotros" class="px-4 py-2 text-sm font-medium text-slate-200 hover:text-white hover:bg-slate-800/60 rounded-xl transition-all">Nosotros</a>
                    <a href="#productos" class="px-4 py-2 text-sm font-medium text-slate-200 hover:text-white hover:bg-slate-800/60 rounded-xl transition-all">Insumos</a>
                    <a href="#servicios" class="px-4 py-2 text-sm font-medium text-slate-200 hover:text-white hover:bg-slate-800/60 rounded-xl transition-all">Soluciones</a>
                    <a href="#contacto" class="px-4 py-2 text-sm font-medium text-slate-200 hover:text-white hover:bg-slate-800/60 rounded-xl transition-all">Contacto</a>
                </nav>

                <!-- Auth Buttons -->
                <div class="flex items-center space-x-3">
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/dashboard') }}" class="px-5 py-2.5 text-sm font-semibold text-slate-950 bg-agro-400 hover:bg-agro-300 rounded-xl shadow-lg shadow-agro-400/20 transition-all duration-300 transform hover:-translate-y-0.5">
                                Panel Principal
                            </a>
                        @else
                            <a href="{{ route('login') }}" class="px-4 py-2.5 text-sm font-medium text-white hover:text-agro-300 transition-colors">
                                Iniciar Sesión
                            </a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="px-5 py-2.5 text-sm font-semibold text-slate-950 bg-gradient-to-r from-agro-400 to-agro-300 hover:from-agro-300 hover:to-agro-200 rounded-xl shadow-lg shadow-agro-500/25 transition-all duration-300 transform hover:-translate-y-0.5">
                                    Registrarse
                                </a>
                            @endif
                        @endauth
                    @endif
                </div>
            </div>
        </div>
    </header>

    <!-- HERO SECTION (#inicio) -->
    <section id="inicio" class="relative min-h-screen pt-20 flex items-center justify-center overflow-hidden bg-slate-950">
        <!-- Hero Background Image & Overlay -->
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('images/hero_bg.jpg') }}" alt="Agroxion Hero Background" class="w-full h-full object-cover object-center opacity-30 scale-105 transition-transform duration-1000">
            <div class="absolute inset-0 bg-gradient-to-b from-slate-950/80 via-slate-950/70 to-slate-950"></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 lg:py-32 text-center">
            <div class="inline-flex items-center space-x-2 px-4 py-2 rounded-full bg-slate-800/60 border border-agro-500/30 backdrop-blur-md mb-8">
                <span class="flex h-2 w-2 rounded-full bg-agro-400 animate-ping"></span>
                <span class="text-xs font-semibold uppercase tracking-wider text-agro-300">Plataforma Agrícola Integral</span>
            </div>

            <h1 class="text-4xl sm:text-6xl lg:text-7xl font-heading font-extrabold text-white tracking-tight leading-tight max-w-4xl mx-auto">
                Gestión Inteligente de <span class="bg-gradient-to-r from-agro-400 via-teal-300 to-harvest-400 bg-clip-text text-transparent">Insumos y Cultivos</span>
            </h1>

            <p class="mt-6 text-lg sm:text-xl text-slate-300 max-w-2xl mx-auto font-normal leading-relaxed">
                Optimice el inventario de fertilizantes, semillas y pesticidas en su negocio agrícola. Maximice el rendimiento del campo con trazabilidad y control total de ventas.
            </p>

            <div class="mt-10 flex flex-col sm:flex-row items-center justify-center gap-4">
                <a href="#productos" class="w-full sm:w-auto px-8 py-4 bg-agro-600 hover:bg-agro-500 text-white font-bold rounded-2xl shadow-xl shadow-agro-900/40 hover:scale-105 transition-all duration-300 flex items-center justify-center space-x-2">
                    <span>Explorar Insumos</span>
                    <i class="fas fa-arrow-down text-xs"></i>
                </a>

                <a href="{{ route('login') }}" class="w-full sm:w-auto px-8 py-4 bg-slate-900/80 hover:bg-slate-800 border border-slate-700/60 text-white font-semibold rounded-2xl backdrop-blur-md transition-all duration-300 flex items-center justify-center space-x-2">
                    <span>Acceso al Sistema</span>
                </a>
            </div>

            <!-- Stats Bar -->
            <div class="mt-20 grid grid-cols-2 md:grid-cols-4 gap-6 lg:gap-8 max-w-4xl mx-auto bg-slate-900/40 backdrop-blur-md p-6 sm:p-8 rounded-3xl border border-slate-800">
                <div>
                    <p class="text-3xl sm:text-4xl font-heading font-extrabold text-agro-400">+1,500</p>
                    <p class="text-xs sm:text-sm text-slate-300 mt-1">Insumos Catalogados</p>
                </div>
                <div>
                    <p class="text-3xl sm:text-4xl font-heading font-extrabold text-teal-300">99.8%</p>
                    <p class="text-xs sm:text-sm text-slate-300 mt-1">Precisión de Inventario</p>
                </div>
                <div>
                    <p class="text-3xl sm:text-4xl font-heading font-extrabold text-harvest-400">+850</p>
                    <p class="text-xs sm:text-sm text-slate-300 mt-1">Productores Atendidos</p>
                </div>
                <div>
                    <p class="text-3xl sm:text-4xl font-heading font-extrabold text-agro-300">24/7</p>
                    <p class="text-xs sm:text-sm text-slate-300 mt-1">Control de Stock</p>
                </div>
            </div>
        </div>
    </section>

    <!-- NOSOTROS SECTION (#nosotros) -->
    <section id="nosotros" class="py-24 bg-white relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="text-xs font-bold uppercase tracking-widest text-agro-600 mb-3">Sobre Agroxion</h2>
                <p class="text-3xl sm:text-4xl font-heading font-extrabold text-slate-900 tracking-tight">Impulsamos la productividad agrícola de tu negocio</p>
                <p class="mt-4 text-slate-600 leading-relaxed text-sm sm:text-base">
                    Agroxion integra tecnología avanzada para simplificar la comercialización e inventariado de insumos esenciales como semillas de alto rendimiento, fertilizantes y protectores de cultivos.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Card 1 -->
                <div class="p-8 rounded-3xl bg-slate-50 border border-slate-200/80 hover:border-agro-500/50 hover:shadow-xl transition-all duration-300 group">
                    <div class="w-14 h-14 rounded-2xl bg-agro-100 text-agro-700 flex items-center justify-center mb-6 group-hover:scale-110 group-hover:bg-agro-600 group-hover:text-white transition-all duration-300">
                        <i class="fas fa-boxes-stacked text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-heading font-bold text-slate-900 mb-3">Control de Inventario en Tiempo Real</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">Monitoree stocks de insumos, vencimientos y alertas de reabastecimiento automático para no interrumpir el ciclo de siembra.</p>
                </div>

                <!-- Card 2 -->
                <div class="p-8 rounded-3xl bg-slate-50 border border-slate-200/80 hover:border-harvest-500/50 hover:shadow-xl transition-all duration-300 group">
                    <div class="w-14 h-14 rounded-2xl bg-harvest-100 text-harvest-700 flex items-center justify-center mb-6 group-hover:scale-110 group-hover:bg-harvest-600 group-hover:text-white transition-all duration-300">
                        <i class="fas fa-cash-register text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-heading font-bold text-slate-900 mb-3">Gestión Agilizada de Ventas</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">Registre ventas en mostrador y pedidos a campo con cálculo automático de márgenes, impuestos y facturación agrícola.</p>
                </div>

                <!-- Card 3 -->
                <div class="p-8 rounded-3xl bg-slate-50 border border-slate-200/80 hover:border-teal-500/50 hover:shadow-xl transition-all duration-300 group">
                    <div class="w-14 h-14 rounded-2xl bg-teal-100 text-teal-700 flex items-center justify-center mb-6 group-hover:scale-110 group-hover:bg-teal-600 group-hover:text-white transition-all duration-300">
                        <i class="fas fa-shield-halved text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-heading font-bold text-slate-900 mb-3">Calidad Certificada Garantizada</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">Trabajamos exclusivamente con insumos probados y garantizados que aseguran un suelo sano y cosechas de alto valor.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- PRODUCTOS DESTACADOS SECTION (#productos) -->
    <section id="productos" class="py-24 bg-slate-100/60 relative border-t border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-16">
                <div>
                    <h2 class="text-xs font-bold uppercase tracking-widest text-agro-600 mb-3">Catálogo Destacado</h2>
                    <p class="text-3xl sm:text-4xl font-heading font-extrabold text-slate-900 tracking-tight">Insumos Agrícolas de Primera Línea</p>
                </div>
                <div class="mt-4 md:mt-0">
                    <a href="{{ route('login') }}" class="inline-flex items-center space-x-2 text-sm font-semibold text-agro-700 hover:text-agro-800 transition-colors">
                        <span>Ver catálogo completo</span>
                        <i class="fas fa-arrow-right text-xs"></i>
                    </a>
                </div>
            </div>

            <!-- Product Cards Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Product 1 -->
                <div class="bg-white rounded-3xl border border-slate-200 overflow-hidden shadow-xs hover:shadow-xl transition-all duration-300 group p-6 flex flex-col justify-between">
                    <div>
                        <div class="h-44 rounded-2xl bg-agro-50 flex items-center justify-center text-agro-600 mb-4 group-hover:scale-105 transition-transform duration-300">
                            <i class="fas fa-seedling text-5xl"></i>
                        </div>
                        <span class="text-[10px] uppercase font-bold text-agro-700 bg-agro-50 px-2.5 py-0.5 rounded-full">Fertilizantes</span>
                        <h4 class="font-heading font-bold text-slate-900 text-base mt-2">Fertilizante NPK 15-15-15</h4>
                        <p class="text-xs text-slate-500 mt-1">Saco de 50 kg • Nutrición Balanceada</p>
                    </div>
                    <div class="mt-4 pt-3 border-t border-slate-100 flex items-center justify-between">
                        <span class="text-xl font-heading font-extrabold text-slate-900">$45.00</span>
                        <span class="text-xs font-semibold text-agro-700 bg-agro-50 px-2.5 py-1 rounded-md">En Stock</span>
                    </div>
                </div>

                <!-- Product 2 -->
                <div class="bg-white rounded-3xl border border-slate-200 overflow-hidden shadow-xs hover:shadow-xl transition-all duration-300 group p-6 flex flex-col justify-between">
                    <div>
                        <div class="h-44 rounded-2xl bg-harvest-50 flex items-center justify-center text-harvest-600 mb-4 group-hover:scale-105 transition-transform duration-300">
                            <i class="fas fa-wheat-awn text-5xl"></i>
                        </div>
                        <span class="text-[10px] uppercase font-bold text-harvest-700 bg-harvest-50 px-2.5 py-0.5 rounded-full">Semillas</span>
                        <h4 class="font-heading font-bold text-slate-900 text-base mt-2">Semilla Híbrida de Maíz</h4>
                        <p class="text-xs text-slate-500 mt-1">Bolsa 60k granos • Alta Resistencia</p>
                    </div>
                    <div class="mt-4 pt-3 border-t border-slate-100 flex items-center justify-between">
                        <span class="text-xl font-heading font-extrabold text-slate-900">$120.00</span>
                        <span class="text-xs font-semibold text-agro-700 bg-agro-50 px-2.5 py-1 rounded-md">En Stock</span>
                    </div>
                </div>

                <!-- Product 3 -->
                <div class="bg-white rounded-3xl border border-slate-200 overflow-hidden shadow-xs hover:shadow-xl transition-all duration-300 group p-6 flex flex-col justify-between">
                    <div>
                        <div class="h-44 rounded-2xl bg-amber-50 flex items-center justify-center text-amber-600 mb-4 group-hover:scale-105 transition-transform duration-300">
                            <i class="fas fa-shield-virus text-5xl"></i>
                        </div>
                        <span class="text-[10px] uppercase font-bold text-amber-700 bg-amber-50 px-2.5 py-0.5 rounded-full">Protección</span>
                        <h4 class="font-heading font-bold text-slate-900 text-base mt-2">Fungicida Sistémico Bio</h4>
                        <p class="text-xs text-slate-500 mt-1">Envase 5L • Orgánico y Biodegradable</p>
                    </div>
                    <div class="mt-4 pt-3 border-t border-slate-100 flex items-center justify-between">
                        <span class="text-xl font-heading font-extrabold text-slate-900">$68.50</span>
                        <span class="text-xs font-semibold text-agro-700 bg-agro-50 px-2.5 py-1 rounded-md">En Stock</span>
                    </div>
                </div>

                <!-- Product 4 -->
                <div class="bg-white rounded-3xl border border-slate-200 overflow-hidden shadow-xs hover:shadow-xl transition-all duration-300 group p-6 flex flex-col justify-between">
                    <div>
                        <div class="h-44 rounded-2xl bg-blue-50 flex items-center justify-center text-blue-600 mb-4 group-hover:scale-105 transition-transform duration-300">
                            <i class="fas fa-faucet-drip text-5xl"></i>
                        </div>
                        <span class="text-[10px] uppercase font-bold text-blue-700 bg-blue-50 px-2.5 py-0.5 rounded-full">Riego</span>
                        <h4 class="font-heading font-bold text-slate-900 text-base mt-2">Cinta de Riego por Goteo</h4>
                        <p class="text-xs text-slate-500 mt-1">Rollo 1000m • Distancia 20cm</p>
                    </div>
                    <div class="mt-4 pt-3 border-t border-slate-100 flex items-center justify-between">
                        <span class="text-xl font-heading font-extrabold text-slate-900">$85.00</span>
                        <span class="text-xs font-semibold text-amber-700 bg-amber-50 px-2.5 py-1 rounded-md">Últimas Unidades</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SOLUCIONES / SERVICIOS SECTION (#servicios) -->
    <section id="servicios" class="py-24 bg-gradient-to-br from-slate-900 via-slate-900 to-agro-950 text-white relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <span class="text-xs font-bold uppercase tracking-widest text-agro-400">Soluciones Integrales</span>
                    <h2 class="text-3xl sm:text-5xl font-heading font-extrabold tracking-tight mt-2 mb-6 leading-tight">
                        Optimice cada fase del negocio agrícola con Agroxion
                    </h2>
                    <p class="text-slate-300 mb-8 leading-relaxed text-sm sm:text-base">
                        Nuestra plataforma no solo controla sus existencias físicas, sino que conecta las compras de insumos directamente con los registros de ventas y clientes de su empresa.
                    </p>

                    <div class="space-y-4">
                        <div class="flex items-start space-x-4">
                            <div class="w-8 h-8 rounded-lg bg-agro-500/20 text-agro-400 flex items-center justify-center shrink-0 mt-1">
                                <i class="fas fa-check text-xs"></i>
                            </div>
                            <div>
                                <h4 class="font-heading font-bold text-white">Alertas de Stock Mínimo y Vencimientos</h4>
                                <p class="text-xs sm:text-sm text-slate-300 mt-0.5">Evite pérdidas de productos químicos o agroinsumos caducados mediante notificaciones inteligentes.</p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-4">
                            <div class="w-8 h-8 rounded-lg bg-agro-500/20 text-agro-400 flex items-center justify-center shrink-0 mt-1">
                                <i class="fas fa-check text-xs"></i>
                            </div>
                            <div>
                                <h4 class="font-heading font-bold text-white">Reportes de Rentabilidad y Ventas por Categoría</h4>
                                <p class="text-xs sm:text-sm text-slate-300 mt-0.5">Conozca exactamente qué semillas o agroquímicos están impulsando mayores ingresos.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-slate-800/40 backdrop-blur-xl p-8 rounded-3xl border border-slate-700/60 shadow-2xl">
                    <h3 class="text-2xl font-heading font-bold mb-4">¿Interesado en una Demostración?</h3>
                    <p class="text-sm text-slate-300 mb-6">Regístrese hoy mismo para solicitar una prueba personalizada del módulo de gestión de Agroxion.</p>

                    <form action="#" method="GET" class="space-y-4" onsubmit="event.preventDefault();">
                        <div>
                            <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-2">Nombre completo</label>
                            <input type="text" placeholder="Ej. Carlos Mendoza" class="w-full px-4 py-3 rounded-xl bg-slate-900/60 border border-slate-700 text-white placeholder-slate-500 focus:outline-none focus:border-agro-400 text-sm">
                        </div>
                        <div>
                            <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-2">Correo Electrónico</label>
                            <input type="email" placeholder="carlos@agroejemplo.com" class="w-full px-4 py-3 rounded-xl bg-slate-900/60 border border-slate-700 text-white placeholder-slate-500 focus:outline-none focus:border-agro-400 text-sm">
                        </div>
                        <button type="button" class="w-full py-4 bg-agro-600 hover:bg-agro-500 text-white font-heading font-bold rounded-xl shadow-lg shadow-agro-900/40 transition-all duration-300">
                            Enviar Solicitud
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACTO SECTION (#contacto) -->
    <section id="contacto" class="py-24 bg-white relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="text-xs font-bold uppercase tracking-widest text-agro-600 mb-3">Contacto & Soporte</h2>
                <p class="text-3xl sm:text-4xl font-heading font-extrabold text-slate-900 tracking-tight">Estamos para respaldar tu negocio</p>
                <p class="mt-4 text-slate-600 leading-relaxed text-sm sm:text-base">
                    Si tienes dudas sobre inventario, distribución de insumos o la integración del sistema, escríbenos directamente.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="p-8 rounded-3xl bg-slate-50 border border-slate-200 text-center">
                    <div class="w-12 h-12 rounded-2xl bg-agro-100 text-agro-700 flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-clock text-xl"></i>
                    </div>
                    <h4 class="font-heading font-bold text-slate-900 mb-1">Atención Directa</h4>
                    <p class="text-xs text-slate-500 mb-3">Lunes a Sábado: 8:00 AM - 6:00 PM</p>
                    <p class="text-sm font-semibold text-agro-700">+51 (01) 800-AGRO</p>
                </div>

                <div class="p-8 rounded-3xl bg-slate-50 border border-slate-200 text-center">
                    <div class="w-12 h-12 rounded-2xl bg-harvest-100 text-harvest-700 flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-envelope text-xl"></i>
                    </div>
                    <h4 class="font-heading font-bold text-slate-900 mb-1">Consultas Comerciales</h4>
                    <p class="text-xs text-slate-500 mb-3">Atención por correo electrónico</p>
                    <p class="text-sm font-semibold text-agro-700">soporte@agroxion.com</p>
                </div>

                <div class="p-8 rounded-3xl bg-slate-50 border border-slate-200 text-center">
                    <div class="w-12 h-12 rounded-2xl bg-teal-100 text-teal-700 flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-location-dot text-xl"></i>
                    </div>
                    <h4 class="font-heading font-bold text-slate-900 mb-1">Oficina Central</h4>
                    <p class="text-xs text-slate-500 mb-3">Sede Principal Almacenes</p>
                    <p class="text-sm font-semibold text-agro-700">Sector Agrícola Central</p>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="bg-slate-950 border-t border-slate-800 py-12 text-slate-400 text-xs">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col sm:flex-row items-center justify-between gap-6">
            <div class="flex items-center space-x-3">
                <div class="w-8 h-8 rounded-lg bg-agro-600 text-white flex items-center justify-center">
                    <i class="fas fa-seedling text-sm"></i>
                </div>
                <div>
                    <span class="font-heading font-extrabold text-sm text-white">AGROXION</span>
                    <span class="block text-[10px] text-agro-400">Insumos & Inventario</span>
                </div>
            </div>

            <p class="text-center sm:text-right">
                &copy; {{ date('Y') }} Agroxion. Todos los derechos reservados.
            </p>
        </div>
    </footer>

</body>
</html>
