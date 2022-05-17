<nav class="navbar navbar-expand-lg">
    <style>

    </style>
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

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Leaderboards
                    </a>
                    <ul class="dropdown-menu bg-lightpurple" aria-labelledby="navbarScrollingDropdown">
                        <li>
                            <x-nav-link class="dropdown-item text-white" :href="route('players')" :active="request()->routeIs('players')">
                                {{ __('Játékosok') }}
                            </x-nav-link>
                        </li>
                        <li>
                            <x-nav-link class="dropdown-item text-white" :href="route('teams')" :active="request()->routeIs('teams')">
                                {{ __('Csapatok') }}
                            </x-nav-link>
                        </li>
                    </ul>
                </li>

            </ul>

        </div>

    </div>

</nav>
