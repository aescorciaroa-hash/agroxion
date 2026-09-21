@props(['type' => 'optimo'])

@php
    $classes = match($type) {
        'fertilizante' => 'bg-agro-50 text-agro-700 border-agro-200',
        'semilla' => 'bg-harvest-50 text-harvest-800 border-harvest-200',
        'agroquimico', 'fitosanitario' => 'bg-blue-50 text-blue-700 border-blue-200',
        'fungicida' => 'bg-purple-50 text-purple-700 border-purple-200',
        'organico' => 'bg-emerald-50 text-emerald-800 border-emerald-200',
        'optimo' => 'bg-emerald-100 text-emerald-800 border-emerald-300',
        'alerta' => 'bg-amber-100 text-amber-800 border-amber-300',
        'critico' => 'bg-rose-100 text-rose-800 border-rose-300 animate-pulse',
        'vencido' => 'bg-red-100 text-red-900 border-red-300',
        default => 'bg-slate-100 text-slate-700 border-slate-200',
    };

    $icon = match($type) {
        'fertilizante' => 'fa-seedling',
        'semilla' => 'fa-wheat-awn',
        'agroquimico', 'fitosanitario' => 'fa-flask',
        'fungicida' => 'fa-shield-virus',
        'organico' => 'fa-leaf',
        'optimo' => 'fa-check-circle',
        'alerta' => 'fa-triangle-exclamation',
        'critico' => 'fa-circle-exclamation',
        'vencido' => 'fa-calendar-xmark',
        default => 'fa-tag',
    };
@endphp

<span {{ $attributes->merge(['class' => "inline-flex items-center gap-1.5 px-2.5 py-1 rounded-md text-[11px] font-semibold border $classes"]) }}>
    <i class="fas {{ $icon }} text-[10px]"></i>
    <span>{{ $slot }}</span>
</span>
