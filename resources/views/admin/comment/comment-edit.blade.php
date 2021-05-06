@extends('layouts.layout')
@section('title', '- Редактирование комментария')
@section('linksAside') <x-aside-links-admins />@endsection
@section('content')


    <h1 class="mt-6 mb-4 text-xl text-center">Редактирование комментария</h1>

    <a
        class="block w-40 text-center mx-auto mt-4 py-2 px-4 space-x-2 rounded-md border hover:bg-red-800"
        href="{{ route('city.index') }}"
    >
        Вернуться
    </a>
@endsection
