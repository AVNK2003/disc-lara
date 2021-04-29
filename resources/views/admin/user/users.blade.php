@extends('layouts.layout')
@section('title', 'Партнеры')
@section('linksAside') <x-aside-links-admins />@endsection
@section('content')
    <x-success-session />
    @include('components.validation')

    <div class="flex items-baseline justify-between">
    <a
        class="py-2 px-4 space-x-2 rounded-md border hover:bg-red-800"
        href="{{ route('category.create') }}">
        Добавить партнера
    </a>
    </div>
    <div class="flex flex-col mt-6">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-3 align-middle sm:px-6 lg:px-8">
                <div class="overflow-hidden rounded-md shadow-md">
                    <table class="min-w-full overflow-x-scroll divide-y divide-gray-300">
                        <thead class="bg-gray-800">
                        <tr>
                            <th
                                scope="col"
                                class="px-3 py-3 text-xs font-medium tracking-wider text-left text-gray-300 uppercase">
                                Имя
                            </th>
                            <th
                                scope="col"
                                class="px-3 py-2 text-xs font-medium tracking-wider text-left text-gray-300 uppercase">
                                Email
                            </th>
                            <th
                                scope="col"
                                class="px-3 py-3 text-xs font-medium tracking-wider text-left text-gray-300 uppercase">
                                Телефон
                            </th>
                            <th scope="col" class="relative px-6 py-3">
                                <span class="sr-only">Edit</span>
                            </th>
                        </tr>
                        </thead>
                        <tbody class="bg-gray-800 divide-y divide-gray-500">
                        @foreach($users as $user)
                            <tr class="transition-all hover:bg-gray-700">
                                <td class="px-3 py-3 whitespace-nowrap">
                                    <a
                                        class="text-sm text-blue-300 hover:text-blue-400 hover:underline"
                                        href="#">
                                        {{ $user->name }}
                                    </a>
                                </td>
                                <td class="px-3 py-3 whitespace-nowrap">
                                    <a
                                        class="text-sm text-blue-300 hover:text-blue-400 hover:underline"
                                        href="mailto:autoclick@mail.ru">
                                        {{ $user->email }}
                                    </a>
                                </td>
                                <td class="px-3 py-3 whitespace-nowrap">
                                    <a
                                        class="text-sm text-blue-300 hover:text-blue-400 hover:underline"
                                        href="tel:+79786922284">
                                        +7{{ $user->tel }}
                                    </a>
                                </td>
                                <td class="flex justify-around px-3 py-4 text-sm font-medium text-right whitespace-nowrap">
                                    <a href="{{ route('user.edit', $user) }}" class="text-indigo-600 hover:text-indigo-700">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                             viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                                        </svg>
                                    </a>
                                    <form action="#" method="POST">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="ml-2 text-red-600 hover:text-red-700">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                                 viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                      d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                            </svg>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
