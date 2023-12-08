<x-filament::widget>
    <x-filament::card>
        {{-- Widget content --}}
        @php
        $url =   App\Filament\Resources\NewsResource::getUrl('index');
        $news = App\Models\News::count();
     //    dump($url);
     @endphp
     <a href="{{ url($url) }}">
        <div class="text-4xl text-center font-bold text-orange-500 mb-4">
            {{ $news }}
            {{-- @php
                 $user = App\Models\User::where('role_id',1)->first();
                dump($user->role->title);
            @endphp --}}
        </div>
        <h3 class="text-lg font-medium text-center mb-2">Total News</h3>
        {{-- 102371098509523726029 --}}
        <div class="flex justify-between">
        </div>
    </a>
    </x-filament::card>
</x-filament::widget>