<x-guest-layout>

    <x-auth-card>

        <form class="p-4 login" method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
            <div class="mb-3">
                <x-label for="username" :value="__('Felhasználónév')" />

                <x-input id="username" class="block mt-1 w-full" type="username" name="username" :value="old('username')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mb-3">
                <x-label for="jelszo" :value="__('Jelszo')" />

                <x-input id="jelszo" class="block mt-1 w-full"
                         type="password"
                         name="password"
                         required autocomplete="current-password" />
            </div>

            <div class="mb-3 d-flex flex-row-reverse">

                <x-button class="ml-3">
                    {{ __('Belépés') }}
                </x-button>
            </div>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />
        </form>

    </x-auth-card>

</x-guest-layout>
