@include('components.validation')

<form class="w-full max-w-[640px] p-4 border border-gray-500 shadow-lg rounded-md mx-auto bg-[#222222]" action="{{ route('infoLink.store') }}" method="post">
    @csrf

    <div class="form__wrap">
        <label class="label" for="svg">Иконка</label>

        <input class="input" type="text" placeholder="Здесь должен быть код SVG иконки" id="svg" name="svg" value="{{ old('svg') }}" required>
        {{--        @error('title')

                    <span class="invalid-message">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror--}}
    </div>

    <div class="form__wrap">
        <label class="label" for="title">Название ссылки</label>

        <input class="input" type="text" placeholder="Название которое будут видеть посетители" id="title" name="title" value="{{ old('title') }}" required>
        {{--        @error('title')

                    <span class="invalid-message">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror--}}
    </div>

    <div class="form__wrap">
        <label class="label" for="slug">Адрес ссылки</label>
        <input class="input" type="text" placeholder="Адрес в строке браузера" id="slug" name="slug" value="{{ old('slug') }}" required>
        {{--        @error('password')
                    <span class="invalid-message">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror--}}
    </div>

    <div class="form__wrap">
        <label for="text">Статья</label>
        <textarea id="text" name="text" value="{{ old('text') }}"></textarea>
    </div>
    <div class="form__wrap">
        <button class="btn btn-red w-full" type="submit">Добавить</button>
    </div>
</form>
