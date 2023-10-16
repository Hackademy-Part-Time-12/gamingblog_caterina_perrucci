<x-layout>
    <div class="container my-5">
        <div class="row">
            <h2>Tutti i videogames</h2>
        </div>
    </div>
    <div class="container my-5">
        <div class="row">
            @foreach ($games as $game)
                <div class="col-12 col-md-3 my-3">
                    <x-card :game="$game" />
                </div>
            @endforeach
        </div>
    </div>
</x-layout>