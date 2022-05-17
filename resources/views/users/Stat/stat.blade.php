<x-app-layout>
    <div class="d-flex justify-content-center mb-5 mt-3">
        <h2>Statisztika</h2>
    </div>

    <div class="d-flex justify-content-center my-3">
        <div class="fs-4">Saját</div>
    </div>

    <div class="container my-3 bg-lightpurple rounded p-3">
        <br>
        <p>
            <img src="{{ asset('images/coin.png')}}" alt="Girl in a jacket">
            <span>Érmék:</span>
            {{$stats->coins}}
        </p>
        <hr>
        <p>
            <span>Pontok:</span>
            {{$stats->score}}
        </p>
        <hr>
        <p>
            <span>Legyőzőtt ellenfelek:</span>
            {{$stats->enemies}}
        </p>
    </div>
    <div class="d-flex justify-content-center my-3">
        <div class="fs-4">Csaaptod</div>
    </div>
    <div class="container my-3 bg-lightpurple rounded p-3">
        <div class="fs-5">{{$team->name}}</div>
        <br>
        <p>
            <img src="{{ asset('images/coin.png')}}" alt="Girl in a jacket">
            <span>Érmék:</span>
            {{$team->coins}}
        </p>
        <hr>
        <p>
            <span>Pontok:</span>
            {{$team->score}}
        </p>
        <hr>
        <p>
            <span>Legyőzőtt ellenfelek:</span>
            {{$team->enemies}}
        </p>
    </div>


</x-app-layout>
