<nav class="navbar navbar-expand-lg">

    <div class="container-fluid">

        <div class="collapse navbar-collapse" id="navbarNav">

            <ul class="navbar-nav">

                <li class="nav-item">
                    <x-nav-link class="nav-link" :href="route('Bemutatkozó')" :active="request()->routeIs('Bemutatkozó')">
                        {{ __('Bemutatkozó') }}
                    </x-nav-link>
                </li>

                <li class="nav-item">
                    <x-nav-link class="nav-link" :href="route('Belépés')" :active="request()->routeIs('Belépés')">
                        {{ __('Belépés') }}
                    </x-nav-link>
                </li>

                <li class="nav-item">
                    <x-nav-link class="nav-link" :href="route('Regisztráció')" :active="request()->routeIs('Regisztráció')">
                        {{ __('Regisztráció') }}
                    </x-nav-link>
                </li>

            </ul>

        </div>

    </div>

</nav>
