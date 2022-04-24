<x-app-layout>
    <div class="d-flex justify-content-center my-3">
        <h2>Statisztika</h2>
    </div>

    <div class="container my-3 bg-lightpurple rounded">
        <fieldset>
            <legend>Eddigi gyüjtött érmék:</legend>
            <p>{{$stats->coins}}</p>
        </fieldset>
    </div>

    <div class="container my-3 bg-lightpurple rounded">
        <fieldset>
            <legend>Eddigi pontok:</legend>
            <p>{{$stats->score}}</p>
        </fieldset>
    </div>

    <div class="container my-3 bg-lightpurple rounded">
        <fieldset>
            <legend>Legyőzőtt ellenfelek száma :</legend>
            <p>{{$stats->enemies}}</p>
        </fieldset>
    </div>

</x-app-layout>
