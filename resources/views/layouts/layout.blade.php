<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Play&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    @yield('scriptMap')
    @livewireStyles
    <title>AMS Discount @yield('title')</title>
    {{--    @livewireStyles--}}
</head>
<body class="body">

<div x-data="setData()" class="flex">
    <aside :class="{'-ml-56': !asideOpen}"
           class="flex flex-col shadow-lg top-0 left-0 w-56 bg-black fixed h-full z-30 transition-all duration-300">
    <a href="/" class="w-full p-4">
        <img src="{{ asset('img/logo.svg') }}" alt="Logo" class="h-auto w-28 mx-auto">
    </a>

    @yield('linksAside')


    </aside>
    <div @click="asideOpen=false" :class="{'hidden': !asideOpen}"
         class="bg-black md:hidden opacity-50 w-screen h-screen fixed"></div>
    <div :class="{ 'md:ml-56': asideOpen }"
         class="md:ml-56 flex flex-col justify-between w-full min-h-screen transition-all duration-300">
        <header class="header">

            {{--        <livewire:nav-menu />--}}
            <x-nav-menu/>
            {{--        <div class="header-contacts">
                        <div class="lnk-telegram">
                            <a class="header-link" href="https://t.me/amsdiscountbot" target="_blank">
                                <svg class="mr-1" width="34" height="34" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 240 240">
                                    <defs>
                                        <linearGradient id="a" x1=".667" x2=".417" y1=".167" y2=".75">
                                            <stop offset="0" stop-color="#37aee2"></stop>
                                            <stop offset="1" stop-color="#1e96c8"></stop>
                                        </linearGradient>
                                        <linearGradient id="b" x1=".66" x2=".851" y1=".437" y2=".802">
                                            <stop offset="0" stop-color="#eff7fc"></stop>
                                            <stop offset="1" stop-color="#fff"></stop>
                                        </linearGradient>
                                    </defs>
                                    <circle cx="120" cy="120" r="120" fill="url(#a)"></circle>
                                    <path fill="#c8daea" d="M98 175c-3.888 0-3.227-1.468-4.568-5.17L82 132.207 170 80"></path>
                                    <path fill="#a9c9dd" d="M98 175c3 0 4.325-1.372 6-3l16-15.558-19.958-12.035"></path>
                                    <path fill="url(#b)" d="M100.04 144.41l48.36 35.729c5.519 3.045 9.501 1.468 10.876-5.123l19.685-92.763c2.015-8.08-3.08-11.746-8.36-9.349l-115.59 44.571c-7.89 3.165-7.843 7.567-1.438 9.528l29.663 9.259 68.673-43.325c3.242-1.966 6.218-.91 3.776 1.258"></path>
                                </svg>
                                &nbsp;@amsdiscountbot
                            </a>
                        </div>
                        <div class="lnk-phone">
                            <a class="header-link" href="tel:+79780820203">+7 978 082 02 03</a>
                        </div>
                    </div>
                    <div class="header-button">
                        <a class="btn-red btn-filter" href="#">Фильтр</a>
                        <a
                            class="btn-red btn-enter"
                            href="@auth() {{ route('company.index') }}">Личный&nbsp;кабинет@endauth
                            @guest() {{ '/login' }} ">Войти@endguest
                        </a>
                    </div>--}}

        </header>
        <main class="container flex-grow transition-all ease-in-out duration-300">
            @yield('content')
        </main>

        <footer class="footer"><span class="transition-all" :class="{ 'md:-ml-56': asideOpen }">©AMS DISCOUNT by <a class="link" href="http://automotosupport.ru">automotosupport.ru</a>
            2021</span>
        </footer>
    </div>
</div>
@livewireScripts
@yield('scriptFooter')
{{--@livewireScripts--}}
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.min.js" defer></script>
<script>
    function setData() {
        if (document.documentElement.clientWidth < 768)
            return { asideOpen: false };
        else
            return { asideOpen: true };
    }
</script>
</body>
</html>
