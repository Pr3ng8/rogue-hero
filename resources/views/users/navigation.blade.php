<nav class="navbar navbar-expand-lg">

    <style>
        .dropdown-item:hover {
            color: #f7fafc;
            text-shadow: 0px 6px 0px #CE5937;
            transform: scale(1.1);
            background-color: inherit;
        }
    </style>
    <div class="container-fluid">

        @if(Auth::user())
        <a class="navbar-brand" >{{ Auth::user()->username }}</a>
        @endif

        <div class="collapse navbar-collapse" id="navbarNav">

            <ul class="navbar-nav">

                <li class="nav-item">
                    <x-nav-link class="nav-link" :href="route('user.Kezdőlap')" :active="request()->routeIs('Kezdőlap')">
                        {{ __('Kezdőlap') }}
                    </x-nav-link>
                </li>

                @if(Auth::user())

                    <li class="nav-item">
                        <x-nav-link class="nav-link" :href="route('user.Játékok')" :active="request()->routeIs('Játékok')">
                            {{ __('Játékok') }}
                        </x-nav-link>
                    </li>

                    <li class="nav-item">
                        <x-nav-link class="nav-link" :href="route('user.Statok')" :active="request()->routeIs('Statok')">
                            {{ __('Statok') }}
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

                    <li class="nav-item">
                        <!-- Authentication -->
                        <form method="POST" action="{{ route('user.logout') }}">
                            @csrf

                            <x-responsive-nav-link class="nav-link btn btn-danger" :href="route('user.logout')"
                                                   onclick="event.preventDefault();
                                        this.closest('form').submit();">
                                {{ __('Kilépés') }}
                            </x-responsive-nav-link>
                        </form>
                    </li>
                @endif
            </ul>

        </div>

    </div>

</nav>
