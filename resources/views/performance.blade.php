<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('社員パフォーマンス') }}
            </h2>

        </div>
    </x-slot>


    <div class="p-6 flex flex-col gap-6 overflow-hidden bg-white rounded-md shadow-md lg:flex-row  dark:bg-dark-eval-1">
        <div class="col-span-3 sm:col-span-2">
        <x-label for="date" value="{{ __('日付') }}" />
        <x-input id="email" type="text" class="block w-full mt-1" wire:model.defer="state.email" />
        </div>

        <div class="col-span-3 sm:col-span-2">
            <x-label for="date" value="{{ __('日付') }}" />
            <x-input id="email" type="text" class="block w-full mt-1" wire:model.defer="state.email" />
        </div>
        <div class="col-span-3 sm:col-span-2">
            <x-label value="tes" class="invisible"/>
            <x-button wire:loading.attr="disabled" class="mt-1">
                {{ __('検索') }}
            </x-button>
        </div>
    </div>
</x-app-layout>
