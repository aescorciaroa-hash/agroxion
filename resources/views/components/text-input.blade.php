@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'border-slate-200 focus:border-agro-600 focus:ring-agro-600 rounded-xl shadow-2xs text-xs sm:text-sm text-slate-800 placeholder-slate-400 transition-colors']) }}>
