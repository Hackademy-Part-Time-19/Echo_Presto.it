<x-layout>
    <div style="background-color:#2414da" class="container-fluid p-5 p-5 shadow mb-4">
        <div class="row">
            <div style="" class="col-12 text-light p-5">
                <h1 class="text-center text-white">
                    {{ $announcement_to_check ? 'Hai un annuncio da controllare' : 'Non ci sono annunci da controllare' }}
                </h1>
            </div>
        </div>
    </div>
    @if ($announcement_to_check)
        <div class="container">
            <div class="row">
                <div style="display:flex; align-items:center; justify-content:center;"" class="col-12 d-flex">
                    <div class="card m-4 col-12 col-md-6 row m-2  d-flex  text-center" style="width: 50rem; ">
                        <div class="card-body">
                            <div id="showCarousel" class="carousel slide" data-bs-slide="carousel">
                                @if ($announcement_to_check->images)
                                <div class="carousel-inner">
                                    @foreach($announcement_to_check->images as $image)
                                    <div class="carousel-item @if($loop->first) active @endif">
                                    <img src="{{Storage::url($image->path)}}" class="img-fluid p-3 rounded" alt="">
                                    </div>
                                    @endforeach
                                </div>
                                @else
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="https://picsum.photos/500/400" class="img-fluid p-3 rounded" alt="">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="https://picsum.photos/500/400" class="img-fluid p-3 rounded" alt="">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="https://picsum.photos/500/400" class="img-fluid p-3 rounded" alt="">
                                    </div>
                                </div>
                                @endif
                                <button class="carousel-control-prev" type="button" data-bs-target="#shoeCarousel"
                                    data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#shoeCarousel"
                                    data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                            
                            <h3 class="card-title text-center">{{ $announcement_to_check->title }}</h3>
                            <h5 class="card-title text-center">{{ $announcement_to_check->body }}</h5>
                            <p class="card-text">{{ $announcement_to_check->price }} €</p>
                            <p class="card-text"><a style="text-decoration: none; color:black;" href="{{route('categoryShow',['category'=>$announcement_to_check->category])}}">
                                    Categoria : {{ $announcement_to_check->category->name }}</a></p>
                            <p style="color: white; background-color:#6CA7DD" class="card-footer">Pubblicato il:
                                {{ $announcement_to_check->created_at->format('d/m/Y') }} <br> Autore:
                                {{ $announcement_to_check->user->name ?? '' }}</p>
                            <div style="display: flex; align-items:center; justify-content:end">
                                <a href="" class="card-link ">
                                    <a href="" class="card-link ">
                                        <button style="background: #2414da; width:150px" type="submit"
                                            class="btn btn-secondary">More</button>
                                    </a>
                                </a>
                            </div>
                            <div style="display:flex; align-items:center; justify-content:center;">
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <form
                                            action="{{ route('revisor.accept_announcement', ['announcement' => $announcement_to_check]) }}"
                                            method="POST">
                                            @csrf
                                            @method('PATCH')
                                            <button type="submit" class="btn btn-success shadow">Accetta</button>
                                        </form>
                                    </div>
                                    <div class="col-12 col-md-6 text-end">
                                        <form
                                            action="{{ route('revisor.reject_announcement', ['announcement' => $announcement_to_check]) }}"
                                            method="POST">
                                            @csrf
                                            @method('PATCH')
                                            <button style="margin-left: 50px" type="submit" class="btn btn-danger shadow">Rifiuta</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    @endif
</x-layout>
