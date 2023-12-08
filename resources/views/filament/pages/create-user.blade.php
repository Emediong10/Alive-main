<x-filament::page>
    <form wire:submit.prevent='submit' >
        {{ $this->form }}
        <button style="margin-top: 12px; margin-left:12px" class="filament-button filament-button-size-sm inline-flex items-center justify-center rounded-lg border transition-colors outline-none focus:ring-offset-2 focus:ring-2 focus:ring-inset dark:focus:ring-offset-0 min-h-[2rem] px-3 text-sm text-white shadow focus:ring-white border-transparent bg-primary-600 hover:bg-primary-500 focus:bg-primary-700 focus:ring-offset-primary-700" type="submit">
            Submit
        </button>
    </form>
</x-filament::page>