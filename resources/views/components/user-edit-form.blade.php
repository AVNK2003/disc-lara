<!-- Validation Errors -->
@include('components.validation')

<form action="{{ route('user.store') }}" class="form" method="post" enctype="multipart/form-data">
    @csrf

    <div class="form__wrap">
        <label class="label" for="name">Имя</label>
        <input class="input @error('name') is-invalid @enderror" type="text" placeholder="Как к вам обращаться" id="name" name="name" value="{{ $user->name }}" required>
    </div>

    <div class="form__wrap">
        <label class="label" for="email">Email</label>
        <input class="input @error('email') is-invalid @enderror" type="text" placeholder="mail@mail.ru" id="email" name="email" value="{{ $user->email }}" required>
    </div>

    <div class="form__wrap">
        <label class="label" for="tel">Телефон</label>
        <input class="input @error('tel') is-invalid @enderror" type="tel" placeholder="+79781234567" id="tel" name="tel" value="{{ $user->tel }}" required>
    </div>

    <div class="form__wrap">
        <button class="btn btn-red w-full" type="submit">Изменить</button>
    </div>
</form>
