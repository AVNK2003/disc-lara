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
    @yield('scriptMap')
    <title>AMS Discount. Личный кабинет</title>
</head>

<body>

<x-success-session />

{{-- component --}}

<div class="flex h-screen overflow-y-hidden bg-gray-900 text-gray-300" x-data="setup()"
     x-init="$refs.loading.classList.add('hidden')">
    <!-- Loading screen -->
    <div
        x-ref="loading"
        class="fixed inset-0 z-50 flex items-center justify-center text-white bg-black bg-opacity-50"
        style="backdrop-filter: blur(14px); -webkit-backdrop-filter: blur(14px)"
    >
        Загрузка данных.....
    </div>

    <!-- Sidebar backdrop -->
    <div
        x-show.in.out.opacity="isSidebarOpen"
        class="fixed inset-0 z-10 lg:hidden"
        @click="toggleSidebarMenu()"
    ></div>

    <!-- Sidebar -->
    <aside
        x-transition:enter="transition transform duration-300"
        x-transition:enter-start="-translate-x-full opacity-30 ease-in"
        x-transition:enter-end="translate-x-0 opacity-100 ease-out"
        x-transition:leave="transition transform duration-300"
        x-transition:leave-start="translate-x-0 opacity-100 ease-out"
        x-transition:leave-end="-translate-x-full opacity-0 ease-in"
        class="fixed inset-y-0 z-10 flex flex-col flex-shrink-0 w-44 max-h-screen overflow-hidden transition-all transform bg-gray-900 -translate-x-full lg:translate-x-0 lg:w-20 shadow-lg lg:z-auto lg:static lg:shadow-none"
        :class="{'-translate-x-full lg:translate-x-0 lg:w-20': !isSidebarOpen}"
    >
        <!-- sidebar header -->
        <div class="flex items-center justify-center flex-shrink-0 p-2">
            <a href="/">
                <img class="p-2" src="http://disc-lara/img/logo.svg" alt="logo">
            </a>
        </div>
        <!-- Sidebar links -->
        <nav class="flex-1 overflow-hidden hover:overflow-y-auto">
            <ul class="p-2 overflow-hidden">
                <li>
                    <a
                        href="{{ route('admin') }}"
                        class="flex items-center p-2 space-x-2 rounded-md hover:bg-red-800"
                        :class="{'justify-center': !isSidebarOpen}"
                    >
                <span>
                  <svg
                      class="w-6 h-6 text-gray-300"
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                  >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"
                    />
                  </svg>
                </span>
                        <span :class="{ 'lg:hidden': !isSidebarOpen }">Главная</span>
                    </a>
                </li>

                <li>
                    <a
                        href="{{ route('company.index') }}"
                        class="flex items-center p-2 space-x-2 rounded-md hover:bg-red-800"
                        :class="{'justify-center': !isSidebarOpen}"
                    >
                <span>
                  <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="h-6 w-6"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke="currentColor">
  <path
      stroke-linecap="round"
      stroke-linejoin="round"
      stroke-width="2"
      d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
</svg>
                </span>
                        <span :class="{ 'lg:hidden': !isSidebarOpen }">Организации</span>
                    </a>
                </li>

                <li>
                    <a
                        href="{{ route('user.index') }}"
                        class="flex items-center p-2 space-x-2 rounded-md hover:bg-red-800"
                        :class="{'justify-center': !isSidebarOpen}"
                    >
                <span>
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                       stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
        d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
</svg>
                </span>
                        <span :class="{ 'lg:hidden': !isSidebarOpen }">Партнеры</span>
                    </a>
                </li>

                <li>
                    <a
                        href="{{ route('city.index') }}"
                        class="flex items-center p-2 space-x-2 rounded-md hover:bg-red-800"
                        :class="{'justify-center': !isSidebarOpen}"
                    >
                <span>
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                       stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
        d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
</svg>
                </span>
                        <span :class="{ 'lg:hidden': !isSidebarOpen }">Города</span>
                    </a>
                </li>

                <li>
                    <a
                        href="{{ route('category.index') }}"
                        class="flex items-center p-2 space-x-2 rounded-md hover:bg-red-800"
                        :class="{'justify-center': !isSidebarOpen}"
                    >
                <span>
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                       stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
        d="M5 19a2 2 0 01-2-2V7a2 2 0 012-2h4l2 2h4a2 2 0 012 2v1M5 19h14a2 2 0 002-2v-5a2 2 0 00-2-2H9a2 2 0 00-2 2v5a2 2 0 01-2 2z"/>
</svg>
                </span>
                        <span :class="{ 'lg:hidden': !isSidebarOpen }">Категории</span>
                    </a>
                </li>

                <li>
                    <a
                        href="#"
                        class="flex items-center p-2 space-x-2 rounded-md hover:bg-red-800"
                        :class="{'justify-center': !isSidebarOpen}"
                    >
                <span>
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                       stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
        d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"/>
