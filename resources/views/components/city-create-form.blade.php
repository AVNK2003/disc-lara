@include('components.validation')

<form class="form" action="{{ route('city.store') }}" class="form" method="post">
    @csrf

    <div class="form__wrap">
        <label
            class="label"
            for="name"
        >
            Город
        </label>

        <input
            class="input"
            type="text"
            placeholder="Ялта"
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
            placeholder="yalta"
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
        <button
            class="btn btn-red w-full"
            type="submit"
        >
            Добавить
        </button>
    </div>
</form>
