@extends($layout)
@section('scriptMap')
    <script src="https://api-maps.yandex.ru/2.1/?apikey=ff28f6ad-d2a1-40a6-b0fe-3ede2df62e11&lang=ru&load=package.standard"
            type="text/javascript">
    </script>
@endsection
@section('linksAside') <x-aside-links-all />@endsection
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
                <img class="mx-auto md:my-auto md:pl-4" src="
                @if($company->img)
                    /img/uploads/thumbnail/{{$company->img}}
                @else
                    /img/logo.png
                @endif"
                     alt="{{$company->title}}">
            </div>


            <div class="py-4 px-4 w-full">


                <div class="flex items-center relative">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="percent" role="img"
                         xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                         class="absolute top-0 mt-1 w-5 h-5 text-red-600">
                        <path fill="currentColor"
                              d="M112 224c61.9 0 112-50.1 112-112S173.9 0 112 0 0 50.1 0 112s50.1 112 112 112zm0-160c26.5 0 48 21.5 48 48s-21.5 48-48 48-48-21.5-48-48 21.5-48 48-48zm224 224c-61.9 0-112 50.1-112 112s50.1 112 112 112 112-50.1 112-112-50.1-112-112-112zm0 160c-26.5 0-48-21.5-48-48s21.5-48 48-48 48 21.5 48 48-21.5 48-48 48zM392.3.2l31.6-.1c19.4-.1 30.9 21.8 19.7 37.8L77.4 501.6a23.95 23.95 0 0 1-19.6 10.2l-33.4.1c-19.5 0-30.9-21.9-19.7-37.8l368-463.7C377.2 4 384.5.2 392.3.2z"
                              class=""></path>
                    </svg>

                    <div class="ml-8">
                        Скидка: {{$company->discount}}
                    </div>
                </div>

                <div class="flex items-center relative mt-1">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="map-marked-alt"
                         role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                         class="absolute top-0 mt-[1px] w-5 h-5 text-green-600">
                        <path fill="currentColor"
                              d="M288 0c-69.59 0-126 56.41-126 126 0 56.26 82.35 158.8 113.9 196.02 6.39 7.54 17.82 7.54 24.2 0C331.65 284.8 414 182.26 414 126 414 56.41 357.59 0 288 0zm0 168c-23.2 0-42-18.8-42-42s18.8-42 42-42 42 18.8 42 42-18.8 42-42 42zM20.12 215.95A32.006 32.006 0 0 0 0 245.66v250.32c0 11.32 11.43 19.06 21.94 14.86L160 448V214.92c-8.84-15.98-16.07-31.54-21.25-46.42L20.12 215.95zM288 359.67c-14.07 0-27.38-6.18-36.51-16.96-19.66-23.2-40.57-49.62-59.49-76.72v182l192 64V266c-18.92 27.09-39.82 53.52-59.49 76.72-9.13 10.77-22.44 16.95-36.51 16.95zm266.06-198.51L416 224v288l139.88-55.95A31.996 31.996 0 0 0 576 426.34V176.02c0-11.32-11.43-19.06-21.94-14.86z"></path>
                    </svg>

                    <div class="ml-8">
                        Адрес: {{$company->address}}
                    </div>
                </div>

                <div class="flex items-center relative mt-1">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="business-time" role="img"
                         xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"
                         class="absolute top-0 w-6 h-6 text-yellow-700">
                        <path fill="currentColor"
                              d="M496 224c-79.59 0-144 64.41-144 144s64.41 144 144 144 144-64.41 144-144-64.41-144-144-144zm64 150.29c0 5.34-4.37 9.71-9.71 9.71h-60.57c-5.34 0-9.71-4.37-9.71-9.71v-76.57c0-5.34 4.37-9.71 9.71-9.71h12.57c5.34 0 9.71 4.37 9.71 9.71V352h38.29c5.34 0 9.71 4.37 9.71 9.71v12.58zM496 192c5.4 0 10.72.33 16 .81V144c0-25.6-22.4-48-48-48h-80V48c0-25.6-22.4-48-48-48H176c-25.6 0-48 22.4-48 48v48H48c-25.6 0-48 22.4-48 48v80h395.12c28.6-20.09 63.35-32 100.88-32zM320 96H192V64h128v32zm6.82 224H208c-8.84 0-16-7.16-16-16v-48H0v144c0 25.6 22.4 48 48 48h291.43C327.1 423.96 320 396.82 320 368c0-16.66 2.48-32.72 6.82-48z"
                              class=""></path>
                    </svg>

                    <div class="ml-8">
                        Режим работы: {{$company->working_hours}}
                    </div>
                </div>

