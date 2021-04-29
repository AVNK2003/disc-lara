@extends('layouts.layout')
@section('content')
    <div class="flex flex-col-reverse justify-between w-screen sm:block sm:relative" x-data="{ open: true }">
        <div x-show="open === true" class="w-full text-gray-400 bg-black">
            <div x-data="{ open: false }" class="flex flex-col max-w-screen-xl px-4 mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:px-8">
                <div class="flex flex-row items-center justify-between p-4">
                    <div class="header-logo ">
                        <a href="/">
                            <img src="{{ asset('img/logo.svg') }}" alt="logo">
                        </a>
                    </div>
                    <button class="rounded-lg md:hidden focus:outline-none focus:shadow-outline" @click="open = !open">
                        <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                            <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                            <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
                <nav :class="{'flex': open, 'hidden': !open}" class="flex-col flex-grow hidden pb-4 md:pb-0 md:flex md:justify-end md:flex-row">
                    <a class="flex px-4 py-2 mt-2 text-sm text-gray-400 rounded-lg hover:bg-red-900 focus:bg-red-900 focus:text-gray-300 hover:text-gray-300 md:mt-0 focus:outline-none focus:shadow-outline" href="/">
                        <span class="mr-1">
                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                  </svg>
                </span>
                        <span>
                    Главная
                </span>
                    </a>

                    <div @click.away="open = false" class="relative" x-data="{ open: false }">
                        <button @click="open = !open" class="flex flex-row items-center w-full px-4 py-2 mt-2 text-sm text-left bg-transparent rounded-lg focus:text-gray-300 hover:text-gray-300 hover:bg-red-900 focus:bg-red-900 md:w-auto md:mt-0 focus:outline-none focus:shadow-outline">
                            <span class="mr-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
</svg>
                </span>
                            <span>
                    Город
                </span>
                            <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </button>
                        <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48 z-30">
                            <div class="px-2 py-2 bg-black rounded-md shadow">

                                @foreach(\App\Models\City::all()->sortBy('name') as $city)
                                <a class="block px-4 py-2 mt-2 text-sm bg-transparent rounded-lg hover:bg-red-900 focus:bg-gray-900 focus:text-gray-300 hover:text-gray-300 md:mt-0 focus:outline-none focus:shadow-outline" href="{{route('showCity', $city)}}">{{$city->name}}</a>
                                @endforeach

                            </div>
                        </div>

                    </div>

                    <div @click.away="open = false" class="relative" x-data="{ open: false }">
                        <button @click="open = !open" class="flex flex-row items-center w-full px-4 py-2 mt-2 text-sm text-left bg-transparent rounded-lg focus:text-gray-300 hover:text-gray-300 hover:bg-red-900 focus:bg-red-900 md:w-auto md:mt-0 focus:outline-none focus:shadow-outline">
                            <span class="mr-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 19a2 2 0 01-2-2V7a2 2 0 012-2h4l2 2h4a2 2 0 012 2v1M5 19h14a2 2 0 002-2v-5a2 2 0 00-2-2H9a2 2 0 00-2 2v5a2 2 0 01-2 2z"></path>
</svg>
                </span>
                            <span>
                    Категории
                </span>
                            <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </button>
                        <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48 z-30">
                            <div class="sm:w-[350px] px-2 py-2 bg-black wrap rounded-md shadow">

                                @foreach(\App\Models\Category::all()->sortBy('name') as $category)
                                    <a class="block w-1/2 px-4 py-2 mt-2 text-sm bg-transparent rounded-lg hover:bg-red-900 focus:bg-red-900 focus:text-gray-300 hover:text-gray-300 md:mt-0 focus:outline-none focus:shadow-outline" href="{{route('showCategory', $category)}}">{{$category->name}}</a>
                                @endforeach

                            </div>
                        </div>
                    </div>

                    <a class="flex px-4 py-2 mt-2 text-sm text-gray-400 rounded-lg hover:bg-red-900 focus:bg-red-900 focus:text-gray-300 hover:text-gray-300 md:mt-0 focus:outline-none focus:shadow-outline" href="https://t.me/amsdiscountbot">
                        <span class="mr-1">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="w-5 h-5"><path fill="currentColor" d="M446.7 98.6l-67.6 318.8c-5.1 22.5-18.4 28.1-37.3 17.5l-103-75.9-49.7 47.8c-5.5 5.5-10.1 10.1-20.7 10.1l7.4-104.9 190.9-172.5c8.3-7.4-1.8-11.5-12.9-4.1L117.8 284 16.2 252.2c-22.1-6.9-22.5-22.1 4.6-32.7L418.2 66.4c18.4-6.9 34.5 4.1 28.5 32.2z" class=""></path></svg>
                            </svg>
                </span>
                        <span>
                    Телеграм бот
                </span>
                    </a>

                    <a class="flex px-4 py-2 mt-2 text-sm text-gray-400 rounded-lg hover:bg-red-900 focus:bg-red-900 focus:text-gray-300 hover:text-gray-300 md:mt-0 focus:outline-none focus:shadow-outline" href="tel:+79780820203">
                        <span class="mr-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
</svg>
                </span>
                        <span>
                    Позвоните нам
                </span>
                    </a>

                    @guest()
                    <a class="flex px-4 py-2 mt-2 text-sm text-gray-400 rounded-lg hover:bg-red-900 focus:bg-red-900 focus:text-gray-300 hover:text-gray-300 md:mt-0 focus:outline-none focus:shadow-outline" href="{{route('login')}}">
                        <span class="mr-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
</svg>
                </span>
                        <span>
                    Войти
                </span>
                    </a>
                    @endguest

                    @auth()
                    <a class="flex px-4 py-2 mt-2 text-sm text-gray-400 rounded-lg hover:bg-red-900 focus:bg-red-900 focus:text-gray-300 hover:text-gray-300 md:mt-0 focus:outline-none focus:shadow-outline" href="{{route('admin')}}">
                        <span class="mr-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
</svg>
                </span>
                        <span>
                    Личный кабинет
                </span>
                    </a>
                    @endauth

                </nav>
            </div>
        </div>

    </div>
@endsection
