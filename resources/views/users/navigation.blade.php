<nav class="navbar navbar-expand-lg">

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

                    <li class="nav-item">
                        <!-- Authentication -->
                        <form method="POST" action="{{ route('user.logout') }}">
                            @csrf

                            <x-responsive-nav-link class="nav-link btn btn-danger" :href="route('user.logout')"
                                                   onclick="event.preventDefault();
                                        this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-responsive-nav-link>
                        </form>
                    </li>
                @endif
            </ul>

        </div>

    </div>

</nav>
