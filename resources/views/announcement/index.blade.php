<x-layout>
    <div style="background-color: #151515" class="container-fluid p-5  shadow mb-4">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center text-white">Elenco Annunci</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div style="align-items:center; justify-content:center; " class="row m-2 d-flex  text-center">
                        @forelse ($announcements as $announcement)
                            <div class="card m-4 col-12 col-md-6"style="width: 24rem;  box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px, rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -3px 0px inset; " ">
                    <div class="card-body">
                    <img style="border-radius:5px; " class="img-fluid" src="https://picsum.photos/400/400" alt="immagine">
                    <h3 class="card-title text-center">{{ $announcement->title }}</h3>
                    <h5 class="card-title text-center">{{ $announcement->body }}</h5>
                    <p class="card-text">{{ $announcement->price }} €</p>
                    <p class="card-text"><a style="text-decoration: none; color:black" href="{{route('categoryShow',['category'=>$announcement->category])}}""> Categoria : {{ $announcement->category->name }}</a></p>
                    <p style="color: white; background-color:#6CA7DD" class="card-footer">Pubblicato il: {{ $announcement->created_at->format('d/m/Y') }} <br> Autore: {{ $announcement->user->name ?? '' }}</p>
                    <div style="display: flex; align-items:center; justify-content:end">
                        <a href="" class="card-link ">
                            <a href="{{ route('dettaglio', compact('announcement')) }}" class="card-link ">
                                <button style="background: #2414da; width:150px" type="submit" class="btn btn-secondary">More</button>
                            </a>
                        </a>
                    </div>
                </div>
            </div>
        @empty
             <div class="col-12">
             <div class="alert alert-warning py-3 shadow">
              <p class="lead">Non è presente nessun annuncio</p>
              <p>Se vuoi pubblicarne uno clicca qui: <a href="{{route('create')}}" style="color: #2414da">Pubblica</a></p>
           </div>
        </div>
 @endforelse
                                {{ $announcements->links() }}
                            </div>
                    </div>
                </div>
            </div>

</x-layout>
