{{--@extends('layouts.layout')
@section('content')
<?php
$num = ['+79781091156', '+7(978)1091156', '+7 978 109 11 56', '+7 (978) 109-11-56', '+7 978 109-11-56', '+7-978-109-11-56', '8-978-109-11-56', '89781091156'];

foreach ($num as $value) {
   echo is_numeric($value) ? $value . ' - ДА<br>' : $value . ' - НЕТ<br>';
}

$arr1 = [
    'tel' => '9781091156',
    'password' => '11111111',
];

$tel = ['tel' => '+7 (978) 109-11-56'];
$test = ['password' => '123456789'];

$arr = $tel+$test;
var_dump($arr);
echo '<br><br>';
var_dump($arr1);
echo '<br><br>';

$result = preg_replace("/[^0-9]/", '', $tel['tel']); //убираем все кроме цифр
$tel['tel'] = substr($result, 1); //убираем первую цифру
echo $arr['tel'];
echo '<br><br>';
echo $tel['tel'];
?>--}}
{{--<x-company-form/>--}}

{{--@endsection--}}


    <!DOCTYPE html>
<html>
<head>
    <title>Геоссылка</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <!--
        Чтобы добавить на страницу геоссылку, необходимо загрузить код API с модулем Geolink.

        Укажите свой API-ключ. Тестовый ключ НЕ БУДЕТ работать на других сайтах.
        Получить ключ можно в Кабинете разработчика: https://developer.tech.yandex.ru/keys/
    -->
    <link rel="stylesheet" href="http://disc-lara/css/app.css">
    <script
        src="https://api-maps.yandex.ru/2.1/?load=Geolink&amp;lang=ru_RU&amp;apikey=ff28f6ad-d2a1-40a6-b0fe-3ede2df62e11"
        type="text/javascript"></script>
    <style type="text/css">
        #whiteText {
            background-color: #110;
            color: white;
            padding: 5px 0px 5px 8px;
        }

        #box {
            width: 100%;
            height: 100%;
            padding: 0;
            margin: 0;
            font-family: Arial, sans-serif;
            font-size: 15px;
            line-height: 22px;
        }
    </style>
</head>
<body>

<body class="body" style="">
<div x-data="{ asideOpen: true }" class="flex">
    <aside :class="{'-ml-64': !asideOpen}"
           class="top-0 left-0 w-64 bg-black fixed h-full overflow-auto z-30 transition-all duration-300">
        <span class="flex w-full items-center p-4 border-b"><img src="http://disc-lara/img/logo.svg" alt="Logo"
                                                                 class="h-auto w-32 mx-auto"></span>
        <div x-data="{ open: false }">
            <button @click="open = !open"
                    class="flex flex-row items-center mx-auto px-4 py-2 mt-2 text-sm text-left bg-transparent rounded-lg focus:text-gray-300 hover:text-gray-300 hover:bg-red-900 focus:bg-red-900 focus:outline-none focus:shadow-outline">
                            <span class="mr-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
        d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
</svg>
                </span>
                <span>
                    Город
                </span>
                <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}"
                     class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform rotate-0">
                    <path fill-rule="evenodd"
                          d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                          clip-rule="evenodd"></path>
                </svg>
            </button>
            <div x-show="open" x-transition:enter="transition ease-out duration-300"
                 x-transition:enter-start="transform scale-0" x-transition:enter-end="transform scale-100"
                 x-transition:leave="transition ease-in duration-200" x-transition:leave-start="transform scale-100"
                 x-transition:leave-end="transform scale-0" class="w-48 origin-top mx-auto" style="display: none;">
                <div class="px-2 py-2">

                    <a class="block px-4 py-2 mt-2 text-sm bg-transparent rounded-lg hover:bg-red-900 focus:bg-gray-900 focus:text-gray-300 hover:text-gray-300 md:mt-0 focus:outline-none focus:shadow-outline"
                       href="http://disc-lara/city/evpatoriya">Евпатория</a>
                    <a class="block px-4 py-2 mt-2 text-sm bg-transparent rounded-lg hover:bg-red-900 focus:bg-gray-900 focus:text-gray-300 hover:text-gray-300 md:mt-0 focus:outline-none focus:shadow-outline"
                       href="http://disc-lara/city/crimea">Крым</a>
                    <a class="block px-4 py-2 mt-2 text-sm bg-transparent rounded-lg hover:bg-red-900 focus:bg-gray-900 focus:text-gray-300 hover:text-gray-300 md:mt-0 focus:outline-none focus:shadow-outline"
                       href="http://disc-lara/city/sevastopol">Севастополь</a>
                    <a class="block px-4 py-2 mt-2 text-sm bg-transparent rounded-lg hover:bg-red-900 focus:bg-gray-900 focus:text-gray-300 hover:text-gray-300 md:mt-0 focus:outline-none focus:shadow-outline"
                       href="http://disc-lara/city/simferopol">Симферополь</a>
                    <a class="block px-4 py-2 mt-2 text-sm bg-transparent rounded-lg hover:bg-red-900 focus:bg-gray-900 focus:text-gray-300 hover:text-gray-300 md:mt-0 focus:outline-none focus:shadow-outline"
                       href="http://disc-lara/city/feodosiya">Феодосия</a>
                    <a class="block px-4 py-2 mt-2 text-sm bg-transparent rounded-lg hover:bg-red-900 focus:bg-gray-900 focus:text-gray-300 hover:text-gray-300 md:mt-0 focus:outline-none focus:shadow-outline"
                       href="http://disc-lara/city/yalta">Ялта</a>

                </div>
            </div>

        </div>

        <div class="transition-all duration-300" x-data="{ open: false }">
            <button @click="open = !open"
                    class="flex flex-row items-center mx-auto px-4 py-2 mt-2 text-sm text-left bg-transparent rounded-lg focus:text-gray-300 hover:text-gray-300 hover:bg-red-900 focus:bg-red-900 focus:outline-none focus:shadow-outline">
                            <span class="mr-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
        d="M5 19a2 2 0 01-2-2V7a2 2 0 012-2h4l2 2h4a2 2 0 012 2v1M5 19h14a2 2 0 002-2v-5a2 2 0 00-2-2H9a2 2 0 00-2 2v5a2 2 0 01-2 2z"></path>
