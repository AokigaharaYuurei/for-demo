<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Личный кабинет') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @foreach ($orders as $order)
                        <div>
                            <p>Дата тура<time>{{$order->tour->data}}</time></p>
                            <p>Название тура</p>
                            <h3>{{$order->tour->title}}</h3>
                            <p>Количество мест: {{$order->count}}</p>
                            <p>Общая стоимость: {{$order->tour->cost * $order->count}} &#8381;</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
