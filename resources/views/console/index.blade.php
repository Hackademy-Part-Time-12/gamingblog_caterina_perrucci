<x-layout>
    @if (session('consoleCreated'))
        <div class="alert alert-success">
            {{ session('consoleCreated') }}
        </div>
    @elseif (session('consoleUpdated'))
        <div class="alert alert-success">
            {{ session('consoleUpdated') }}
        </div>
        @elseif (session('consoleDeleted'))
        <div class="alert alert-success">
            {{ session('consoleDeleted') }}
        </div>
    @endif
    <div class="container my-5">
        <div class="row">
            <h2>Tutte le console</h2>
        </div>
    </div>
    <div class="container my-5">
        <div class="row">
            @if(count($consoles) > 0)
                @foreach ($consoles as $console)
                    <div class="col 12 col-md-4">
                        <x-console-card :console="$console" />
                    </div>
                @endforeach
            @else
                <div class="col-12">
                    <h3>Non sono ancora state inserite console.</h3>
                    <a href="{{route('console.create')}}">Inseriscine una.</a>
                </div>
            @endif
        </div>
    </div>
</x-layout>