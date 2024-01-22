<div class="grid grid-cols-4 gap-4">
    @if (count($games) > 0)
        @foreach ($games as $game)
            <div class="bg-zinc-900 m-5 p-4 rounded-lg dark:bg-gray-800 dark:text-gray-200 flex flex-col h-full">
                <picture>
                    <img src="{{ asset('images/' . $game->src) }}" alt="{{ $game->title }}" class="w-full object-cover">
                </picture>
                <div class="flex flex-col items-center">
                    <h3>{{$game->title}}</h3>
                    <p class="">{{ $game->description }}</p>
                    <p>{{ $game->genre->name }}</p>
                </div>
            </div>
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
