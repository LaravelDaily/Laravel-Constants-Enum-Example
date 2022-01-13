<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('ticket.open') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="overflow-hidden overflow-x-auto p-6 bg-white border-b border-gray-200">
                    <x-validation-errors class="mb-4" :errors="$errors" />

                    <form action="{{ route('tickets.store') }}" method="POST">
                        @csrf
                        <div>
                            <x-label for="title" :value="__('ticket.title')" class="required" />

                            <x-input id="title" class="block mt-1 w-full"
                                type="text"
                                name="title"
                                value="{{ old('title') }}"
                                required />
                        </div>
                        <div class="mt-4">
                            <x-label for="description" :value="__('ticket.description')" class="required" />

                            <textarea name="description" id="description" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>{{ old('description') }}</textarea>
                        </div>
                        <div class="mt-4">
                            <x-label for="status" :value="__('ticket.status')" class="required" />

                            <select name="status" id="status" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                                <option disabled hidden {{ old('status') != null ?: 'selected' }}>
                                    {{ __('ticket.select') }}
                                </option>
                                @foreach(\App\Helpers\Constant::TICKET_STATUS as $key => $value)
                                    <option value="{{ $value }}" {{ old('status') != $value ?: 'selected' }}>
                                        {{ __('ticket.statuses.' . \App\Helpers\Constant::TICKET_STATUS[$key]) }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mt-4">
                            <x-button>{{ __('ticket.submit') }}</x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
