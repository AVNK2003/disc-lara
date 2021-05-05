<nav class="flex-1 text-sm overflow-hidden hover:overflow-y-auto">
    <ul class="py-2 px-4 overflow-hidden">

        <li>
            <a
                href="{{ route('company.index') }}"
                class="flex items-center p-2 space-x-2 rounded-md hover:bg-red-800"
            >
                <span>
                  <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="h-5 w-5"
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
                <span>Организации</span>
            </a>
        </li>

        <li>
            <a
                href="{{ route('user.index') }}"
                class="flex items-center p-2 space-x-2 rounded-md hover:bg-red-800"
            >
                <span>
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                       stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
        d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
</svg>
                </span>
                <span>Партнеры</span>
            </a>
        </li>

        <li>
            <a
                href="{{ route('city.index') }}"
                class="flex items-center p-2 space-x-2 rounded-md hover:bg-red-800"
            >
                <span>
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                       stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
        d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
</svg>
                </span>
                <span>Города</span>
            </a>
        </li>

        <li>
            <a
                href="{{ route('category.index') }}"
                class="flex items-center p-2 space-x-2 rounded-md hover:bg-red-800"
            >
                <span>
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                       stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
        d="M5 19a2 2 0 01-2-2V7a2 2 0 012-2h4l2 2h4a2 2 0 012 2v1M5 19h14a2 2 0 002-2v-5a2 2 0 00-2-2H9a2 2 0 00-2 2v5a2 2 0 01-2 2z"/>
</svg>
                </span>
                <span>Категории</span>
            </a>
        </li>

        <li>
            <a
                href="{{ route('infoLink.index') }}"
                class="flex items-center p-2 space-x-2 rounded-md hover:bg-red-800"
            >
                <span>
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
</svg>
                </span>
                <span>Ссылки</span>
            </a>
        </li>

        <li>
            <a
                href="{{route('comment.index')}}"
                class="flex items-center p-2 space-x-2 rounded-md hover:bg-red-800"
            >
                <span>
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
</svg>
                </span>
                <span>Отзывы</span>
            </a>
        </li>

        <li>
            <a
                href="#"
                class="flex items-center p-2 space-x-2 rounded-md hover:bg-red-800"
            >
                <span>
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                       stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
        d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"/>
</svg>
                </span>
                <span>Сообщения</span>
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
                  class="w-5 h-5"
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
            <span> Выход </span>
        </button>
    </form>
</div>
