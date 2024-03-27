<x-layout>
    <div style="background-color: rgb(29, 111, 29)" class="container-fluid p-5  shadow mb-4">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center text-white">Elenco Annunci Categoria {{ $category->name }}</h1>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    @forelse($category->announcements as $announcement)
                        <div class="card m-4 col-12 col-md-6 row m-2  d-flex  text-center"
                        style="width: 24rem; background-color:rgb(153, 185, 152); box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px, rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -3px 0px inset; ">
                            <div class="card-body">
                                <img style="border-radius:5px; " class="img-fluid"
                                    src="https://picsum.photos/400/400"
                                    alt="immagine">
                                <h3 class="card-title text-center">{{ $announcement->title }}</h3>
                                <h5 class="card-title text-center">{{ $announcement->body }}</h5>
                                <p class="card-text">{{ $announcement->price }} €</p>
                                <p class="card-text"><a style="text-decoration: none; color:white" href="">
                                        Categoria : {{ $announcement->category->name }}</a></p>
                                <p style="color: white; background-color:#0f551b" class="card-footer">Pubblicato il:
                                    {{ $announcement->created_at->format('d/m/Y') }} <br> Autore:
                                    {{ $announcement->user->name ?? '' }}</p>
                                <div style="display: flex; align-items:center; justify-content:end">
                                    <a href="" class="card-link ">
                                        <a href="{{ route('dettaglio', compact('announcement')) }}" class="card-link ">
                                            <button style="background: #202020; width:150px" type="submit"
                                                class="btn btn-secondary">More</button>
                                        </a>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-12">
                            <p class="h1 text-center text-white">Non sono presenti annunci per questa categoria!</p>
                            <p class="h2 text-center text-white">Pubblicane uno: <a 
                                    href="{{ route('create') }}">Pubblica</a></p>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</x-layout>
