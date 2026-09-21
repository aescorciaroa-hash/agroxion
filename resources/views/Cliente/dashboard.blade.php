@extends('layouts.sidebardcliente')

@section('tituloPagina', 'Portal del Cliente')

@section('content')
<div class="space-y-6">
    <div class="bg-white rounded-2xl border border-slate-200 p-6 shadow-xs">
        <div class="flex items-center gap-2 text-xs font-semibold uppercase tracking-wider text-agro-700">
            <i class="fas fa-tractor"></i>
            <span>Portal del Productor Agrícola</span>
        </div>
        <h1 class="text-2xl font-heading font-extrabold text-slate-900 mt-1">
            Bienvenido a tu Portal
        </h1>
        <p class="text-sm text-slate-500 mt-0.5">
            Consulta de catálogo de insumos y compras registradas.
        </p>
    </div>
</div>
@endsection