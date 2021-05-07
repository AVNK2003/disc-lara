@extends('layouts.layout')
@section('title')- {{$company->title}}@endsection
@section('scriptMap')
    <script src="https://api-maps.yandex.ru/2.1/?apikey=ff28f6ad-d2a1-40a6-b0fe-3ede2df62e11&lang=ru&load=package.standard"
            type="text/javascript">
    </script>
@endsection
@section('linksAside')
{{--  Ссылки в боковой панели если заходят из кабинета  --}}
    @if($cabinet) <x-aside-links-admins />
{{--  Ссылки в боковой панели если заходят с главной  --}}
    @else <x-aside-links-all />
    @endif
@endsection
@section('content')

    <section class="rounded-md border overflow-hidden shadow-md">
        <div class="bg-gradient-to-b from-[#100000] via-[#300000] to-[#200000] px-6 py-4 border-b">
            <h1 class="text-3xl font-bold">{{$company->title}}</h1>
            <div class="mt-4">
                <ul class="flex">
                    <li class="inline-block mr-8">
                        Рейтинг:&nbsp;
                        <div class="rating-mini">
                            @for($i=0; $i<5; $i++)
                            <span class="
                            @if($comments->count())
                                @if(round($comments->sum('rating')/$comments->count())>$i) active @endif
                            @endif
                                "></span>
                            @endfor
                        </div>
                        &nbsp;(Отзывов:&nbsp;{{$comments->count()}})
                    </li>
                    <li class="inline-block">Просмотров: {{$company->views}}</li>
                </ul>
            </div>
        </div>
        <div class="sm:flex bg-gradient-to-b from-[#222222] via-black to-[#222222]">

            <div class="flex max-h-full">
                <img class="m-auto md:pl-4" src="
                @if($company->img)
                    /img/uploads/thumbnail/{{$company->img}}
                @else
                    /img/logo.png
                @endif"
                     alt="{{$company->title}}">
            </div>


            <div class="py-4 px-4 w-full">


                <div class="flex items-center">
                    <i class="fas fa-percent text-red-600 w-5 h-5 mr-2"></i>
                    <span>Скидка: {{$company->discount}}</span>
                </div>

                <div class="mt-1 flex items-center">
                    <i class="fas fa-map-marked-alt text-green-600 w-5 h-5 mr-2"></i>
                    <span>Адрес: {{$company->address}}</span>
                </div>

                <div class="mt-1 flex items-center">
                    <i class="fas fa-business-time text-yellow-700 w-5 h-5 mr-2"></i>
                    <span>Режим работы: {{$company->working_hours}}</span>
                </div>

{{--                Телефон--}}
                @if($company->tel)
                <div class="mt-1 flex items-center">
                    <i class="fas fa-phone-alt text-pink-700 w-5 h-5 mr-2"></i>
                    <span>Телефон: {{$company->tel}}</span>
                </div>
                @endif

{{--                Сайт--}}
                @if($company->site)
                <div class="flex items-center mt-1">
                    <i class="fas fa-globe text-blue-400 w-5 h-5 mr-2"></i>
                    <span>Сайт: <a class="text-blue-400" href="{{$company->site}}" target="_blank">{{$company->site}}</a></span>
                </div>
                @endif

{{--                Соцсети--}}
                @if($company->facebook || $company->instagram || $company->vk || $company->youtube)
                <div class="flex items-center relative mt-1">
                    <i class="fas fa-users text-red-200 w-5 h-5 mr-2"></i>
                    <span>Соцсети:</span>

                    @if($company->instagram)
                        <a href="{{ $company->instagram }}" class="ml-2" target="_blank">
                            <img class="w-7 h-7" src="/img/icon/instagram.svg">
                        </a>
                    @endif
                    @if($company->facebook)
                        <a href="{{ $company->facebook }}" class="ml-2" target="_blank">
                            <img class="w-7 h-7" src="/img/icon/facebook.svg">
                        </a>
                    @endif
                    @if($company->vk)
                        <a href="{{ $company->vk }}" class="ml-2" target="_blank">
                            <img class="w-7 h-7" src="/img/icon/vk.svg">
                        </a>
                    @endif
                    @if($company->youtube)
                        <a href="{{ $company->youtube }}" class="ml-2" target="_blank">
                            <img class="w-7 h-7" src="/img/icon/youtube.svg">
                        </a>
                    @endif

                </div>
                @endif

                <div class="flex items-center mt-1">
                    <i class="fas fa-city text-yellow-200 w-5 h-5 mr-2"></i>
                    <div class="flex items-center wrap">Город:
                        @foreach($company->cities as $city)
                            <a class="card__tag ml-2" href="{{route('showCity', $city)}}">{{$city->name}}</a>
                        @endforeach
                    </div>
                </div>

                <div class="flex items-center relative">
                    <i class="fas fa-folder-open text-yellow-600 w-5 h-5 mr-2"></i>


                    <div class="flex items-center wrap">Категория:
                        @foreach($company->categories as $category)
                            <a class="card__tag" href="{{route('showCategory', $category)}}">{{$category->name}}</a>
                        @endforeach
                    </div>

                </div>

            </div>

        </div>
    </section>

    @if($company->description)
    <section class="mt-4 rounded-md border overflow-hidden">
        <h2 class="p-4 bg-gradient-to-b from-[#100000] via-[#300000] to-[#200000] px-6 py-4 border-b">Описание</h2>
        <div class="p-4 bg-gradient-to-b from-[#222222] via-black to-[#222222]">
            {{$company->description}}
        </div>
    </section>
    @endif

    {{--    Карта--}}
    @if($company->coordinates)
    <section class="mt-4 rounded-md border overflow-hidden">
        <h2 class="p-4 bg-gradient-to-b from-[#100000] via-[#300000] to-[#200000] px-6 py-4 border-b">Карта</h2>
            <div class="h-[400px]" id="map"></div>
    </section>
    @endif

    {{--    Отзывы--}}
{{--    <livewire:comments :company_id="$company->id">--}}

@livewire('comments', ['comments' => $comments, 'company_id' => $company->id])
    <script type="text/javascript">
        ymaps.ready(init);

        function init() {
            var myMap = new ymaps.Map("map", {
                center: [{{$company->coordinates}}],
                zoom: 17
            });
            var myPlacemark = new ymaps.Placemark([{{$company->coordinates}}]);
            myMap.geoObjects.add(myPlacemark);
            myMap.behaviors.disable('scrollZoom');
        }
    </script>
@endsection