</svg>
                </span>
                <span>
                    Категории
                </span>
                <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}"
                     class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform rotate-0">
                    <path fill-rule="evenodd"
                          d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                          clip-rule="evenodd"></path>
                </svg>
            </button>
            <div x-show="open" x-transition:enter="transition ease-out duration-300"
                 x-transition:enter-start="transform opacity-0 scale-95"
                 x-transition:enter-end="transform opacity-100 scale-100"
                 x-transition:leave="transition ease-in duration-200"
                 x-transition:leave-start="transform opacity-100 scale-100"
                 x-transition:leave-end="transform opacity-0 scale-95"
                 class="absolute w-[350px] right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48 z-30">
                <div class="px-2 py-2 bg-black rounded-md shadow">

                    <a class="block px-4 py-2 mt-2 text-sm bg-transparent rounded-lg hover:bg-red-900 focus:bg-red-900 focus:text-gray-300 hover:text-gray-300 md:mt-0 focus:outline-none focus:shadow-outline"
                       href="http://disc-lara/category/azs">АЗС</a>
                    <a class="block px-4 py-2 mt-2 text-sm bg-transparent rounded-lg hover:bg-red-900 focus:bg-red-900 focus:text-gray-300 hover:text-gray-300 md:mt-0 focus:outline-none focus:shadow-outline"
                       href="http://disc-lara/category/autoshop">Автомагазины</a>
                    <a class="block px-4 py-2 mt-2 text-sm bg-transparent rounded-lg hover:bg-red-900 focus:bg-red-900 focus:text-gray-300 hover:text-gray-300 md:mt-0 focus:outline-none focus:shadow-outline"
                       href="http://disc-lara/category/rent">Аренда</a>
                    <a class="block px-4 py-2 mt-2 text-sm bg-transparent rounded-lg hover:bg-red-900 focus:bg-red-900 focus:text-gray-300 hover:text-gray-300 md:mt-0 focus:outline-none focus:shadow-outline"
                       href="http://disc-lara/category/hotels">Гостиницы</a>
                    <a class="block px-4 py-2 mt-2 text-sm bg-transparent rounded-lg hover:bg-red-900 focus:bg-red-900 focus:text-gray-300 hover:text-gray-300 md:mt-0 focus:outline-none focus:shadow-outline"
                       href="http://disc-lara/category/documents">Документы</a>
                    <a class="block px-4 py-2 mt-2 text-sm bg-transparent rounded-lg hover:bg-red-900 focus:bg-red-900 focus:text-gray-300 hover:text-gray-300 md:mt-0 focus:outline-none focus:shadow-outline"
                       href="http://disc-lara/category/cafe">Кафе, Рестораны</a>
                    <a class="block px-4 py-2 mt-2 text-sm bg-transparent rounded-lg hover:bg-red-900 focus:bg-red-900 focus:text-gray-300 hover:text-gray-300 md:mt-0 focus:outline-none focus:shadow-outline"
                       href="http://disc-lara/category/shop">Магазины</a>
                    <a class="block px-4 py-2 mt-2 text-sm bg-transparent rounded-lg hover:bg-red-900 focus:bg-red-900 focus:text-gray-300 hover:text-gray-300 md:mt-0 focus:outline-none focus:shadow-outline"
                       href="http://disc-lara/category/wash">Мойки</a>
                    <a class="block px-4 py-2 mt-2 text-sm bg-transparent rounded-lg hover:bg-red-900 focus:bg-red-900 focus:text-gray-300 hover:text-gray-300 md:mt-0 focus:outline-none focus:shadow-outline"
                       href="http://disc-lara/category/helper">Помощь при ДТП</a>
                    <a class="block px-4 py-2 mt-2 text-sm bg-transparent rounded-lg hover:bg-red-900 focus:bg-red-900 focus:text-gray-300 hover:text-gray-300 md:mt-0 focus:outline-none focus:shadow-outline"
                       href="http://disc-lara/category/entertainment">Развлечения</a>
                    <a class="block px-4 py-2 mt-2 text-sm bg-transparent rounded-lg hover:bg-red-900 focus:bg-red-900 focus:text-gray-300 hover:text-gray-300 md:mt-0 focus:outline-none focus:shadow-outline"
                       href="http://disc-lara/category/different">Разное</a>
                    <a class="block px-4 py-2 mt-2 text-sm bg-transparent rounded-lg hover:bg-red-900 focus:bg-red-900 focus:text-gray-300 hover:text-gray-300 md:mt-0 focus:outline-none focus:shadow-outline"
                       href="http://disc-lara/category/sto">СТО</a>
                    <a class="block px-4 py-2 mt-2 text-sm bg-transparent rounded-lg hover:bg-red-900 focus:bg-red-900 focus:text-gray-300 hover:text-gray-300 md:mt-0 focus:outline-none focus:shadow-outline"
                       href="http://disc-lara/category/transfer">Трансфер</a>
                    <a class="block px-4 py-2 mt-2 text-sm bg-transparent rounded-lg hover:bg-red-900 focus:bg-red-900 focus:text-gray-300 hover:text-gray-300 md:mt-0 focus:outline-none focus:shadow-outline"
                       href="http://disc-lara/category/service">Услуги</a>
                    <a class="block px-4 py-2 mt-2 text-sm bg-transparent rounded-lg hover:bg-red-900 focus:bg-red-900 focus:text-gray-300 hover:text-gray-300 md:mt-0 focus:outline-none focus:shadow-outline"
                       href="http://disc-lara/category/tire-fitting">Шиномонтаж</a>
                    <a class="block px-4 py-2 mt-2 text-sm bg-transparent rounded-lg hover:bg-red-900 focus:bg-red-900 focus:text-gray-300 hover:text-gray-300 md:mt-0 focus:outline-none focus:shadow-outline"
                       href="http://disc-lara/category/evacuator">Эвакуаторы</a>

                </div>
            </div>
        </div>
    </aside>
    <div @click="asideOpen=false" :class="{'hidden': !asideOpen}"
         class="bg-black md:hidden opacity-50 w-screen h-screen fixed"></div>
    <div :class="{ 'md:ml-64': asideOpen }"
         class="flex flex-col justify-between w-full min-h-screen transition-all duration-300 md:ml-64">
        <header class="header">


            <div class="flex flex-col-reverse justify-between w-full sm:block sm:relative">
                <div class="w-full text-gray-400 bg-black h-16">
                    <div class="flex flex-col px-4 m-auto items-center md:justify-between md:flex-row md:px-6 lg:px-8">
                        <div class="flex flex-row items-center justify-between p-4">
                            <div class="flex transition-all duration-300">
                                <div :class="{'opacity-0 -ml-28': asideOpen}" class="header-logo opacity-0 -ml-28">
                                    <a href="/">
                                        <img src="http://disc-lara/img/logo.svg" alt="logo">
                                    </a>
                                </div>
                                <button class="ml-2 focus:outline-none" @click="asideOpen = !asideOpen">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                         fill="currentColor">
                                        <path fill-rule="evenodd"
                                              d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                              clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <nav class="flex-col md:flex-row flex-grow pb-4 md:pb-0 hidden md:flex md:justify-end">
                            <a class="flex px-4 py-2 mt-2 text-sm text-gray-400 rounded-lg hover:bg-red-900 focus:bg-red-900 focus:text-gray-300 hover:text-gray-300 md:mt-0 focus:outline-none focus:shadow-outline"
                               href="/">
                        <span class="mr-1">
                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                  </svg>
                </span>
                                <span>
                    Главная
                </span>
                            </a>


                            <a class="flex px-4 py-2 mt-2 text-sm text-gray-400 rounded-lg hover:bg-red-900 focus:bg-red-900 focus:text-gray-300 hover:text-gray-300 md:mt-0 focus:outline-none focus:shadow-outline"
                               href="https://t.me/amsdiscountbot">
                        <span class="mr-1">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="w-5 h-5"><path
                            fill="currentColor"
                            d="M446.7 98.6l-67.6 318.8c-5.1 22.5-18.4 28.1-37.3 17.5l-103-75.9-49.7 47.8c-5.5 5.5-10.1 10.1-20.7 10.1l7.4-104.9 190.9-172.5c8.3-7.4-1.8-11.5-12.9-4.1L117.8 284 16.2 252.2c-22.1-6.9-22.5-22.1 4.6-32.7L418.2 66.4c18.4-6.9 34.5 4.1 28.5 32.2z"
                            class=""></path></svg>
                </span>
                                <span>
                    Телеграм бот
                </span>
                            </a>

                            <a class="flex px-4 py-2 mt-2 text-sm text-gray-400 rounded-lg hover:bg-red-900 focus:bg-red-900 focus:text-gray-300 hover:text-gray-300 md:mt-0 focus:outline-none focus:shadow-outline"
                               href="tel:+79780820203">
                        <span class="mr-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
