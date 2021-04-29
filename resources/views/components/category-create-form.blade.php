@include('components.validation')

<form class="form" action="{{ route('category.store') }}" method="post">
    @csrf

    <div class="form__wrap">
        <label
            class="label"
            for="name"
        >
            Категория
        </label>

        <input
            class="input"
            type="text"
            placeholder="Название"
            id="name"
            name="name"
            value="{{ old('name') }}"
            required
        >
        {{--        @error('tel')

                    <span class="invalid-message">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror--}}
    </div>

    <div class="form__wrap">
        <label
            class="label"
            for="eng"
        >
            Латиница
        </label>
        <input
            class="input"
            type="text"
            placeholder="example"
            id="eng"
            name="eng"
            value="{{ old('eng') }}"
            required
        >
        {{--        @error('password')
                    <span class="invalid-message">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror--}}
    </div>

    <div class="form__wrap">
        <label
            class="label"
            for="color"
        >
            Цвет
        </label>
        <input
            class="p-1 h-10 w-14 rounded-md"
            type="color"
            id="color"
            name="color"
            value="#FF0000"
            required
        >
        {{--        @error('password')
                    <span class="invalid-message">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror--}}
    </div>
    <div class="form__wrap">
        <button
            class="btn btn-red w-full"
            type="submit"
        >
            Добавить
        </button>
    </div>
</form>
