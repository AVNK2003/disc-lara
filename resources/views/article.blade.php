@extends('layouts.layout')
@section('content')

<section class="mt-4 rounded-md border overflow-hidden">
    <h2 class="p-4 bg-gradient-to-b from-[#100000] via-[#300000] to-[#200000] px-6 py-4 border-b">{{ $article->title }}</h2>
    <div class="p-4 bg-gradient-to-b from-[#222222] via-black to-[#222222]">
        <div class="flex items-start bg-gray-900 rounded py-4 mb-4">
            {!! $arcticle->content !!}
        </div>
    </div>
</section>

@endsection
