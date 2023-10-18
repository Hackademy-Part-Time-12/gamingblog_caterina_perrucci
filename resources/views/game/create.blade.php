<x-layout>
    <div class="container my-5">
        <div class="row">
            <h2>Inserisci un videogame</h2>
        </div>
    </div>
    <div class="container my-5">
        <div class="row">
            <div class="col-12 col-md-8">
                <form class="p-5 shadow" action="{{route('game.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf

                    {{--@if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif--}}

                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo del videogame</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title') }}">
                        @error('title')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="producer" class="form-label">Produttore del videogame</label>
                        <input type="text" class="form-control @error('producer') is-invalid @enderror" id="producer" name="producer" value="{{ old('producer') }}">
                        @error('producer')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Prezzo del videogame</label>
                        <input type="number" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{ old('price') }}">
                        @error('price')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="cover" class="form-label">Copertina del videogame</label>
                        <input type="file" class="form-control @error('cover') is-invalid @enderror" id="cover" name="cover">
                        @error('cover')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione del videogame</label>
                        <textarea name="description" class="form-control @error('description') is-invalid @enderror" id="description" cols="30" rows="6">{{old('description')}}</textarea>
                        @error('description')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Inserisci videogame</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>