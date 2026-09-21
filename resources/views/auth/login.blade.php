<x-guest-layout>
    <div class="mb-6 text-center">
        <h3 class="text-2xl font-heading font-extrabold text-slate-900">Bienvenido de nuevo</h3>
        <p class="text-xs sm:text-sm text-slate-500 mt-1.5">Ingresa tus credenciales para acceder al sistema Agroxion</p>
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}" class="space-y-4">
        @csrf

        <!-- Email Address -->
        <div>
            <label for="email" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">Correo Electrónico</label>
            <div class="relative">
                <i class="fas fa-envelope absolute left-3.5 top-3.5 text-slate-400 text-xs"></i>
                <input id="email" name="email" type="email" autocomplete="username" required autofocus value="{{ old('email') }}" 
                    placeholder="ejemplo@agroxion.com"
                    class="appearance-none block w-full pl-10 pr-4 py-2.5 border border-slate-200 rounded-xl shadow-2xs placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-agro-500/20 focus:border-agro-600 text-xs sm:text-sm transition-colors">
            </div>
            <x-input-error :messages="$errors->get('email')" class="mt-1.5 text-rose-600 text-xs font-medium" />
        </div>

        <!-- Password -->
        <div>
            <label for="password" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">Contraseña</label>
            <div class="relative">
                <i class="fas fa-lock absolute left-3.5 top-3.5 text-slate-400 text-xs"></i>
                <input id="password" name="password" type="password" autocomplete="current-password" required 
                    placeholder="••••••••"
                    class="appearance-none block w-full pl-10 pr-4 py-2.5 border border-slate-200 rounded-xl shadow-2xs placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-agro-500/20 focus:border-agro-600 text-xs sm:text-sm transition-colors">
            </div>
            <x-input-error :messages="$errors->get('password')" class="mt-1.5 text-rose-600 text-xs font-medium" />
        </div>

        <!-- Remember Me & Forgot Password -->
        <div class="flex items-center justify-between pt-1">
            <div class="flex items-center">
                <input id="remember_me" name="remember" type="checkbox" 
                    class="h-4 w-4 text-agro-600 focus:ring-agro-500 border-slate-300 rounded cursor-pointer">
                <label for="remember_me" class="ml-2 block text-xs text-slate-600 cursor-pointer select-none">
                    Recordar sesión
                </label>
            </div>

            <div class="text-xs">
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="font-medium text-agro-700 hover:text-agro-800 transition-colors">
                        ¿Olvidaste tu contraseña?
                    </a>
                @endif
            </div>
        </div>

        <div class="pt-2">
            <button type="submit" 
                class="w-full py-3 px-4 border border-transparent rounded-xl shadow-md shadow-agro-900/20 text-xs sm:text-sm font-heading font-extrabold text-white bg-agro-600 hover:bg-agro-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-agro-500 transition-all transform active:scale-98 flex items-center justify-center gap-2">
                <i class="fas fa-arrow-right-to-bracket"></i>
                <span>Ingresar a Agroxion</span>
            </button>
        </div>
        
        @if (Route::has('register'))
            <div class="mt-6 text-center text-xs text-slate-500 pt-2 border-t border-slate-100">
                ¿No tienes cuenta aún? 
                <a href="{{ route('register') }}" class="font-bold text-agro-700 hover:text-agro-800 transition-colors">
                    Crear cuenta de productor
                </a>
            </div>
        @endif
    </form>
</x-guest-layout>
