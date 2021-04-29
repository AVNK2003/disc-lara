<form action="{{ route('company.update',[$company]) }}" class="form" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="form__wrap">
        <label
            class="label"
            for="org"
        >
            Форма организации
        </label>
        <select
            class="input"
            name="org"
            id="org"
        >
            <option value="ИП" @if($company->org=='ИП') selected @endif>ИП</option>
            <option value="ООО" @if($company->org=='ООО') selected @endif>ООО</option>
            <option value="Самозанятый" @if($company->org=='Самозанятый') selected @endif>Самозанятый</option>
        </select>
    </div>

    <div class="form__wrap">
        <label for="title">Название организации</label>
        <input
            class="input"
            type="text"
            placeholder="Название организации"
            id="title"
            name="title"
            value="{{$company->title}}"
            required
        >

    </div>

    @cannot('admin')
        <input
            type="hidden"
            name="user_id"
            value="{{$company->user_id}}"
        >
    @endcannot

    @can('admin')
        <div class="form__wrap">
            <label
                class="label"
                for="user_id"
            >
                Владелец организации
            </label>
            <select
                class="input"
                name="user_id"
                id="user_id"
            >
                @foreach(\App\Models\User::all(['id', 'name', 'tel']) as $user)
                    <option
                        value="{{ $user['id'] }}"
                        @if($company->user_id == $user['id'])
                        selected
                        @endif
                    >
                        {{ $user['tel'] }} - {{ $user['name'] }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form__wrap">
            <label for="priority">Приоритет в каталоге</label>
            <input
                class="input"
                type="number"
                placeholder="Приоритет в каталоге"
                id="priority"
                name="priority"
                value="{{$company->priority}}"
            >
        </div>
    @endcan

    <div class="form__wrap">
        <label
            class="label"
            for="address"
        >
            Адрес организации
        </label>
        <input
            class="input"
            type="text"
            placeholder="Адрес организации"
            id="address"
            name="address"
            value="{{$company->address}}"
        >
    </div>

    <div class="form__wrap">
        <label
            class="label"
            for="time-work"
        >
            Время работы
        </label>
        <input
            class="input"
            type="text"
            placeholder="Время работы"
            id="time-work"
            name="working_hours"
            value="{{$company->working_hours}}"
        >
    </div>

    <div class="form__wrap">
        <label
            class="label"
            for="phone">Телефон</label>
        <input
            class="input"
            type="text"
            placeholder="Телефон"
            id="phone"
            name="tel"
            value="{{$company->tel}}"
        >
    </div>

    <div class="form__wrap">
        <label
            class="label"
            for="site"
        >
            Сайт
        </label>
        <input
            class="input"
            type="text"
            placeholder="Сайт"
            id="site"
            name="site"
            value="{{$company->site}}"
        >
    </div>

    <div class="flex w-full wrap mb-4">
        <div class="w-1/2 mb-2">
            <label class="label" for="instagram">Instagram</label>
            <input
                class="input mr-1"
                type="url"
                placeholder="Instagram"
                id="instagram"
                name="instagram"
                value="{{$company->instagram}}"
                pattern="https:\/\/(www.)?instagram.com\/[\D\d]*"
            >
        </div>
        <div class="w-1/2">
            <label class="label ml-1" for="vk">VK</label>
            <input
                class="input ml-1"
                type="url"
                placeholder="VK"
                id="vk"
                name="vk"
                value="{{$company->vk}}"
                pattern="https:\/\/vk.com\/[\D\d]*"
            >
        </div>
        <div class="group-form">
            <label
                class="label"
                for="facebook"
            >
                Facebook
            </label>
            <input
                class="input mr-1"
                type="url" placeholder="Facebook" id="facebook" name="facebook"
                pattern="https:\/\/www.facebook.com\/[\D\d]*">
            <label
                class="label ml-1"
                for="youtube"
            >
                YouTube
            </label>
            <input
                class="input ml-1"
                type="url"
                placeholder="YouTube"
                id="youtube"
                name="youtube"
                value="{{$company->youtube}}"
                pattern="https:\/\/www.youtube.com\/[\D\d]*"
            >
        </div>
    </div>

    <div class="form__wrap">
        <label
            class="label"
            for="discount"
        >
            Размер скидки
        </label>
        <input
            class="input"
            type="text"
            placeholder="Размер скидки"
            id="discount"
            name="discount"
            value="{{$company->discount}}"
            required
        >
    </div>

    <div class="form__wrap">
        <label
            class="label"
            for="select-city"
        >
            Город
        </label>
        <div class="flex wrap border rounded-md py-2 px-4" id="select-city">

            <div class="group-form">
                @foreach(\App\Models\City::all()->sortBy('name') as $city)
                    <div class="form-check form-check-inline">
                        <input
                            class=""
                            type="checkbox"
                            id="{{ $city->eng }}"
                            name="cities[]"
                            value="{{ $city->id }}"

                            @foreach($company->cities as $comcity)
                                @if($comcity->id == $city->id) checked @endif
                            @endforeach
                        >
                        <label class="form-check-label" for="{{ $city->eng }}">{{ $city->name }}</label>
                    </div>
                @endforeach

            </div>
        </div>
    </div>

    <div class="form__wrap">
        <label for="coordinates">Координаты (широта, долгота)</label>
        <input
            class="input"
            type="text"
            placeholder="Координаты на карте"
            id="coordinates"
            name="coordinates"
            value="{{$company->coordinates}}"
        >
        <span>Координаты необходимо указывать через запятую (44.49847828, 34.16926441). Получить их можно например <a
                href="http://dimik.github.io/ymaps/examples/location-tool/" target="_blank">здесь</a></span>
    </div>

    <div class="form__wrap">
        <label class="label" for="description">Краткое описание услуг</label>
        <textarea
            class="input"
            placeholder="Краткое описание"
            id="description"
            name="description"
            rows="4"
        >{{$company->description}}</textarea>
    </div>

    <div class="form__wrap">

        <label class="label" for="category">Категория</label>
        <div class="flex wrap border rounded-md py-2 px-4" id="category">

            <div class="group-form">

                @foreach(\App\Models\Category::all(['id', 'name', 'eng'])->sortBy('name') as $category)
                    <div class="form-check form-check-inline">
                        <input
                            class="form-check-input"
                            type="checkbox"
                            id="{{ $category->eng }}"
                            name="categories[]"
                            value="{{ $category->id }}"
                            @foreach($company->categories as $comcategory)
                            @if($comcategory->id == $category->id) checked @endif
                            @endforeach
                        >
                        <label class="form-check-label" for="{{ $category->eng }}">{{ $category->name }}</label>
                    </div>
                @endforeach
            </div>
        </div>

    </div>

    <div class="form__wrap">
        <label class="label" for="image">Логотип (размер файла не более 1мб)</label>
        <input class="form-select form-select-sm rounded-md" placeholder="Логотип" type="file" id="image"
               name="img"
               accept="image/gif, image/jpeg, image/png">
    </div>

    <div class="form__wrap">
        <div class="form-control form-check">

            <label class="label" for="select-city">Соглашение</label>
            <div class="form-check form-check-inline">

                <input type="checkbox" name="agree" class="form-check-input" id="agree" required="">
                <label class="form-check-label" for="agree">Согласен с условиями <a
                        href="https://yadi.sk/i/Vj6nEeXNJvozHg">Партнёрского соглашения</a></label>
            </div>
        </div>
    </div>

    <div class="modal-footer text-right">
        <button class="btn btn-red" type="submit">Отправить</button>
    </div>
</form>
