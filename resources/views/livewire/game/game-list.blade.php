<div class="grid grid-cols-4 gap-4 my-5">
    @if (count($games) > 0)
        @foreach ($games as $game)
            <a href="{{ route('game', $game->id) }}" 
                class="transition-all duration-75 ease-in-out h-full block relative top-0 hover:-top-2 
        shadow-lg hover:shadow-xl bg-gray-800 rounded-xl overflow-hidden">
                <picture>
                    <img src="{{ asset('images/' . $game->src) }}" alt="{{ $game->title }}"
                        class="w-full h-full object-cover">
                </picture>
            </a>
        @endforeach
    @else
        <div class="bg-zinc-900 m-5 p-4 rounded-lg dark:bg-gray-800 dark:text-gray-200 flex flex-col h-full">
            <div class="flex-grow"></div>
            <div class="flex flex-col items-center">
                <h3 class="text-xl font-bold font-serif">No games found</h3>
            </div>
        </div>
    @endif

</div>
</div>
