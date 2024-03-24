<div
    style="min-height: 70vh; display:flex; align-items:center;justify-content:center; background: linear-gradient(#030604,#1C6F29);">
    <div style="flex:3; ">
        <img style=" width:100%; height:100%;padding:40px"
            src="https://images.prismic.io/axerve/9fddf851-bee8-41d9-a366-7fb7493ee07a_Foto%20Ecommerce%20-%20Blog.jpg?ixlib=gatsbyFP&auto=compress%2Cformat&fit=max"
            alt="">
    </div>
    <div style="flex:3;padding:40px">
        <h1 style="color: white" class="mb-4">Crea il tuo Annuncio </h1>

        @if (session()->has('message'))
            <div class="alert alert-success flex flex-row justify-center my-2">
                {{ session('message') }}
            </div>
        @endif

        @if (session()->has('error'))
            <h4 class="alert alert-danger">{{ session('error') }}</h4>
        @endif

        <form style="color: white;text-shadow:2px 2px 2px black;" wire.submit.prevent='store'>
            @csrf
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
                @error('body')
                    <span class="text-danger">{{ $message }}</span>
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
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
                @error('category')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label style="color:white; text-shadow:2px 2px 2px black;" for="image"
                    class="form-label">Image</label>
                <input type="file" name="image" class="form-control" id="image"
                    value="{{ old('description') }}">
                @error('image')
                    <div><span class="text-danger">{{ $message }}</span></div>
                @enderror
            </div>
            <button style="background-color: #389147; font-weight:bold" type="submit" class="btn btn-success"
                wire:click.prevent="store">Inserisci</button>
        </form>
    </div>
</div>
