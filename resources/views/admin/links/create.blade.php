@extends('layouts.layout')
@section('title', 'Добавление города')
@section('scriptMap')<script src="//cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>@endsection
@section('linksAside') <x-aside-links-admins />@endsection
@section('content')


    <h3 class="mt-6 mb-4 text-xl text-center">Добавление ссылки</h3>

    <x-link-create-form />

    <a
        class="block w-40 text-center mx-auto mt-4 py-2 px-4 space-x-2 rounded-md border hover:bg-red-800"
        href="{{ route('infoLink.index') }}"
    >
        Вернуться
    </a>
    <script>
        CKEDITOR.replace( 'text' );
    </script>
@endsection
