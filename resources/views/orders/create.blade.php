<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Бронирование Тура') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{route('orders.store')}}" method="POST">
                    <!--Кол во-->
                        @csrf
                        <div>
                            <x-input-label for="count" :value="__('Количество')" />
                            <x-text-input id="count" class="block mt-1 w-full" type="number" name="count" :value="old('count')" required autofocus autocomplete="count" />
                            <x-input-error :messages="$errors->get('count')" class="mt-2" />
                        </div>

                         <x-primary-button class="ms-3">
                Забронировать
            </x-primary-button>
                    </form>    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>