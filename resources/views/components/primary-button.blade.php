<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center justify-center px-5 py-2.5 bg-agro-600 border border-transparent rounded-xl font-heading font-bold text-xs text-white uppercase tracking-wider hover:bg-agro-700 active:bg-agro-800 focus:outline-none focus:ring-2 focus:ring-agro-500 focus:ring-offset-2 shadow-sm transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
