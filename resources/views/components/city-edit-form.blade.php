@include('components.validation')

<form class="form" action="{{ route('city.update', [$city]) }}" class="form" method="post">
    @method('PUT')
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
            value="{{ $city['name'] }}"
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
            value="{{ $city['eng'] }}"
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
            Изменить
        </button>
    </div>
</form>
