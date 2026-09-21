<x-app-layout>
    <div class="max-w-4xl mx-auto space-y-6">
        <!-- Header -->
        <div class="flex items-center justify-between">
            <div>
                <div class="flex items-center gap-2 text-xs font-semibold text-agro-700 uppercase tracking-wider">
                    <i class="fas fa-id-card"></i>
                    <span>Configuración de Cuenta</span>
                </div>
                <h1 class="text-2xl font-heading font-extrabold text-slate-900 mt-1">Mi Perfil de Usuario</h1>
                <p class="text-xs sm:text-sm text-slate-500">Actualiza tu información personal, correo y credenciales de acceso al sistema Agroxion.</p>
            </div>
            <a href="{{ route('dashboard') }}" class="px-4 py-2 text-xs font-semibold text-slate-700 bg-white hover:bg-slate-100 rounded-xl border border-slate-200 transition-colors flex items-center gap-2 shadow-2xs">
                <i class="fas fa-arrow-left"></i>
                <span>Volver al Panel</span>
            </a>
        </div>

        <!-- Information Card -->
        <div class="p-6 sm:p-8 bg-white rounded-3xl border border-slate-200 shadow-xs">
            <div class="max-w-xl">
                @include('profile.partials.update-profile-information-form')
            </div>
        </div>

        <!-- Password Card -->
        <div class="p-6 sm:p-8 bg-white rounded-3xl border border-slate-200 shadow-xs">
            <div class="max-w-xl">
                @include('profile.partials.update-password-form')
            </div>
        </div>

        <!-- Danger Zone Card -->
        <div class="p-6 sm:p-8 bg-white rounded-3xl border border-rose-200/80 shadow-xs bg-gradient-to-br from-white to-rose-50/20">
            <div class="max-w-xl">
                @include('profile.partials.delete-user-form')
            </div>
        </div>
    </div>
</x-app-layout>
