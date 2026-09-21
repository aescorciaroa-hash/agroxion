@extends('layouts.sidebardadmin')

@section('tituloPagina', 'Dashboard')

@section('content')
<div class="space-y-6">
    <!-- Welcome Header Card -->
    <div class="bg-white rounded-2xl border border-slate-200 p-6 shadow-xs">
        <div class="flex items-center gap-2 text-xs font-semibold uppercase tracking-wider text-agro-700">
            <i class="fas fa-leaf"></i>
            <span>Sistema ERP Agropecuario</span>
        </div>
        <h1 class="text-2xl font-heading font-extrabold text-slate-900 mt-1">
            Panel de Administración
        </h1>
        <p class="text-sm text-slate-500 mt-0.5">
            Bienvenido al sistema de control de inventario y ventas de insumos agrícolas.
        </p>
    </div>
</div>
@endsection