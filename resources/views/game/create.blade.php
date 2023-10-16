<x-layout>
    <div class="container my-5">
        <div class="row">
            <h2>Inserisci un videogame</h2>
        </div>
    </div>
    <div class="container my-5">
        <div class="row">
            <div class="col-12 col-md-8">
                <form class="p-5 shadow" action="{{route('game.store')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo del videogame</label>
                        <input type="text" class="form-control" id="title" name="title">
                    </div>
                    <div class="mb-3">
                        <label for="producer" class="form-label">Produttore del videogame</label>
                        <input type="text" class="form-control" id="producer" name="producer">
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Prezzo del videogame</label>
                        <input type="number" class="form-control" id="price" name="price">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione del videogame</label>
                        <textarea name="description" class="form-control" id="description" cols="30" rows="6"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Inserisci videogame</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>