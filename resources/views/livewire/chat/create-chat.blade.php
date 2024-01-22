<div class="grid grid-cols-4 gap-4">

    @foreach ($users as $user)
        <div class="bg-zinc-900 m-5 p-4 rounded-lg dark:bg-gray-800 dark:text-gray-200"
            wire:click='checkconversation({{ $user->id }})'>
            <p>{{ $user->name }}</p>
            <p>{{ $user->email }}</p>
        </div>
    @endforeach
</div>
