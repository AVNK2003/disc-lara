@include('components.validation')

<form class="w-full max-w-[640px] p-4 border border-gray-500 shadow-lg rounded-md mx-auto bg-[#222222]" action="{{ route('infoLink.update', [$link]) }}" method="post">
    @method('PUT')
    @csrf

    <div class="form__wrap">
        <label class="label" for="svg">Иконка</label>

        <input class="input" type="text" placeholder="Здесь должен быть код SVG иконки" id="svg" name="svg" value="{{ old('svg') ?? $link->svg }}" required>
        {{--        @error('title')

                    <span class="invalid-message">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror--}}
    </div>

    <div class="form__wrap">
        <label class="label" for="title">Название ссылки</label>

        <input class="input" type="text" placeholder="Название которое будут видеть посетители" id="title" name="title" value="{{ old('title') ?? $link->title }}" required>
        {{--        @error('title')

                    <span class="invalid-message">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror--}}
    </div>

    <div class="form__wrap">
        <label class="label" for="slug">Адрес ссылки</label>
        <input class="input" type="text" placeholder="Адрес в строке браузера" id="slug" name="slug" value="{{ old('slug') ?? $link->slug }}" required>
        {{--        @error('password')
                    <span class="invalid-message">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror--}}
    </div>

    <div class="form__wrap">
        <label for="text">Статья</label>
        <textarea id="text" name="text">{{ old('text') ?? $link->text }}</textarea>
    </div>
    <div class="form__wrap">
        <button class="btn btn-red w-full" type="submit">Изменить</button>
    </div>
</form>
