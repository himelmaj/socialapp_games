<section>
    <form action="flex flex-col" wire:submit.prevent="submitForm" method="POST">
        @csrf
        <div class="mt-4">
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input wire:model="name" id="name" class="block mt-1 w-full" type="text" name="name" required autocomplete="new-name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        {{-- Email --}}
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input wire:model="email" id="email" class="block mt-1 w-full" type="email" name="email" required autocomplete="new-email" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        {{-- Message --}}
        <div class="mt-4">
            <x-input-label for="message" :value="__('Message')" />
            <x-text-text-area wire:model="message" id="message" class="block mt-1 w-full h-40 " name="message" required autocomplete="new-message">{{ __('Message') }}</x-text-text-area>            <x-input-error :messages="$errors->get('message')" class="mt-2" />
        </div>

        <div class="flex items-center mt-4">
            <x-primary-button class="">{{ __('Send Message') }}</x-primary-button>
            <x-action-message class="ml-3" on="message-sended">{{ __('Sended!') }}</x-action-message>
        </div>
    </form>
</section>
