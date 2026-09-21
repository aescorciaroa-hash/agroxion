@extends('layouts.sidebardvendedor')

@section('tituloPagina', 'Dashboard Vendedor')

@section('content')
<div class="space-y-6">
    <div class="bg-white rounded-2xl border border-slate-200 p-6 shadow-xs">
        <div class="flex items-center gap-2 text-xs font-semibold uppercase tracking-wider text-harvest-700">
            <i class="fas fa-cash-register"></i>
            <span>Punto de Venta & Mostrador</span>
        </div>
        <h1 class="text-2xl font-heading font-extrabold text-slate-900 mt-1">
            Panel de Vendedor
        </h1>
        <p class="text-sm text-slate-500 mt-0.5">
            Módulo de atención en mostrador y comercialización de insumos agrícolas.
        </p>
    </div>
</div>
@endsection
