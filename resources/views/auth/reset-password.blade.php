@include('components.validation')

<form class="form" action="{{ route('login') }}" class="form" method="post" enctype="multipart/form-data">
    @csrf

    <div class="form__wrap">
        <label class="label" for="email">Телефон</label>
        <input class="input @error('tel') is-invalid @enderror" type="email" placeholder="+79781234567" id="email" name="email" value="{{ old('email') }}" required>
    </div>
    <div class="form__wrap">
        <button class="btn btn-red w-full"
                type="submit">
            Войти
        </button>
    </div>

    <div class="form__footer">
        <div class="w-1/2 text-center">
            <a
                class="link"
                href="{{ route('register') }}">
                Регистрация
            </a>
        </div>
        <div class="w-1/2 text-center">
            <a
                class="link"
                href="{{ route('login') }}">
                Страница входа
            </a>
        </div>
    </div>
</form>
{{--

<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <!-- Password Reset Token -->
            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                    type="password"
                                    name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Reset Password') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
--}}
