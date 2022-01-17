<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('ticket.ticket') }} {{ __('ticket.id') }}: {{ $ticket->id }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="overflow-hidden overflow-x-auto p-6 bg-white border-b border-gray-200">
                    <header class="mb-4 pb-4 border-b">
                        <h1 class="text-xl font-bold pb-4">{{ $ticket->title }}</h1>
                        @if($ticket->is_open)
                            <span class="text-xs font-bold inline-block py-1 px-2 uppercase rounded-full text-emerald-600 bg-emerald-200 uppercase last:mr-0 mr-1">{{ __( "ticket.statuses.{$ticket->status->name}" ) }}</span>
                        @else
                            <span class="text-xs font-bold inline-block py-1 px-2 uppercase rounded-full text-blueGray-600 bg-blueGray-200 uppercase last:mr-0 mr-1">{{ __( "ticket.statuses.{$ticket->status->name}" ) }}</span>
                        @endif
                        <x-auth-session-status class="mt-4" :status="session('status')" />
                    </header>
                    <div class="mb-4">
                        <a href="{{ route('tickets.edit', $ticket) }}" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
                            {{ __('ticket.edit') }}
                        </a>
                    </div>
                    <article class="whitespace-pre-wrap text-lg">{{ $ticket->description }}</article>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
