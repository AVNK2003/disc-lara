@extends('layouts.layout')
@section('title', 'Организации')
@section('linksAside') <x-aside-links-admins />@endsection
@section('add-button')
    <a
        class="py-2 px-4 space-x-2 rounded-md border hover:bg-red-800"
        href="{{ route('company.create') }}">
        Добавить организацию
    </a>
@endsection
@section('content')
    <x-success-session />
    <!-- Table -->

    <div class="flex flex-col mt-6">
        <div class="overflow-x-auto">
            <div class="inline-block min-w-full py-2 align-middle px-2">
                <div class="overflow-hidden rounded-md shadow-md">
                    <table class="min-w-full overflow-x-scroll divide-y divide-gray-500">
                        <thead class="bg-black">
                        <tr>
                            <th
                                scope="col"
                                class="px-3 py-3 text-xs font-medium tracking-wider text-left text-gray-300 uppercase"
                            >
                                Организация
                            </th>
                            <th
                                scope="col"
                                class="px-3 py-2 text-xs font-medium tracking-wider text-left text-gray-300 uppercase"
                            >
                                Владелец
                            </th>
                            <th
                                scope="col"
                                class="px-3 py-3 text-xs font-medium tracking-wider text-left text-gray-300 uppercase"
                            >
                                Статус
                            </th>
                            <th scope="col" class="relative px-6 py-3">
                                <span class="sr-only">Edit</span>
                            </th>
                        </tr>
                        </thead>
                        <tbody class="bg-gray-900 divide-y divide-gray-600">

                        @foreach($companies as $company)
                            <tr class="transition-all hover:bg-gray-700">
                                <td class="px-3 py-3 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 w-10 h-10">
                                            <a href="{{route('company.show',[$company])}}">
                                                <img
                                                    class="max-w-10 max-h-10 rounded"
                                                    src="
                                                    @if($company->img)
                                                    /img/uploads/thumbnail/{{$company->img}}
                                                    @else
                                                        /img/logo.png
                                                    @endif
                                                        "
                                                    alt=""
                                                />
                                            </a>
                                        </div>
                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-300">
                                                <a href="{{route('company.show',[$company])}}">
                                                {{$company->title}}
                                                </a>
                                            </div>
                                            @foreach($company->categories as $category)
                                                @if($category)
                                                    <a
                                                        class="inline-block text-sm text-gray-400 mr-1"
                                                        href="{{route('category.show',[$category])}}"
                                                    >
                                                        {{$category->name}}
                                                    </a>
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>

                                </td>
                                <td class="px-3 py-3 whitespace-nowrap">
                                    <a href="#">
                                        <div class="text-sm text-gray-300">{{$company->user->name}}</div>
                                        <div class="text-sm text-gray-400">{{$company->user->email}}</div>
                                        <div class="text-sm text-gray-400">+7{{$company->user->tel}}</div>
                                    </a>
                                </td>
                                <td class="px-3 py-3 whitespace-nowrap">
                                    @if($company->active)
                                        <span
                                            class="inline-flex px-2 text-xs font-semibold leading-5 text-green-600 bg-green-100 rounded-full">Активно</span>
                                    @else
                                        <span
                                            class="inline-flex px-2 text-xs font-semibold leading-5 text-red-600 bg-red-100 rounded-full">Неактивно</span>
                                    @endif
                                </td>
                                <td class="flex justify-around px-3 py-4 text-sm font-medium text-right whitespace-nowrap">
                                    <a href="{{route('company.edit',[$company])}}"
                                       class="text-indigo-600 hover:text-indigo-700">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                             viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                                        </svg>
                                    </a>
                                    <form
                                        action="{{route('company.destroy',[$company])}}"
                                        method="POST"
                                        x-data x-ref="form">
                                        @method('delete')
                                        @csrf
                                        <button
                                            class="ml-2 text-red-600 hover:text-red-700"
                                            x-on:click.prevent="if (confirm('Вы точно хотите удалить {{$company->title}}?')) $refs.form.submit()" type="submit">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                                 viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
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
