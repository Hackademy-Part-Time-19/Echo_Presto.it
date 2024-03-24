<x-layout>
    <div style="background-color: rgb(29, 111, 29)" class="container-fluid p-5 p-5 shadow mb-4">
        <div  class="row">
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
                    <div class="card m-4 col-12 col-md-6 row m-2  d-flex  text-center"
                        style="width: 50rem; background-color:rgb(153, 185, 152) ">
                        <div class="card-body">
                            <img style="border-radius:5px; height:150px;" class="img-fluid"
                                src="https://cdn.icon-icons.com/icons2/2334/PNG/512/camera_photography_photo_image_picture_icon_142340.png"
                                alt="immagine">
                            <h3 class="card-title text-center">{{ $announcement_to_check->title }}</h3>
                            <h5 class="card-title text-center">{{ $announcement_to_check->body }}</h5>
                            <p class="card-text">{{ $announcement_to_check->price }} €</p>
                            <p class="card-text"><a style="text-decoration: none; color:white" href="">
                                    Categoria : {{ $announcement_to_check->category->name }}</a></p>
                            <p style="color: white; background-color:#0f551b" class="card-footer">Pubblicato il:
                                {{ $announcement_to_check->created_at->format('d/m/Y') }} <br> Autore:
                                {{ $announcement_to_check->user->name ?? '' }}</p>
                            <div style="display: flex; align-items:center; justify-content:end">
                                <a href="" class="card-link ">
                                    <a href="" class="card-link ">
                                        <button style="background: #202020; width:150px" type="submit"
                                            class="btn btn-secondary">More</button>
                                    </a>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div style="display: flex;" class="row">
                <div  class="col-12 col-md-6">
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
                        <button type="submit" class="btn btn-danger shadow">Rifiuta</button>
                    </form>
                </div>
            </div>
        </div>
    @endif
</x-layout>
