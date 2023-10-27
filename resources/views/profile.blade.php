<x-layout>
    <div class="container my-5">
        <div class="row">
            <h2>Dashboard</h2>
        </div>
    </div>
    @if (count(Auth::user()->consoles) > 0)
        <div class="container my-5">
            <div class="row">
                <h2>Tutte le tue console</h2>
            </div>
        </div>
        <div class="container my-5">
            <div class="row">
                @foreach (Auth::user()->consoles as $console)
                    <div class="col-12 col-md-4">
                        <x-console-card :console="$console" />
                    </div>
                @endforeach
            </div>
        </div>
    @endif
    @if (Auth::user()->games->isNotEmpty())
        <div class="container my-5">
            <div class="row">
                <h2>Tutti i tuoi videogame</h2>
            </div>
        </div>
        <div class="container my-5">
            <div class="row">
                @foreach (Auth::user()->games as $game)
                    <div class="col-12 col-md-4">
                        <x-card :game="$game" />
                    </div>
                @endforeach
            </div>
        </div>
    @endif
</x-layout>