<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('ticket.tickets') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-auth-session-status class="mb-4" :status="session('status')" />
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="overflow-hidden overflow-x-auto p-6 bg-white border-b border-gray-200">
                    <div class="mb-3">
                        <a href="{{ route('tickets.create') }}" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
                            {{ __('ticket.open') }}
                        </a>
                    </div>
                    <div class="min-w-full align-middle">
                        <table class="min-w-full divide-y divide-gray-200 border">
                            <thead>
                            <tr>
                                <th class="px-6 py-3 bg-gray-50 text-left">
                                    <span class="text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">{{ __('ticket.title') }}</span>
                                </th>
                                <th class="px-6 py-3 bg-gray-50 text-left">
                                    <span class="text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">{{ __('ticket.status') }}</span>
                                </th>
                                <th class="px-6 py-3 bg-gray-50 text-left"></th>
                            </tr>
                            </thead>

                            <tbody class="bg-white divide-y divide-gray-200 divide-solid">
                            @foreach($tickets as $ticket)
                                <tr class="bg-white">
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                        <a href="{{ route('tickets.show', $ticket) }}" class="hover:underline">
                                            {{ $ticket->title }}
                                        </a>
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                        @if($ticket->is_open)
                                            <span class="text-xs font-bold inline-block py-1 px-2 uppercase rounded-full text-emerald-600 bg-emerald-200 uppercase last:mr-0 mr-1">{{ __( "ticket.statuses.{$ticket->status->name}" ) }}</span>
                                        @else
                                            <span class="text-xs font-bold inline-block py-1 px-2 uppercase rounded-full text-blueGray-600 bg-blueGray-200 uppercase last:mr-0 mr-1">{{ __( "ticket.statuses.{$ticket->status->name}" ) }}</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('tickets.edit', $ticket) }}" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
                                            {{ __('ticket.edit_short') }}
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div class="mt-2">
                        {{ $tickets->links() }}
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