</svg>
                </span>
                        <span :class="{ 'lg:hidden': !isSidebarOpen }">Сообщения</span>
                    </a>
                </li>

                <!-- Sidebar Links... -->
            </ul>
        </nav>
        <!-- Sidebar footer -->
        <div class="flex-shrink-0 p-2 max-h-14">
            <form action="{{route('logout')}}" method="post">
                @csrf
                <button type="submit"
                        class="flex items-center justify-center px-4 py-2 space-x-1 font-medium tracking-wider uppercase  border rounded-md outline-none focus:ring hover:bg-red-800"
                >
            <span>
              <svg
                  class="w-6 h-6"
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
              >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"
                />
              </svg>
            </span>
                    <span :class="{'lg:hidden': !isSidebarOpen}"> Выход </span>
                </button>
            </form>
        </div>
    </aside>

    <div class="flex flex-col flex-1 h-full overflow-hidden">
        <!-- Navbar -->
        <header class="flex-shrink-0">
            <div class="flex items-center justify-between p-2">
                <!-- Navbar left -->
                <div class="flex items-center space-x-3">
                        <span class="p-2 lg:hidden">
                            <a href="/">
                <img src="http://disc-lara/img/logo.svg" alt="logo">
            </a>
                        </span>
                    <!-- Toggle sidebar button -->
                    <button @click="toggleSidebarMenu()"
                            class="p-2 rounded-md focus:outline-none focus:ring ring-red-800">
                        <svg
                            class="w-4 h-4 text-gray-300"
                            :class="{'transform transition-transform -rotate-180': isSidebarOpen}"
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                        >
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M13 5l7 7-7 7M5 5l7 7-7 7"/>
                        </svg>
                    </button>
                </div>
                <h1 class="text-2xl">@yield('title')</h1>
                @yield('add-button')
                <!-- Navbar right -->
                <div class="relative flex items-center space-x-3">
                    <div>
                        <a class="block px-2 py-2 border-2 rounded-full outline-none focus:ring ring-red-800 hover:bg-red-800"
                           href="/">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                            </svg>
                        </a>
                    </div>
                    <!-- avatar button -->
                    <div x-data="{ isOpen: false }">
                        <a href="#"
                           @click="isOpen = !isOpen"
                           class="block px-2 py-2 border-2 rounded-full outline-none focus:ring ring-red-800 hover:bg-red-800">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                            </svg>
                        </a>

                        <!-- Dropdown card -->
                        <div
                            x-show="isOpen"
                            x-ref="userMenu"
                            x-transition:enter="transition-all transform ease-out"
                            x-transition:enter-start="translate-y-1/2 opacity-0"
                            x-transition:enter-end="translate-y-0 opacity-100"
                            x-transition:leave="transition-all transform ease-in"
                            x-transition:leave-start="translate-y-0 opacity-100"
                            x-transition:leave-end="-translate-y-1/2 opacity-0"
                            @click.away="isOpen = false"
                            @keydown.escape="isOpen = false"
                            class="absolute right-0 w-32 py-1 bg-gray-900 rounded-md border shadow-lg top-12 ring-1 ring-black ring-opacity-5 dark:bg-dark focus:outline-none"
                            tabindex="-1"
                            role="menu"
                            ria-orientation="vertical"
                            aria-label="User menu"
                        >
                            <ul class="flex flex-col p-2 space-y-1">
                                <li>
                                    <a href="#"
                                       class="block px-2 py-1 text-center transition rounded-md hover:bg-red-800">Профиль</a>
                                </li>
                            </ul>
                            <form class="text-center mb-2 px-2" action="{{route('logout')}}" method="post">
                                @csrf
                                <button type="submit"
                                        class="w-full py-1 space-x-1 font-medium tracking-wide rounded-md outline-none focus:ring hover:bg-red-800"
                                >Выход
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main content -->
        <main class="flex-1 max-h-full p-5 overflow-hidden overflow-y-scroll">
            <!-- Start Content -->
            @yield('content')
        </main>
        <!-- Main footer -->
        <footer class="flex items-center justify-center flex-shrink-0 p-4 max-h-14">
            <div>
                <a
                    class="text-blue-400 underline"
                    href="http://automotosupport.ru/"
                    target="_blank"
                >AutoMotoSupport.ru
                </a> &copy; 2021&nbsp;
            </div>
            <div class="text-sm">
                разработка
                <a
                    class="text-blue-400 underline"
                    href="mailto:avnk2003@yandex.ru"
                    target="_blank"
                    rel="noopener noreferrer"
                >AVNK</a
                >
            </div>
            <div>

            </div>
        </footer>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.min.js" defer></script>
<script>
    const setup = () => {
        return {
            loading: true,
            isSidebarOpen: false,
            toggleSidebarMenu() {
                this.isSidebarOpen = !this.isSidebarOpen
            },
        }
    }
</script>
</body>
@yield('scriptFooter')
</html>
