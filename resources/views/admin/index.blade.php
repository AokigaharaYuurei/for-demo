<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Административная панель
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div>
                        <h2>Фильтрация по турам</h2>
                        <ul>
                            <li><a href="{{route('admin.index')}}">Все</a></li>
                            @foreach ($tours as $tour)
                                <li><a href="{{route('admin.index',['tour'=>$tour->id])}}">{{$tour->title}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="grid grid-cols-6 border-b border-[#f2f2f7]">
                        <div> ФИО</div>
                        <div> Кол-во мест </div>
                        <div> Дата тура </div>
                        <div> Название тура </div>
                        <div> Стоимость тура </div>
                        <div> Общая Стоимость </div>
                    </div>
                    @foreach ($orders as $order )
                        <div class="grid grid-cols-6 border-b border-[#f2f2f7]">
                        <div>
                            {{$order->user->lastname}}
                            {{$order->user->name}}
                            {{$order->user->middlename}}
                        </div>
                        <div> {{$order->count}} </div>
                        <div> {{$order->tour->data}} </div>
                        <div> {{$order->tour->title}}</div>
                        <div> {{$order->tour->cost}}</div>
                        <div> {{$order->tour->cost * $order->count}} </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

</body>

</html>