<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Thank you') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="h3">Well Done </h3>
                    <p>Your information has been submitted successfully</p>
                    <br>
                    <p>You will receive in coming day invitation email with instructions from RS4IT to book your flight.
                    </p><br>
                    <h2 class="h2">See you soon</h2>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
