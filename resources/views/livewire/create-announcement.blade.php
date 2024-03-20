<div>
    <form wire:submit.prevent='store'>
        @csrf
        <h1>Crea il tuo Annuncio </h1>
        <div class="mb-3">
          <label for="title" class="form-label">Titolo Annuncio</label>
          <input wire:model='title' type="text" class="form-control" id="title" aria-describedby="emailHelp" name="title">
        </div>
        <div class="mb-3">
          <label for="body" class="form-label">Descrizione</label>
          <input wire:model='body'  type="text" class="form-control" id="body" name="body">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input wire:model='price'  type="number" class="form-control" id="price" name="price">
          </div>
        <button type="submit" class="btn btn-primary">Crea</button>
      </form>
</div>
