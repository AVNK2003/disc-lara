@extends('layouts.layout')
@section('title', 'Главная')
@section('linksAside')<x-aside-links-admins />@endsection
@section('content')

<div class="grid grid-cols-1 gap-5 mt-6 sm:grid-cols-2 lg:grid-cols-4">
        <div
            class="p-4 transition-all border rounded-lg shadow-sm hover:bg-red-900 hover:bg-opacity-50 hover:cursor-pointer"
            x-on:click.prevent="document.location.href = '{{route('company.index')}}'">
            <div class="flex items-start justify-between">
                <div class="flex flex-col space-y-2">
                    <span class="text-gray-400">Организации</span>
                    <span class="text-lg font-semibold">{{\App\Models\Company::count()}}</span>
                </div>
                <div class="p-2 bg-gray-700 rounded-md">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                </div>
            </div>
        </div>

    <div
        class="p-4 transition-all border rounded-lg shadow-sm hover:bg-red-900 hover:bg-opacity-50 hover:cursor-pointer"
        x-on:click.prevent="document.location.href = '{{route('user.index')}}'">
        <div class="flex items-start justify-between">
            <div class="flex flex-col space-y-2">
                <span class="text-gray-400">Партнеры</span>
                <span class="text-lg font-semibold">{{\App\Models\User::count()}}</span>
            </div>
            <div class="p-2 bg-gray-700 rounded-md">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                </svg>
            </div>
        </div>
    </div>
</div>


@endsection
