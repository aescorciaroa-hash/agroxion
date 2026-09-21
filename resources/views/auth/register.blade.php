<x-guest-layout>
    <div class="mb-6 text-center">
        <h3 class="text-2xl font-heading font-extrabold text-slate-900">Registro de Productor</h3>
        <p class="text-xs sm:text-sm text-slate-500 mt-1.5">Únete a Agroxion y accede a precios preferenciales en insumos</p>
    </div>

    <form method="POST" action="{{ route('register') }}" class="space-y-4">
        @csrf

        <!-- Name -->
        <div>
            <label for="name" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">Nombre Completo</label>
            <div class="relative">
                <i class="fas fa-user absolute left-3.5 top-3.5 text-slate-400 text-xs"></i>
                <input id="name" name="name" type="text" autocomplete="name" required autofocus value="{{ old('name') }}" 
                    placeholder="Ej: Roberto Alarcón"
                    class="appearance-none block w-full pl-10 pr-4 py-2.5 border border-slate-200 rounded-xl shadow-2xs placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-agro-500/20 focus:border-agro-600 text-xs sm:text-sm transition-colors">
            </div>
            <x-input-error :messages="$errors->get('name')" class="mt-1.5 text-rose-600 text-xs font-medium" />
        </div>

        <!-- Email Address -->
        <div>
            <label for="email" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">Correo Electrónico</label>
            <div class="relative">
                <i class="fas fa-envelope absolute left-3.5 top-3.5 text-slate-400 text-xs"></i>
                <input id="email" name="email" type="email" autocomplete="username" required value="{{ old('email') }}" 
                    placeholder="productor@finca.com"
                    class="appearance-none block w-full pl-10 pr-4 py-2.5 border border-slate-200 rounded-xl shadow-2xs placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-agro-500/20 focus:border-agro-600 text-xs sm:text-sm transition-colors">
            </div>
            <x-input-error :messages="$errors->get('email')" class="mt-1.5 text-rose-600 text-xs font-medium" />
        </div>

        <!-- Password -->
        <div>
            <label for="password" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">Contraseña</label>
            <div class="relative">
                <i class="fas fa-lock absolute left-3.5 top-3.5 text-slate-400 text-xs"></i>
                <input id="password" name="password" type="password" autocomplete="new-password" required 
                    placeholder="Mínimo 8 caracteres"
                    class="appearance-none block w-full pl-10 pr-4 py-2.5 border border-slate-200 rounded-xl shadow-2xs placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-agro-500/20 focus:border-agro-600 text-xs sm:text-sm transition-colors">
            </div>
            <x-input-error :messages="$errors->get('password')" class="mt-1.5 text-rose-600 text-xs font-medium" />
        </div>

        <!-- Confirm Password -->
        <div>
            <label for="password_confirmation" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">Confirmar Contraseña</label>
            <div class="relative">
                <i class="fas fa-shield-halved absolute left-3.5 top-3.5 text-slate-400 text-xs"></i>
                <input id="password_confirmation" name="password_confirmation" type="password" autocomplete="new-password" required 
                    placeholder="Repite tu contraseña"
                    class="appearance-none block w-full pl-10 pr-4 py-2.5 border border-slate-200 rounded-xl shadow-2xs placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-agro-500/20 focus:border-agro-600 text-xs sm:text-sm transition-colors">
            </div>
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-1.5 text-rose-600 text-xs font-medium" />
        </div>

        <div class="pt-2">
            <button type="submit" 
                class="w-full py-3 px-4 border border-transparent rounded-xl shadow-md shadow-agro-900/20 text-xs sm:text-sm font-heading font-extrabold text-white bg-agro-600 hover:bg-agro-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-agro-500 transition-all transform active:scale-98 flex items-center justify-center gap-2">
                <i class="fas fa-user-plus"></i>
                <span>Crear Cuenta en Agroxion</span>
            </button>
        </div>
        
        <div class="mt-4 text-center text-xs text-slate-500 pt-2 border-t border-slate-100">
            ¿Ya tienes una cuenta registrada? 
            <a href="{{ route('login') }}" class="font-bold text-agro-700 hover:text-agro-800 transition-colors">
                Iniciar sesión
            </a>
        </div>
    </form>
</x-guest-layout>
