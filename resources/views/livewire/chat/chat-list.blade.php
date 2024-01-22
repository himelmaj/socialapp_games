<aside class="flex flex-col flex-1 gap-2 p-2">
    <div class="dark:bg-gray-900 rounded-lg p-2">
        <div
            class="flex gap-4 text-zinc-400 hover:text-zinc-100 items-center py-3 px-5 font-medium transition duration-300">
            <h1 class="text-2xl font-bold text-gray-100">Chat </h1>
        </div>
    </div>

    <div class=" rounded-lg flex-1">
        @if (count($conversations) > 0)
        <ul>
            @foreach ($conversations as $conversation)
                {{-- <picture class="h-12 w-12 flex-none">
                    <img src="https://picsum.photos/id/{{ $this->getChatUserInstance($conversation, $name = 'id') }}/200/300"
                        alt="Picture of the author" class="object-cover rounded-md" />
                </picture> --}}
                <a
                    class="playlist-item flex relative p-2 overflow-hidden items-center gap-5 rounded-md hover:bg-zinc-800 dark:bg-gray-900 mb-3">
                    <div class="flex flex-auto flex-col truncate h-10 ">
                        <h4 class="text-white text-sm">
                            {{ $this->getChatUserInstance($conversation, $name = 'name') }}
                        </h4>

                        <span class="text-xs text-gray-400">
                            {{-- {{$conversation->messages->last()->body}} --}}
                        </span>
                        <span class="text-xs text-gray-400">
                          {{-- {{$conversation->messages->last()->created_at->shortAbsoluteDiffForHumans()}} --}}
                      </span>
                    </div>
                </a>
            @endforeach
          </ul>
        @else
            no convesation
        @endif
    </div>
</aside>
