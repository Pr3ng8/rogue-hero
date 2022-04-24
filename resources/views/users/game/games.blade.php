<x-app-layout>
    <div class="d-flex justify-content-center my-3">
        <h2>Játék eredmények</h2>
    </div>

    <div class="container my-2 bg-lightpurple rounded">
        <table class="table table-borderless">

            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Score</th>
                <th scope="col">Kills</th>
                <th scope="col">Coins</th>
                <th scope="col">Idő</th>
            </tr>
            </thead>

            <tbody>

                @foreach($games as $game)

                <tr>
                    <th scope="row">{{$loop->index}}}</th>
                    <td>{{$game->score}}</td>
                    <td>{{$game->enemies}}</td>
                    <td>{{$game->coins}}</td>
                    <td>{{$game->created_at}}</td>
                </tr>

                @endforeach

            </tbody>

        </table>

    </div>

</x-app-layout>
