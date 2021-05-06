@extends('layouts.layout')
@section('title', '- Добавление организации')
@section('linksAside') <x-aside-links-admins />@endsection
@section('content')


    <h3 class="mt-6 mb-4 text-xl text-center">Добавление организации</h3>

    @include('components.company-create-form')

    <a
        class="block w-40 text-center mx-auto mt-4 py-2 px-4 space-x-2 rounded-md border hover:bg-red-800"
        href="{{ route('company.index') }}"
    >
        Вернуться
    </a>
@endsection
