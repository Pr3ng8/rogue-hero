<x-guest-layout>

    <div class="container">

        <form class="p-3" method="POST" action="{{ route('createUser')}}">
            @CSRF
            <h1>Hozd létre a hősödet!</h1>

            <div class="mb-3">
                <x-label for="username" :value="__('Játékos név')" />

                <x-input id="username" type="text" name="username" :value="old('username')" required autofocus />
            </div>

            <div class="mb-3">
                <x-label for="intervallum" :value="__('Jelszó')" />

                <x-input id="password" type="password" name="password" :value="old('password')" required autofocus />
            </div>

            <div class="mb-3">
                <x-label for="password_confirmation" :value="__('Jelszó újból')" />

                <x-input id="password" type="password" name="password_confirmation" :value="old('password_confirmation')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">

                <x-button class="btn-success">
                    {{ __('Regisztráció') }}
                </x-button>
            </div>

            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />

        </form>
    </div>

</x-guest-layout>