</svg>
                </span>
                                <span>
                    Позвонить нам
                </span>
                            </a>


                            <a class="flex px-4 py-2 mt-2 text-sm text-gray-400 rounded-lg hover:bg-red-900 focus:bg-red-900 focus:text-gray-300 hover:text-gray-300 md:mt-0 focus:outline-none focus:shadow-outline"
                               href="http://disc-lara/cabinet">
                        <span class="mr-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
</svg>
                </span>
                                <span>
                    Личный кабинет
                </span>
                            </a>

                        </nav>


                    </div>
                </div>

            </div>


        </header>
        <main class="container flex-grow transition-all ease-in-out duration-500">

            <section x-data="{mapOpen: false}" class="rounded-md border overflow-hidden">
                <h2 @click="mapOpen = !mapOpen"
                    class="cursor-pointer p-4 bg-gradient-to-b from-[#100000] via-[#300000] to-[#200000] px-6 py-4">
                    Карта</h2>
                <div x-show.transition.origin.top.center.duration.500="mapOpen" class="h-[500px] border-t" id="map"
                     style="display: none;">
                    <ymaps class="ymaps-2-1-78-map" style="width: 0px; height: 0px;">
                        <ymaps
                            class="ymaps-2-1-78-map ymaps-2-1-78-i-ua_js_yes ymaps-2-1-78-map-bg ymaps-2-1-78-islets_map-lang-ru"
                            style="width: 0px; height: 0px;">
                            <ymaps class="ymaps-2-1-78-inner-panes">
                                <ymaps class="ymaps-2-1-78-events-pane ymaps-2-1-78-user-selection-none"
                                       unselectable="on"
                                       style="height: 100%; width: 100%; top: 0px; left: 0px; position: absolute; z-index: 2500; cursor: url(&quot;https://api-maps.yandex.ru/2.1.78/build/release/images/cursor/grab.cur&quot;) 16 16, url(&quot;https://api-maps.yandex.ru/2.1.78/build/release/images/cursor/grab.cur&quot;), move;"></ymaps>
                                <ymaps class="ymaps-2-1-78-ground-pane"
                                       style="top: 0px; left: 0px; position: absolute; transform: translate3d(0px, 0px, 0px) scale(1, 1); z-index: 501;">
                                    <ymaps style="z-index: 150; position: absolute;">
                                        <canvas height="256" width="256"
                                                style="position: absolute; width: 256px; height: 256px; left: -128px; top: -128px;"></canvas>
                                    </ymaps>
                                </ymaps>
                                <ymaps class="ymaps-2-1-78-copyrights-pane"
                                       style="height: 0px; inset: auto 0px 0px; position: absolute; z-index: 5002;">
                                    <ymaps>
                                        <ymaps
                                            class="ymaps-2-1-78-copyright ymaps-2-1-78-copyright_fog_yes ymaps-2-1-78-copyright_logo_no"
                                            style="">
                                            <ymaps class="ymaps-2-1-78-copyright__fog">…</ymaps>
                                            <ymaps class="ymaps-2-1-78-copyright__wrap">
                                                <ymaps class="ymaps-2-1-78-copyright__layout">
                                                    <ymaps class="ymaps-2-1-78-copyright__content-cell">
                                                        <ymaps class="ymaps-2-1-78-copyright__content">
                                                            <ymaps class="ymaps-2-1-78-copyright__text">© Яндекс</ymaps>
                                                            <ymaps class="ymaps-2-1-78-copyright__agreement">&nbsp;<a
                                                                    class="ymaps-2-1-78-copyright__link" target="_blank"
                                                                    href="https://yandex.ru/legal/maps_termsofuse/?lang=ru"
                                                                    rel="noopener">Условия</a></ymaps>
                                                        </ymaps>
                                                    </ymaps>
                                                    <ymaps class="ymaps-2-1-78-copyright__logo-cell"><a
                                                            class="ymaps-2-1-78-copyright__logo" href=""
                                                            target="_blank"></a></ymaps>
                                                </ymaps>
                                            </ymaps>
                                        </ymaps>
                                    </ymaps>
                                    <ymaps class="ymaps-2-1-78-map-copyrights-promo">
                                        <ymaps>
                                            <ymaps class="ymaps-2-1-78-gotoymaps" title="Открыть в Яндекс.Картах"
                                                   style="display: none;">
                                                <ymaps class="ymaps-2-1-78-gotoymaps__container">
                                                    <ymaps class="ymaps-2-1-78-gotoymaps__pin"></ymaps>
                                                    <ymaps class="ymaps-2-1-78-gotoymaps__text-container"
                                                           style="display: none;">
                                                        <ymaps class="ymaps-2-1-78-gotoymaps__text">В Карты →</ymaps>
                                                    </ymaps>
                                                </ymaps>
                                            </ymaps>
                                            <a class="ymaps-2-1-78-gototech" target="_blank"
                                               href="https://tech.yandex.ru/maps/mapsapi/?from=api-maps "
                                               style="display: none;">API</a></ymaps>
                                    </ymaps>
                                </ymaps>
                                <ymaps class="ymaps-2-1-78-controls-pane"
                                       style="width: 100%; top: 0px; left: 0px; position: absolute; z-index: 4503;">
                                    <ymaps class="ymaps-2-1-78-controls__toolbar" style="margin-top: 10px;">
                                        <ymaps class="ymaps-2-1-78-controls__toolbar_left"></ymaps>
                                        <ymaps class="ymaps-2-1-78-controls__toolbar_right">
                                            <ymaps
                                                class="ymaps-2-1-78-controls__control_toolbar ymaps-2-1-78-user-selection-none"
                                                style="margin-right: 10px; margin-left: 0px; position: inherit;"
                                                unselectable="on">
                                                <ymaps>
                                                    <ymaps class="ymaps-2-1-78-float-button ymaps-2-1-78-_hidden-text"
                                                           style="max-width: 28px" title="">
                                                        <ymaps
                                                            class="ymaps-2-1-78-float-button-icon ymaps-2-1-78-float-button-icon_icon_expand"></ymaps>
                                                        <ymaps class="ymaps-2-1-78-float-button-text"></ymaps>
                                                    </ymaps>
                                                </ymaps>
                                            </ymaps>
                                        </ymaps>
                                    </ymaps>
                                    <ymaps class="ymaps-2-1-78-controls__bottom" style="top: 0px;"></ymaps>
                                    <ymaps class="ymaps-2-1-78-controls__control"
                                           style="margin-right: 0px; margin-left: 0px; position: inherit; inset: 108px auto auto 10px;">
                                        <ymaps>
                                            <ymaps class="ymaps-2-1-78-zoom" style="height: 5px">
                                                <ymaps
                                                    class="ymaps-2-1-78-zoom__plus ymaps-2-1-78-zoom__button ymaps-2-1-78-float-button ymaps-2-1-78-user-selection-none"
                                                    unselectable="on">
                                                    <ymaps
                                                        class="ymaps-2-1-78-zoom__icon ymaps-2-1-78-float-button-icon"></ymaps>
                                                </ymaps>
                                                <ymaps
                                                    class="ymaps-2-1-78-zoom__minus ymaps-2-1-78-zoom__button ymaps-2-1-78-float-button ymaps-2-1-78-user-selection-none"
                                                    unselectable="on">
                                                    <ymaps
                                                        class="ymaps-2-1-78-zoom__icon ymaps-2-1-78-float-button-icon"></ymaps>
                                                </ymaps>
                                            </ymaps>
                                        </ymaps>
                                    </ymaps>
                                </ymaps>
                                <ymaps class="ymaps-2-1-78-places-pane"
                                       style="top: 0px; left: 0px; position: absolute; transform: translate3d(0px, 0px, 0px) scale(1, 1); z-index: 2004;">
                                    <ymaps class="ymaps-2-1-78-placemark-overlay ymaps-2-1-78-user-selection-none"
                                           unselectable="on"
                                           style="z-index: 650; height: 0px; width: 0px; position: absolute; left: -47px; top: 62px;">
                                        <ymaps>
                                            <ymaps class="ymaps-2-1-78-islets_dot-icon-with-caption">
                                                <ymaps class="ymaps-2-1-78-islets_dot-icon-with-caption__caption-block">
                                                    <ymaps class="ymaps-2-1-78-islets_icon-caption"
                                                           style="padding: 0px; max-width: 0px;"></ymaps>
                                                </ymaps>
                                                <ymaps id="id_161952891543845343929">
                                                    <ymaps
                                                        class="ymaps-2-1-78-svg-icon ymaps_https___api_maps_yandex_ru_2_1_78_1558401867466islands_dotIcon___99542e__99542e_34x41_1619528915762"
                                                        style="position: absolute; width: 34px; height: 41px; left: -11px; top: -38px;"></ymaps>
                                                </ymaps>
                                            </ymaps>
                                        </ymaps>
                                    </ymaps>
                                    <ymaps class="ymaps-2-1-78-placemark-overlay ymaps-2-1-78-user-selection-none"
                                           unselectable="on"
                                           style="z-index: 650; height: 0px; width: 0px; position: absolute; left: -31px; top: 168px;">
                                        <ymaps>
                                            <ymaps class="ymaps-2-1-78-pie-chart"
                                                   style="left: -28px; top: -28px; line-height: 56px; height: 56px; width: 56px;">
                                                <ymaps
                                                    class="ymaps-2-1-78-pie-chart-icon ymaps-2-1-78-patched-for-print"
                                                    style="list-style-image: url(&quot;data:image/svg+xml;base64,PHN2ZyB2aWV3Ym94PSIwIDAgNTYgNTYiIHdpZHRoPSI1NiIgaGVpZ2h0PSI1NiIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2ZXJzaW9uPSIxLjEiPjxjaXJjbGUgY3g9IjI4IiBjeT0iMjgiIHI9IjI3IiBzdHJva2U9IndoaXRlIiBzdHJva2Utd2lkdGg9IjIiIGZpbGw9InJnYmEoMjM3LDI4LDM2LDEpIi8+PHBhdGggZD0iTSAyOCAyOCBMIDEyIDUwIEEgMjcgMjcgMCAwIDEgMjggMSB6IiBmaWxsPSJyZ2JhKDE1Myw4NCw0NiwxKSIgc3Ryb2tlPSJ3aGl0ZSIgc3Ryb2tlLXdpZHRoPSIyIiBzdHJva2UtbGluZWpvaW49InJvdW5kIiAvPjxjaXJjbGUgY3g9IjI4IiBjeT0iMjgiIHI9IjEyIiBzdHJva2U9InRyYW5zcGFyZW50IiBzdHJva2Utd2lkdGg9IjAiIGZpbGw9IndoaXRlIi8+PC9zdmc+&quot;); background-image: url(&quot;data:image/svg+xml;base64,PHN2ZyB2aWV3Ym94PSIwIDAgNTYgNTYiIHdpZHRoPSI1NiIgaGVpZ2h0PSI1NiIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2ZXJzaW9uPSIxLjEiPjxjaXJjbGUgY3g9IjI4IiBjeT0iMjgiIHI9IjI3IiBzdHJva2U9IndoaXRlIiBzdHJva2Utd2lkdGg9IjIiIGZpbGw9InJnYmEoMjM3LDI4LDM2LDEpIi8+PHBhdGggZD0iTSAyOCAyOCBMIDEyIDUwIEEgMjcgMjcgMCAwIDEgMjggMSB6IiBmaWxsPSJyZ2JhKDE1Myw4NCw0NiwxKSIgc3Ryb2tlPSJ3aGl0ZSIgc3Ryb2tlLXdpZHRoPSIyIiBzdHJva2UtbGluZWpvaW49InJvdW5kIiAvPjxjaXJjbGUgY3g9IjI4IiBjeT0iMjgiIHI9IjEyIiBzdHJva2U9InRyYW5zcGFyZW50IiBzdHJva2Utd2lkdGg9IjAiIGZpbGw9IndoaXRlIi8+PC9zdmc+&quot;);"></ymaps>
                                                <ymaps class="ymaps-2-1-78-pie-chart-content">5</ymaps>
                                            </ymaps>
                                        </ymaps>
                                    </ymaps>
                                </ymaps>
                            </ymaps>
                        </ymaps>
                    </ymaps>
                </div>
            </section>


            <div class="wrap gap-4 mt-4">
                <div class="card">
                    <div class="card__body">
                        <div class="card__logo">
                            <img alt="logo" class="logo" src="                                /img/uploads/thumbnail/60784f1c0063f.jpg
                            ">
                        </div>
                        <div class="card__descr">
                            <div class="card__header">СЕРВИСНАЯ СЛУЖБА «GAS SERVICE»</div>
                            <div class="card__nav">

                                <div class="card__percent">10%</div>
                                <div class="card__tags">
                                    <a class="card__tag" href="http://disc-lara/city/crimea">Крым</a>
                                    <a class="card__tag" href="http://disc-lara/city/simferopol">Симферополь</a>
                                    <a class="card__tag" href="http://disc-lara/city/feodosiya">Феодосия</a>
                                    <a class="card__tag" href="http://disc-lara/city/yalta">Ялта</a>
                                    <a class="card__tag" href="http://disc-lara/category/autoshop">Автомагазины</a>
                                </div>
                            </div>
                            <div class="card__footer">
                                <a class="card__btn btn-red" href="/company/24">Подробнее</a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="card">
                    <div class="card__body">
                        <div class="card__logo">
                            <img alt="logo" class="logo" src="                                /img/uploads/thumbnail/60785122c3a79.jpg
                            ">
                        </div>
                        <div class="card__descr">
                            <div class="card__header">Автомагазин "TopGear"</div>
                            <div class="card__nav">

                                <div class="card__percent">5%</div>
                                <div class="card__tags">
                                    <a class="card__tag" href="http://disc-lara/city/yalta">Ялта</a>
                                    <a class="card__tag" href="http://disc-lara/category/autoshop">Автомагазины</a>
                                    <a class="card__tag" href="http://disc-lara/category/sto">СТО</a>
                                </div>
                            </div>
                            <div class="card__footer">
                                <a class="card__btn btn-red" href="/company/25">Подробнее</a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="card">
                    <div class="card__body">
                        <div class="card__logo">
                            <img alt="logo" class="logo" src="                                /img/uploads/thumbnail/60785141c4f5b.jpg
                            ">
                        </div>
                        <div class="card__descr">
                            <div class="card__header">Автомойка - Бар "ДРУЗЬЯ"</div>
                            <div class="card__nav">

                                <div class="card__percent">10%</div>
                                <div class="card__tags">
                                    <a class="card__tag" href="http://disc-lara/city/yalta">Ялта</a>
                                    <a class="card__tag" href="http://disc-lara/category/autoshop">Автомагазины</a>
                                </div>
                            </div>
                            <div class="card__footer">
                                <a class="card__btn btn-red" href="/company/26">Подробнее</a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="card">
                    <div class="card__body">
                        <div class="card__logo">
                            <img alt="logo" class="logo" src="                                /img/uploads/thumbnail/6078516525a6d.png
                            ">
                        </div>
                        <div class="card__descr">
                            <div class="card__header">ООО "БОШ Сервис"</div>
                            <div class="card__nav">

                                <div class="card__percent">10%</div>
                                <div class="card__tags">
                                    <a class="card__tag" href="http://disc-lara/city/yalta">Ялта</a>
                                    <a class="card__tag" href="http://disc-lara/category/sto">СТО</a>
                                    <a class="card__tag" href="http://disc-lara/category/autoshop">Автомагазины</a>
                                </div>
                            </div>
                            <div class="card__footer">
                                <a class="card__btn btn-red" href="/company/27">Подробнее</a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="card">
                    <div class="card__body">
                        <div class="card__logo">
                            <img alt="logo" class="logo" src="                                /img/uploads/thumbnail/6078518aab039.jpg
                            ">
                        </div>
                        <div class="card__descr">
                            <div class="card__header">"Автоювелир" Детейлинг в Крыму</div>
                            <div class="card__nav">

                                <div class="card__percent">10%</div>
                                <div class="card__tags">
                                    <a class="card__tag" href="http://disc-lara/city/simferopol">Симферополь</a>
                                    <a class="card__tag" href="http://disc-lara/category/sto">СТО</a>
                                </div>
                            </div>
                            <div class="card__footer">
                                <a class="card__btn btn-red" href="/company/28">Подробнее</a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="card">
                    <div class="card__body">
                        <div class="card__logo">
                            <img alt="logo" class="logo" src="                                /img/uploads/thumbnail/607851d46f8bf.jpg
                            ">
                        </div>
                        <div class="card__descr">
                            <div class="card__header">СЕРВИСНАЯ СЛУЖБА "GAS SERVICE"</div>
                            <div class="card__nav">

                                <div class="card__percent">25%</div>
                                <div class="card__tags">
                                    <a class="card__tag" href="http://disc-lara/city/yalta">Ялта</a>
                                    <a class="card__tag" href="http://disc-lara/category/sto">СТО</a>
                                </div>
                            </div>
                            <div class="card__footer">
                                <a class="card__btn btn-red" href="/company/29">Подробнее</a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="card">
                    <div class="card__body">
                        <div class="card__logo">
                            <img alt="logo" class="logo" src="                                /img/uploads/thumbnail/607851eb80c7e.jpg
                            ">
                        </div>
                        <div class="card__descr">
                            <div class="card__header">ООО Организация</div>
                            <div class="card__nav">

                                <div class="card__percent">5%</div>
                                <div class="card__tags">
                                    <a class="card__tag" href="http://disc-lara/city/sevastopol">Севастополь</a>
                                    <a class="card__tag" href="http://disc-lara/category/autoshop">Автомагазины</a>
                                </div>
                            </div>
                            <div class="card__footer">
                                <a class="card__btn btn-red" href="/company/30">Подробнее</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <script>
                ymaps.ready(init);


                function init() {
                    const myMap = new ymaps.Map('map', {
                            center: [45.15311552, 34.31881391],
                            zoom: 8,
                            controls: ['zoomControl', 'fullscreenControl']
                        }, {
                            searchControlProvider: 'yandex#search'
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
                    objectManager.add({
                        "type": "FeatureCollection",
                        "features": [{
                            "type": "Feature",
                            "id": 24,
                            "geometry": {"type": "Point", "coordinates": [44.49847828, 34.16926441]},
                            "properties": {
                                "balloonContentHeader": "<h2><\/h2>",
                                "balloonContentBody": "<img class='balloon' src='\/img\/uploads\/thumbnail\/60784f1c0063f.jpg' alt='logo'>\n<p>Скидка по карте: 10%<\/p>\n<p>График: с 8:00 до 19:00 Вс. - выходной<\/p>\n<p>Адрес: ул. Кирова<\/p>\n<p>Сайт: gasservice-crimea.ru<\/p>\n<p>Тел: +79780120606<\/p>\n<p>Краткое описание: Ремонт, обслуживание, монтаж: газ. котлов, газ. колонок, бойлеров, систем отопления, водоснабжения.<\/p>",
                                "clusterCaption": "Автомагазины",
                                "hintContent": null,
                                "iconCaption": null
                            },
                            "options": {"preset": "islands#blueDotIcon", "iconColor": "#ed1c24"}
                        }, {
                            "type": "Feature",
                            "id": 25,
                            "geometry": {"type": "Point", "coordinates": [44.4837947, 34.13441426]},
                            "properties": {
                                "balloonContentHeader": "<h2><\/h2>",
                                "balloonContentBody": "<img class='balloon' src='\/img\/uploads\/thumbnail\/60785122c3a79.jpg' alt='logo'>\n<p>Скидка по карте: на товар в магазине -5%,и на заказ запчастей -3 %<\/p>\n<p>График: с 09:00 до 18:00<\/p>\n<p>Адрес: Ялта, ул. Блюхера, 33<\/p>\n<p>Сайт: <\/p>\n<p>Тел: +79781340302<\/p>\n<p>Краткое описание: Запчасти на все марки автомобилей в наличии и под заказ!<\/p>",
                                "clusterCaption": "Автомагазины",
                                "hintContent": null,
                                "iconCaption": null
                            },
                            "options": {"preset": "islands#blueDotIcon", "iconColor": "#ed1c24"}
                        }, {
                            "type": "Feature",
                            "id": 26,
                            "geometry": {"type": "Point", "coordinates": [44.50736489, 34.16203215]},
                            "properties": {
                                "balloonContentHeader": "<h2><\/h2>",
                                "balloonContentBody": "<img class='balloon' src='\/img\/uploads\/thumbnail\/60785141c4f5b.jpg' alt='logo'>\n<p>Скидка по карте: 10%<\/p>\n<p>График: круглосуточно<\/p>\n<p>Адрес: Ялта, ул. Рабочая, 26<\/p>\n<p>Сайт: <\/p>\n<p>Тел: +79781357771<\/p>\n<p>Краткое описание: <\/p>",
                                "clusterCaption": "Автомагазины",
                                "hintContent": null,
                                "iconCaption": null
                            },
                            "options": {"preset": "islands#blueDotIcon", "iconColor": "#ed1c24"}
                        }, {
                            "type": "Feature",
                            "id": 27,
                            "geometry": {"type": "Point", "coordinates": [44.49149317, 34.12366999]},
                            "properties": {
                                "balloonContentHeader": "<h2><\/h2>",
                                "balloonContentBody": "<img class='balloon' src='\/img\/uploads\/thumbnail\/6078516525a6d.png' alt='logo'>\n<p>Скидка по карте: на работы -10%, на запчасти -5%<\/p>\n<p>График: Пн.-Пт. 9:00 - 18:00, Сб. 9:00 - 14:00<\/p>\n<p>Адрес: г. Ялта, ул. Красина, 1б<\/p>\n<p>Сайт: boschyalta.ru<\/p>\n<p>Тел: Приёмка: +7 978983 00 88 Отдел запчастей: +7 978914 53 71 Кузовной цех: +7 978 914 53 70<\/p>\n<p>Краткое описание: <\/p>",
                                "clusterCaption": "СТО",
                                "hintContent": null,
                                "iconCaption": null
                            },
                            "options": {"preset": "islands#blueDotIcon", "iconColor": "#99542e"}
                        }, {
                            "type": "Feature",
                            "id": 28,
                            "geometry": {"type": "Point", "coordinates": [44.91005557, 34.06328839]},
                            "properties": {
                                "balloonContentHeader": "<h2><\/h2>",
                                "balloonContentBody": "<img class='balloon' src='\/img\/uploads\/thumbnail\/6078518aab039.jpg' alt='logo'>\n<p>Скидка по карте: На услуги 10%, на запчасти 5%<\/p>\n<p>График: с 8:00 до 18:00. Пн-Пт<\/p>\n<p>Адрес: г. Симферополь, ул. Севастопольская 321, ГСК \"Автолюбитель\"<\/p>\n<p>Сайт: автоювелир.рф<\/p>\n<p>Тел: +79787567490 общий +79787567489 отдел запчастей<\/p>\n<p>Краткое описание: антигравийная пленка, защитные составы, \r\n\r\nтонировка, химчистка, полировка, \r\n\r\nудаление вмятин,шумоизоляция, автозапчасти,\r\n\r\nперетежка руля и салон(кожа, алькантара)<\/p>",
                                "clusterCaption": "СТО",
                                "hintContent": null,
                                "iconCaption": null
                            },
                            "options": {"preset": "islands#blueDotIcon", "iconColor": "#99542e"}
                        }, {
                            "type": "Feature",
                            "id": 29,
                            "geometry": {"type": "Point", "coordinates": [44.49847828, 34.16926441]},
                            "properties": {
                                "balloonContentHeader": "<h2><\/h2>",
                                "balloonContentBody": "<img class='balloon' src='\/img\/uploads\/thumbnail\/607851d46f8bf.jpg' alt='logo'>\n<p>Скидка по карте: 25%<\/p>\n<p>График: с 8:00 до 19:00 Вт. - Вс. Пн.- выходной<\/p>\n<p>Адрес: ул. Кирова<\/p>\n<p>Сайт: gasservice-crimea.ru<\/p>\n<p>Тел: +79780120606<\/p>\n<p>Краткое описание: sadad<\/p>",
                                "clusterCaption": "СТО",
                                "hintContent": null,
                                "iconCaption": null
                            },
                            "options": {"preset": "islands#blueDotIcon", "iconColor": "#99542e"}
                        }]
                    });
                }
            </script>

        </main>

        <footer class="footer">©AMS DISCOUNT by <a class="link" href="http://automotosupport.ru">automotosupport.ru</a>
            2021
        </footer>
    </div>
</div>
<!-- Livewire Scripts -->

<script src="/vendor/livewire/livewire.js?id=54d078b2ce39327a1702" data-turbo-eval="false"
        data-turbolinks-eval="false"></script>


<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.min.js" defer=""></script>


</body>


<button @click="open = !open"
        class="flex flex-row items-center w-full px-4 py-2 mt-2 text-sm text-left bg-transparent rounded-lg focus:text-gray-300 hover:text-gray-300 hover:bg-red-900 focus:bg-red-900 md:w-auto md:mt-0 focus:outline-none focus:shadow-outline">
                            <span class="mr-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
        d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
</svg>
                </span>
    <span>
                    Город
                </span>
    <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}"
         class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform">
        <path fill-rule="evenodd"
              d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
              clip-rule="evenodd"></path>
    </svg>
</button>
<div x-show="open" x-transition:enter="transition ease-out duration-300"
     x-transition:enter-start="transform opacity-0 scale-95"
     x-transition:enter-end="transform opacity-100 scale-100"
     x-transition:leave="transition ease-in duration-200"
     x-transition:leave-start="transform opacity-100 scale-100"
     x-transition:leave-end="transform opacity-0 scale-95"
     class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48 z-30">
    <div class="px-2 py-2 bg-black rounded-md shadow">

        @foreach(\App\Models\City::all()->sortBy('name') as $city)
            <a class="block px-4 py-2 mt-2 text-sm bg-transparent rounded-lg hover:bg-red-900 focus:bg-gray-900 focus:text-gray-300 hover:text-gray-300 md:mt-0 focus:outline-none focus:shadow-outline"
               href="{{route('showCity', $city)}}">{{$city->name}}</a>
        @endforeach

    </div>
</div>

</div>


<div id="box">
    <!-- Чтобы добавить на страницу геоссылку, необходимо обернуть нужный текст в HTML-элемент с CSS-классом «ymaps-geolink»
    и загрузить код API с модулем Geolink.-->
    <p><span class="ymaps-geolink">Москва, ул. Льва Толстого, 16</span> — адрес офиса.</p>

    <!-- Геоссылке могут быть заданы различные параметры: область поиска объекта (data-bounds), тип объекта (data-type),
        поясняющий текст, который будет отображен в шапке всплывающего окна (data-description). -->
    <p id="whiteText">
        <span class="ymaps-geolink" data-bounds="[[55.73333783240489,37.586741441564136],
        [55.73433517114847,37.59017466910319]]" data-type="biz">Кафе</span>, которое вы можете посетить рядом с нами.
    </p>
    <p>Проезд до станции метро «Парк культуры» (кольцевая). Из дверей метро нужно повернуть направо и идти по
        Комсомольскому проспекту около 250 метров.
        Второй поворот направо — на улицу Тимура Фрунзе. По ней нужно дойти до красного кирпичного здания с табличкой
        «дом 11, стр 2-5», шлагбаумом и указателями с логотипом Яндекса.</p>
    <p>Если же вам нужно попасть в Яндекс.Деньги, пройдите до <span class="ymaps-geolink" data-bounds="[[55.63333783240489,37.486741441564136],
        [55.75433517114847,37.69017466910319]]" data-type="geo">Льва Толстого, 18Б</span>.</p>
</div>

<h2>Бот</h2>
<form action="{{route('botUpdate')}}" method="post">
    @csrf
    <button type="submit">Получить</button>
</form>
<form class="mt-4" action="{{route('sendMessage')}}" method="post">
    @csrf
    <input type="text" name="text">
    <button type="submit">Отправить</button>
</form>
</body>
</html>


