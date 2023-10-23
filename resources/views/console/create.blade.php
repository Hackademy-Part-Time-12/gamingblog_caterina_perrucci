<x-layout>
    <div class="container my-5">
        <div class="row">
            <h2>Inserisci console</h2>
        </div>
    </div>
    <div class="container my-5">
        <div class="row">
            <div class="col-12 col-md-6">
                <form action="{{route('console.store')}}" method="POST" enctype="multipart/form-data" class="p-5 shadow">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome console</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}">  
                    </div>
                    <div class="mb-3">
                        <label for="brand" class="form-label">Brand console</label>
                        <input type="text" class="form-control" id="brand" name="brand">  
                    </div>
                    <div class="mb-3">
                        <label for="logo" class="form-label">Logo console</label>
                        <input type="file" class="form-control" id="logo" name="logo">  
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione console</label>
                        <textarea name="description" id="description" cols="30" rows="5" class="form-control"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Inserisci</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>