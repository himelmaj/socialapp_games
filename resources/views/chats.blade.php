<x-app-layout>

    <div id="chats" class="relative min-h-screen p-2 gap-2 flex">
        <div class="grid-area-aside flex flex-col overflow dark:bg-gray-800 rounded-lg">
            <livewire:chat.chat-list />
        </div>
        <div class="grid-area-main flex-1 rounded-lg dark:bg-gray-800 overflow-y-auto w-full">
            <livewire:chat.chatbox />
            <livewire:chat.send-message />
        </div>

</x-app-layout>
