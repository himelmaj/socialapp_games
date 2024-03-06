<section class="space-y-6">
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Avatar Upload') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Upload your profile avatar.') }}
        </p>
    </header>


    <form wire:submit.prevent="saveAvatar" enctype="multipart/form-data" class="mt-6 space-y-6">
        <div- class="flex items-center gap-4">
            <input wire:model="avatar" id="avatar" name="avatar" type="file"
                class="block w-full text-sm text-slate-500
                file:mr-4 file:py-2 file:px-4
                file:rounded-full file:border-0
                file:text-sm file:font-semibold
                file:bg-violet-50 file:text-violet-700
                hover:file:bg-violet-100" />
            <x-input-error class="mt-2" :messages="$errors->get('avatar')" />
        </div->

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Upload Avatar') }}</x-primary-button>
            <x-action-message class="me-3" on="updated-avatar"> {{ __('Avatar Updated!.') }} </x-action-message>
        </div>
    </form>

</section>
