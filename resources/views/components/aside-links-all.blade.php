<nav class="flex-1 text-sm overflow-hidden hover:overflow-y-auto">
    <ul class="py-2 px-4 overflow-hidden">

        <li x-data="{ open: false }">
            <a @click.prevent="open = !open" href="#" class="flex items-center p-2 space-x-2 rounded-md focus:bg-red-800 focus:outline-none hover:bg-red-800">
                <i class="fas fa-building w-5 text-base"></i>
                <span>Город</span>
                <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}"
                     class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform">
                    <path fill-rule="evenodd"
                          d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                          clip-rule="evenodd"></path>
                </svg>
            </a>
            <div x-show="open" x-cloak
                 x-transition:enter="transition ease-out duration-300"
                 x-transition:enter-start="transform opacity-0 scale-95"
                 x-transition:enter-end="transform opacity-100 scale-100"
                 x-transition:leave="transition ease-in duration-200"
                 x-transition:leave-start="transform opacity-100 scale-100"
                 x-transition:leave-end="transform opacity-0 scale-95"
                 @click.away="open = false"
                 class="absolute w-48 left-4 origin-top z-10">
                <div class="px-2 py-2 bg-black rounded-md shadow">

                    @foreach(\App\Models\City::all()->sortBy('name') as $city)
                        <a class="block px-4 py-2 text-sm rounded-lg hover:bg-red-800 focus:bg-red-800 focus:text-gray-300 hover:text-gray-300 md:mt-0 focus:outline-none focus:shadow-outline"
                           href="{{route('showCity', $city)}}">{{$city->name}}</a>
                    @endforeach

                </div>
            </div>
        </li>

        <li x-data="{ open: false }">
            <a @click.prevent="open = !open" href="#" class="flex items-center p-2 space-x-2 rounded-md focus:outline-none focus:bg-red-800 hover:bg-red-800">
                <i class="fas fa-folder w-5 text-base"></i>
                <span>Категории</span>
                <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}"
                     class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform">
                    <path fill-rule="evenodd"
                          d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                          clip-rule="evenodd"></path>
                </svg>
            </a>
            <div x-show="open" x-cloak
                 x-transition:enter="transition ease-out duration-300"
                 x-transition:enter-start="transform opacity-0 scale-95"
                 x-transition:enter-end="transform opacity-100 scale-100"
                 x-transition:leave="transition ease-in duration-200"
                 x-transition:leave-start="transform opacity-100 scale-100"
                 x-transition:leave-end="transform opacity-0 scale-95"
                 @click.away="open = false"
                 class="absolute left-0 w-full origin-top rounded-md shadow-lg z-30">
                <div class="w-[350px] px-2 py-2 bg-black wrap rounded-md shadow">

                    @foreach(\App\Models\Category::all()->sortBy('name') as $category)
                        <a class="block w-1/2 px-4 py-2 text-sm bg-transparent rounded-lg hover:bg-red-800 focus:bg-red-800 focus:text-gray-300 hover:text-gray-300 md:mt-0 focus:outline-none focus:shadow-outline"
                           href="{{route('showCategory', $category)}}">{{$category->name}}</a>
                    @endforeach

                </div>
            </div>
        </li>
        @foreach(\App\Models\infoLink::all() as $link)
            <li>
                <a class="flex items-center p-2 space-x-2 rounded-md focus:bg-red-800 focus:outline-none hover:bg-red-800" href="{{ route('showLink', $link) }}">
                    <i class="fas w-5 text-base">{{$link->svg}}</i>
                    <span>{{ $link->title }}</span></a>
            </li>
        @endforeach
    </ul>
</nav>
