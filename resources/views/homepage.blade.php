<x-layout>
    @if (session()->has('access.denied'))
        <div class="alert alert-danger">
            {{ session('access.denied') }}
        </div>
    @endif
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    <header id="HeaderHomepage">
        <div>
            <h1 id="Slogan">..IL TUO ACQUISTO <br>AD UN CLICK DI<br> DISTANZA...</h1>
        </div>
        <div id="SezioneRicerca">
            <h3 style="padding-bottom: 20px;  text-shadow: 4px 4px 4px black;">Inizia subito a cercare</h3>
            <div class="container-fluid">
                <div class="d-flex m-3" role="search">
                    <form style="margin-left: 30px;  width: 500px;"
                        action="{{ route('announcements.search') }}" method="GET" class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Cerca" aria-label="Search"
                            name="searched">
                        <button style="background-color: #1a1919;  border-radius:15px;color:white; width:90px;"
                            type="submit">Cerca</button>
                    </form>

                </div>
            </div>
        </div>
    </header>

    <section id="SezioneCategorie">
        <div>
            <h1 style=" color:white; font-size:70px">..Scegli tra le migliori 10 categorie</p>
            </h1>
        </div>
        <div style="" id="carouselExampleSlidesOnly" class="carousel slide " data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="StyleImgCarousel" src="images/Abbigliamento/abbigliamentoCarosello.jpg"
                        class="d-block w-95" alt="...">
                </div>
                <div class="carousel-item">
                    <img class="StyleImgCarousel" src="images/Auto/autoCarosello.jpg" class="d-block w-95"
                        alt="...">
                </div>

                <div class="carousel-item">
                    <img class="StyleImgCarousel" src="images/Telefonia/iphone1.jpg" class="d-block w-90"
                        alt="...">
                </div>

                <div class="carousel-item">
                    <img class="StyleImgCarousel" src="images/Giardinaggio/giardinaggioCarosello.jpg"
                        class="d-block w-90" alt="...">
                </div>

                <div class="carousel-item">
                    <img class="StyleImgCarousel" src="images/Libri/libriCarosello.jpg" class="d-block w-90"
                        alt="...">
                </div>
            </div>
        </div>

    </section>
    <section style= "min-height:110vh; background-color:#1C6F29; padding:100px">
        <div style="display:flex; align-items:center; justify-content:center; padding-bottom:50px "">
            <h3 style="color:white; font-size:30px; margin-right:40px;">Inizia la tua Ricerca</h3>
            <input style="width:380px; margin-right:30px;" class="form-control me-5 " type="search" placeholder="Cerca"
                aria-label="Search">
            <button style="margin-right:30px; background-color: #2e9940;" class="btn btn-success dropdown-toggle"
                type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Categoria
            </button>
            <ul class="dropdown-menu">
                @foreach ($categories as $categorie)
                    <li>
                        <a style="text-decoration: none" class="dropdown-items">{{ $categorie->name }}</a>
                    </li>
                @endforeach
            </ul>

            <button style="background-color: #0f551b;" type="button" class="btn btn-success">CERCA</button>
        </div>
        <div style="align-items:center; justify-content:center" class="row m-2  d-flex  text-center">
            @foreach ($announcements as $announcement)
                <div class="card m-4 col-12 col-md-6" style="width: 26rem; background-color:rgb(153, 185, 152) ">
                    <div class="card-body">
                        <img style="border-radius:5px; height:150px;" class="img-fluid"
                            src="https://cdn.icon-icons.com/icons2/2334/PNG/512/camera_photography_photo_image_picture_icon_142340.png"
                            alt="immagine">
                        <h3 class="card-title text-center">{{ $announcement->title }}</h3>
                        <h5 class="card-title text-center">{{ $announcement->body }}</h5>
                        <p class="card-text">{{ $announcement->price }} €</p>
                        <p class="card-text"><a style="text-decoration: none; color:white" href=""> Categoria :
                                {{ $announcement->category->name }}</a></p>
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
            @endforeach
        </div>


    </section>


</x-layout>
