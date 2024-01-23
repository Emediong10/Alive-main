
@if (filled($brand = config('filament.brand')))
    <div
        @class([
            'filament-brand text-xl font-bold leading-5 tracking-tight',
            'dark:text-white' => config('filament.dark_mode'),
        ])
    >
    <img src="{{ asset('assets/images/Aliveng.png') }}" alt="Logo" class="h-10">
    {{ $brand }}
</div>
@endif
