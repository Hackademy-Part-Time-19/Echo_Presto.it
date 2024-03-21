<div style="min-height: 70vh">

    <form wire.submit.prevent='store'>
        @csrf
        <h1 class="mb-4">Crea il tuo Annuncio </h1>

        @if (session()->has('message'))
            <div class="alert alert-success flex flex-row justify-center my-2">
                {{ session('message') }}
            </div>
        @endif
            <div class="mb-3">
                <label for="title" class="form-label">Titolo Annuncio</label>
                <input wire:model.live='title' type="text" class="form-control" id="title"
                    aria-describedby="emailHelp" name="title">
                @error('title')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="body" class="form-label">Descrizione</label>
                <input wire:model.live='body' type="text" class="form-control" id="body" name="body">
                @error('body') <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Prezzo</label>
                <input wire:model.live='price' type="number" class="form-control" id="price" name="price">
                @error('price') 
                <span class="text-danger">{{ $message }}</span> 
                @enderror
            </div>
            <div class="mb-3">
                <label for="category" class="form-label">Categoria</label>
                <select wire:model.defer='category' class="form-select" id="category" name="category">
                    <option value="">Scegli la categoria</option>
                   @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
                @error('category') 
                <span class="text-danger">{{ $message }}</span> 
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Crea</button>
    </form>
</div>
