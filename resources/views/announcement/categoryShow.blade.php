<x-layout>
    <div style="background-color: rgb(29, 111, 29)"  class="container-fluid p-5  shadow mb-4">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center text-white">Elenco Annunci Categoria {{$category->name}}</h1>
            </div>
        </div>
    </div>

  
    <div class="row">
        @forelse($category->announcements as $announcement)
            <div class="col-md-4 mb-3">
                <x-card-annunci
                    :title="$announcement->title"
                    :body="$announcement->body"
                    :price="$announcement->price"
                    :category="$announcement->category->name"
                    :created="$announcement->created_at"
                    :autore="$announcement->user->name ?? ''"
                />
            </div>
        @empty
        <div class="col-12">
            <p class="h1 text-center text-white">Non sono presenti annunci per questa categoria!</p>
            <p class="h2 text-center text-white">Pubblicane uno: <a s href="{{route('create')}}">Pubblica</a></p>
        </div>
        @endforelse
    </div>
</x-layout>