{{--                Телефон--}}
                @if($company->tel)
                <div class="flex items-center relative mt-1">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="phone-rotary" role="img"
                         xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                         class="absolute top-0 mt-[1px] w-5 h-5 text-pink-700">
                        <path fill="currentColor"
                              d="M370.43 192.25A64 64 0 0 0 314.86 160H197.14a64 64 0 0 0-55.57 32.25L36.22 376.62A32 32 0 0 0 32 392.5V448a32 32 0 0 0 32 32h384a32 32 0 0 0 32-32v-55.5a32 32 0 0 0-4.22-15.88zM256 384a72 72 0 1 1 72-72 72 72 0 0 1-72 72zm250.18-261C436.76 65 347.38 32 256 32S75.24 65 5.82 123A16.45 16.45 0 0 0 0 135.64V192a16 16 0 0 0 16 16h70.11a16 16 0 0 0 14.31-8.85L128 128c39.9-17.28 83.2-24 128-24 44.77 0 88.07 6.72 128 24l27.58 71.15a16 16 0 0 0 14.31 8.85H496a16 16 0 0 0 16-16v-56.36a16.45 16.45 0 0 0-5.82-12.64z"
                              class=""></path>
                    </svg>

                    <div class="ml-8">
                        Телефон: {{$company->tel}}
                    </div>
                </div>
                @endif

{{--                Сайт--}}
                @if($company->site)
                <div class="flex items-center relative mt-1">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="globe" role="img"
                         xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512"
                         class="absolute top-0 mt-[2px] w-5 h-5 text-blue-400">
                        <path fill="currentColor"
                              d="M336.5 160C322 70.7 287.8 8 248 8s-74 62.7-88.5 152h177zM152 256c0 22.2 1.2 43.5 3.3 64h185.3c2.1-20.5 3.3-41.8 3.3-64s-1.2-43.5-3.3-64H155.3c-2.1 20.5-3.3 41.8-3.3 64zm324.7-96c-28.6-67.9-86.5-120.4-158-141.6 24.4 33.8 41.2 84.7 50 141.6h108zM177.2 18.4C105.8 39.6 47.8 92.1 19.3 160h108c8.7-56.9 25.5-107.8 49.9-141.6zM487.4 192H372.7c2.1 21 3.3 42.5 3.3 64s-1.2 43-3.3 64h114.6c5.5-20.5 8.6-41.8 8.6-64s-3.1-43.5-8.5-64zM120 256c0-21.5 1.2-43 3.3-64H8.6C3.2 212.5 0 233.8 0 256s3.2 43.5 8.6 64h114.6c-2-21-3.2-42.5-3.2-64zm39.5 96c14.5 89.3 48.7 152 88.5 152s74-62.7 88.5-152h-177zm159.3 141.6c71.4-21.2 129.4-73.7 158-141.6h-108c-8.8 56.9-25.6 107.8-50 141.6zM19.3 352c28.6 67.9 86.5 120.4 158 141.6-24.4-33.8-41.2-84.7-50-141.6h-108z"
                              class=""></path>
                    </svg>

                    <div class="ml-8">
                        Сайт: {{$company->site}}
                    </div>
                </div>
                @endif

