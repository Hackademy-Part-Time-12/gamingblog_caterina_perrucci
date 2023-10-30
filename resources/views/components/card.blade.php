<div class="card" style="width: 18rem;">
    <img src="{{Storage::url($game->cover)}}" class="card-img-top" alt="{{$game->title}}">
    <div class="card-body">
        <h5 class="card-title">{{$game->title}}</h5>
        <p class="card-text">{{$game->producer}}</p>
        <p class="card-text">{{$game->description}}</p>
        <h6 class="fw-bold">Console:</h6>
        <ul>
            @foreach ($game->consoles as $console)
                <li>{{ $console->name }}</li>
            @endforeach
        </ul>
        <p class="card-text">{{$game->description}}</p>
        <p class="card-text">Inserito da: {{$game->user->name}}</p>
        <p class="card-text">Prezzo: {{$game->price}}</p>
    </div>
</div>