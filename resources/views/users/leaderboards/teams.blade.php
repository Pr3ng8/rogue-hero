<x-app-layout>

    <div class="d-flex justify-content-center my-3">
        <div class="welcome-text w-75">
            <div class="d-flex align-items-center flex-column">
                <h3>Csapatok LeaderBoard</h3>
            </div>
            <div class="d-flex align-items-center flex-column teams">
                @foreach($teams as $team)
                    @if($loop->index == 0)
                        <div class="card my-3 w-100 first">
                            <div class="card-body fs-2 text-dark text-center">
                               {{ $team->name  }}  Score: {{ $team->score }}
                            </div>
                        </div>
                    @elseif($loop->index == 1)
                        <div class="card my-3 w-75 second text-center">
                            <div class="card-body fs-3 text-dark">
                                {{ $team->name  }}  Score: {{ $team->score }}
                            </div>
                        </div>
                    @elseif($loop->index == 2)
                        <div class="card my-3 w-50 third text-center">
                            <div class="card-body fs-4 text-dark">
                                {{ $team->name  }}  Score: {{ $team->score }}
                            </div>
                        </div>
                    @else
                        <div class="card my-3 w-25 text-center">
                            <div class="card-body fs-6 text-dark">
                                {{ $team->name  }} <br> Score: {{ $team->score }}
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>

        </div>
    </div>

</x-app-layout>

