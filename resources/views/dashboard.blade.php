<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <x-slot name="content">
        <p>
            {{ __("You're logged in!") }}
        </p>
    </x-slot>
</x-app-layout>