{{--                Соцсети--}}
                @if($company->facebook || $company->instagram || $company->vk || $company->youtube)
                <div class="flex items-center relative mt-1">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="users" role="img"
                         xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"
                         class="absolute top-0 mt-0 w-6 h-6 text-red-200">
                        <path fill="currentColor"
                              d="M96 224c35.3 0 64-28.7 64-64s-28.7-64-64-64-64 28.7-64 64 28.7 64 64 64zm448 0c35.3 0 64-28.7 64-64s-28.7-64-64-64-64 28.7-64 64 28.7 64 64 64zm32 32h-64c-17.6 0-33.5 7.1-45.1 18.6 40.3 22.1 68.9 62 75.1 109.4h66c17.7 0 32-14.3 32-32v-32c0-35.3-28.7-64-64-64zm-256 0c61.9 0 112-50.1 112-112S381.9 32 320 32 208 82.1 208 144s50.1 112 112 112zm76.8 32h-8.3c-20.8 10-43.9 16-68.5 16s-47.6-6-68.5-16h-8.3C179.6 288 128 339.6 128 403.2V432c0 26.5 21.5 48 48 48h288c26.5 0 48-21.5 48-48v-28.8c0-63.6-51.6-115.2-115.2-115.2zm-223.7-13.4C161.5 263.1 145.6 256 128 256H64c-35.3 0-64 28.7-64 64v32c0 17.7 14.3 32 32 32h65.9c6.3-47.4 34.9-87.3 75.2-109.4z"
                              class=""></path>
                    </svg>

                    <div class="ml-8">
                        Соцсети: {{$company->site}}
                    </div>
                </div>
                @endif

                <div class="flex items-center relative mt-1">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="city" role="img"
                         xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"
                         class="absolute top-0 mt-1 w-6 h-6 text-yellow-200">
                        <path fill="currentColor"
                              d="M616 192H480V24c0-13.26-10.74-24-24-24H312c-13.26 0-24 10.74-24 24v72h-64V16c0-8.84-7.16-16-16-16h-16c-8.84 0-16 7.16-16 16v80h-64V16c0-8.84-7.16-16-16-16H80c-8.84 0-16 7.16-16 16v80H24c-13.26 0-24 10.74-24 24v360c0 17.67 14.33 32 32 32h576c17.67 0 32-14.33 32-32V216c0-13.26-10.75-24-24-24zM128 404c0 6.63-5.37 12-12 12H76c-6.63 0-12-5.37-12-12v-40c0-6.63 5.37-12 12-12h40c6.63 0 12 5.37 12 12v40zm0-96c0 6.63-5.37 12-12 12H76c-6.63 0-12-5.37-12-12v-40c0-6.63 5.37-12 12-12h40c6.63 0 12 5.37 12 12v40zm0-96c0 6.63-5.37 12-12 12H76c-6.63 0-12-5.37-12-12v-40c0-6.63 5.37-12 12-12h40c6.63 0 12 5.37 12 12v40zm128 192c0 6.63-5.37 12-12 12h-40c-6.63 0-12-5.37-12-12v-40c0-6.63 5.37-12 12-12h40c6.63 0 12 5.37 12 12v40zm0-96c0 6.63-5.37 12-12 12h-40c-6.63 0-12-5.37-12-12v-40c0-6.63 5.37-12 12-12h40c6.63 0 12 5.37 12 12v40zm0-96c0 6.63-5.37 12-12 12h-40c-6.63 0-12-5.37-12-12v-40c0-6.63 5.37-12 12-12h40c6.63 0 12 5.37 12 12v40zm160 96c0 6.63-5.37 12-12 12h-40c-6.63 0-12-5.37-12-12v-40c0-6.63 5.37-12 12-12h40c6.63 0 12 5.37 12 12v40zm0-96c0 6.63-5.37 12-12 12h-40c-6.63 0-12-5.37-12-12v-40c0-6.63 5.37-12 12-12h40c6.63 0 12 5.37 12 12v40zm0-96c0 6.63-5.37 12-12 12h-40c-6.63 0-12-5.37-12-12V76c0-6.63 5.37-12 12-12h40c6.63 0 12 5.37 12 12v40zm160 288c0 6.63-5.37 12-12 12h-40c-6.63 0-12-5.37-12-12v-40c0-6.63 5.37-12 12-12h40c6.63 0 12 5.37 12 12v40zm0-96c0 6.63-5.37 12-12 12h-40c-6.63 0-12-5.37-12-12v-40c0-6.63 5.37-12 12-12h40c6.63 0 12 5.37 12 12v40z"
                              class=""></path>
                    </svg>

                    <div class="ml-8">
                        Город:
                        @foreach($company->cities as $city)
                            <a class="card__tag" href="{{route('showCity', $city)}}">{{$city->name}}</a>
                        @endforeach
                    </div>
                </div>

                <div class="flex items-center relative">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="folder-open" role="img"
                         xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                         class="absolute top-0 mt-1 w-6 h-6 text-yellow-600">
                        <path fill="currentColor"
                              d="M572.694 292.093L500.27 416.248A63.997 63.997 0 0 1 444.989 448H45.025c-18.523 0-30.064-20.093-20.731-36.093l72.424-124.155A64 64 0 0 1 152 256h399.964c18.523 0 30.064 20.093 20.73 36.093zM152 224h328v-48c0-26.51-21.49-48-48-48H272l-64-64H48C21.49 64 0 85.49 0 112v278.046l69.077-118.418C86.214 242.25 117.989 224 152 224z"
                              class=""></path>
                    </svg>

                    <div class="ml-8 flex items-center wrap">
                        Категория:
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
