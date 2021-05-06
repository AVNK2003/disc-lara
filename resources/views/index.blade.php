@extends('layouts.layout')
@isset($title)
@section('title', $title)
@endisset
@section('scriptMap')
    <script src="https://api-maps.yandex.ru/2.1/?apikey=ff28f6ad-d2a1-40a6-b0fe-3ede2df62e11&lang=ru&load=package.standard"
            type="text/javascript">
    </script>
@endsection
@section('linksAside') <x-aside-links-all />@endsection
@section('content')

    {{--    Карта--}}
    <section x-data="{mapOpen: false}" class="rounded-md border overflow-hidden">
        <h2 @custom-event="function (event) {
        console.log(event);
    }"
            @click="mapOpen = !mapOpen"
            class="cursor-pointer p-4 bg-gradient-to-b from-[#100000] via-[#300000] to-[#200000] px-6 py-4">Карта</h2>
        <div x-show.transition.scale.0.origin.top.duration.300="mapOpen" class="h-[500px] border-t" id="map"></div>
    </section>

    {{--    Карточки--}}
    <div class="wrap gap-4 mt-4">
        @if(!count($companies))
            <div class="mx-auto">Здесь пока ничего нет...</div>
        @endif
        @foreach($companies as $company)
            <div class="card">
                <div class="card__body">
                    <div class="card__logo">
                        <a href="/company/{{$company->id}}">
                            <img
                                class="logo"
                                src="@if($company->img)
                                    /img/uploads/thumbnail/{{$company->img}}
                                @else
                                    /img/logo.png
@endif"
                                alt="{{$company->title}}"
                            />
                        </a>
                    </div>
                    <div class="card__descr">
                        <div class="card__header">{{$company->title}}</div>
                        <div class="card__nav">
                            @php
                                if (preg_match('/\d?\d\%/', $company->discount, $percent))
                                     $percent=$percent[0];
                                 else
                                     $percent=null;
                            @endphp
                            {{--                            @dd($percent[0])--}}
                            <div class="card__percent mb-2">{{$percent}}</div>
                            <div class="card__tags">
                                @foreach($company->cities as $city)
                                    <a class="card__tag" href="{{route('showCity', $city)}}">{{$city->name}}</a>
                                @endforeach
                                @foreach($company->categories as $category)
                                    <a class="card__tag"
                                       href="{{route('showCategory', $category)}}">{{$category->name}}</a>
                                @endforeach
                            </div>
                        </div>
                        <div class="card__footer">
                            <a class="card__btn btn-red" href="/company/{{$company->id}}">Подробнее</a>
                        </div>
                    </div>

                </div>
            </div>
        @endforeach
    </div>
    <script>
        ymaps.ready(init);


        function init() {
            const myMap = new ymaps.Map('map', {
                    center: [45.15311552, 34.31881391],
                    zoom: 8,
                    controls: ['zoomControl', 'fullscreenControl']
                }, {
                    searchControlProvider: 'yandex#search',
                    // autoFitToViewport: 'always'
                }),
                objectManager = new ymaps.ObjectManager({
                    // Чтобы метки начали кластеризоваться, выставляем опцию.
                    clusterize: true,
                    // ObjectManager принимает те же опции, что и кластеризатор.
                    gridSize: 128,
                    // Макет метки кластера pieChart.
                    clusterIconLayout: "default#pieChart"
                });
            myMap.behaviors.disable('scrollZoom');
            myMap.geoObjects.add(objectManager);

            objectManager.objects.options.set('balloonMaxWidth', '280');
            objectManager.add({!! $mapData !!});
        }
    </script>

@endsection
