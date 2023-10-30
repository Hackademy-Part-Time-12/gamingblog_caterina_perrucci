<x-layout>
    <div class="container my-5">
        <div class="row">
            <h2>{{ $console->name }}</h2>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <img src="{{Storage::url($console->logo)}}" class="img-fluid">
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <p>Brand: {{$console->brand}}</p>
                <p>{{$console->description}}</p>
                @if (count($console->games))
                    <h4>Giochi disponibili:</h4>    
                    <ul>
                        @foreach ($console->games as $game)
                            <li>{{$game->title}}, prodotto da {{$game->producer}}</li>
                        @endforeach
                    </ul>
                @endif
                 {{-- coaleshing operator 
                 traversamento del modello --}}
                <p>Inserito da: {{$console->user->name ?? 'Utente sconosciuto'}}</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <a href="{{route('console.index')}}">Torna alla lista delle console</a>
            </div>
        </div>
    </div>
</x-layout>