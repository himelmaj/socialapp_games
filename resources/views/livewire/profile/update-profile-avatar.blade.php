<div>
    <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
        {{ __('Avatar Upload') }}
    </h2>

    <form wire:submit.prevent="updatedAvatar" enctype="multipart/form-data" class="mt-6 space-y-6">
        <div>
            <x-input-label for="avatar" :value="__('Avatar')" />
            <input wire:model="avatar" id="avatar" name="avatar" type="file" class="mt-1 block w-full" />
            <x-input-error class="mt-2" :messages="$errors->get('avatar')" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Upload Avatar') }}</x-primary-button>
        </div>
    </form>
</div>
