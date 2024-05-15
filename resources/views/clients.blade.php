<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Clients') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <p> Here Are your some clients
                    </p>
                    @forelse($clients as $client)
                        <div class="text-gray py-3">
                            <h2>{{ $client->name }}</h2>
                            <p>{{ $client->redirect }}</p>
                        </div>
                    @empty
                        <p>No client Found </p>
                    @endforelse

                </div>
            </div>
        </div>
</x-app-layout>
