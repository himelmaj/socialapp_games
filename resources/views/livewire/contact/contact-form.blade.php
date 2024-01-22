<section>
    <form action="flex flex-col" wire:submit.prevent="submitForm" method="POST">
        @csrf
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input wire:model="name" id="name" class="block mt-1 w-full" type="name" name="name" required
                autocomplete="new-password" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        {{-- Email --}}
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input wire:model="email" id="email" class="block mt-1 w-full" type="email" name="email"
                required autocomplete="new-email" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        {{-- Message --}}
        <div class="mt-4">
            <x-input-label for="message" :value="__('Message')" />
            <x-text-input wire:model="message" id="message" class="block mt-1 w-full" type="message" name="message"
                required autocomplete="new-message" />
            <x-input-error :messages="$errors->get('message')" class="mt-2" />
        </div>

        <div class="flex items-center mt-4">
            <x-primary-button class="ms-4">{{ __('Send Message') }}</x-primary-button>
        </div>
    </form>
</section>
