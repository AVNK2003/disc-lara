<div class="flex flex-col-reverse justify-between w-full sm:block sm:relative">
    <div class="w-full text-gray-400 bg-black h-16">
        <div class="flex flex-col px-4 m-auto items-center justify-between flex-row md:px-6 lg:px-8">
            <div class="flex flex-row items-center justify-between p-4">
                <div class="flex transition-all duration-300">
                    <div :class="{'opacity-0 -ml-28': asideOpen}" class="header-logo opacity-0 -ml-28">
                        <a href="/">
                            <img src="{{ asset('img/logo.svg') }}" alt="logo">
                        </a>
                    </div>
                    <button class="ml-2 focus:outline-none"
                            @click="asideOpen = !asideOpen">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                  d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                  clip-rule="evenodd"/>
                        </svg>
                    </button>
                </div>
            </div>
            <nav class="flex-col flex-row flex-grow flex justify-end">
                <a class="flex px-4 py-2 mt-2 text-sm text-gray-400 rounded-lg hover:bg-red-800 focus:bg-red-800 focus:text-gray-300 hover:text-gray-300 md:mt-0 focus:outline-none focus:shadow-outline"
                   href="/">
                        <span class="mr-1">
                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                  </svg>
                </span>
                    <span class="hidden sm:block">Главная</span>
                </a>


                <a class="flex px-4 py-2 mt-2 text-sm text-gray-400 rounded-lg hover:bg-red-800 focus:bg-red-800 focus:text-gray-300 hover:text-gray-300 md:mt-0 focus:outline-none focus:shadow-outline"
                   href="https://t.me/amsdiscountbot">
                        <span class="mr-1">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="w-5 h-5"><path
                            fill="currentColor"
                            d="M446.7 98.6l-67.6 318.8c-5.1 22.5-18.4 28.1-37.3 17.5l-103-75.9-49.7 47.8c-5.5 5.5-10.1 10.1-20.7 10.1l7.4-104.9 190.9-172.5c8.3-7.4-1.8-11.5-12.9-4.1L117.8 284 16.2 252.2c-22.1-6.9-22.5-22.1 4.6-32.7L418.2 66.4c18.4-6.9 34.5 4.1 28.5 32.2z"
                            class=""></path></svg>
                </span>
                    <span class="hidden sm:block">Телеграм бот</span>
                </a>

                <a class="flex px-4 py-2 mt-2 text-sm text-gray-400 rounded-lg hover:bg-red-800 focus:bg-red-800 focus:text-gray-300 hover:text-gray-300 md:mt-0 focus:outline-none focus:shadow-outline"
                   href="tel:+79780820203">
                        <span class="mr-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
</svg>
                </span>
                    <span class="hidden sm:block">Позвонить нам</span>
                </a>


                    <a class="flex px-4 py-2 mt-2 text-sm text-gray-400 rounded-lg hover:bg-red-800 focus:bg-red-800 focus:text-gray-300 hover:text-gray-300 md:mt-0 focus:outline-none focus:shadow-outline"
                       href="{{route('login')}}">
                        <span class="mr-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
</svg>
                </span>
                        <span class="hidden sm:block">
                        @guest()
                            Войти
                        @endguest
                        @auth()
                            Личный кабинет
                        @endauth
                        </span>
                    </a>
            </nav>

        </div>
    </div>

</div>

