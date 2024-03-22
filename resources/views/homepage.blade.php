<x-layout>
    <header id="HeaderHomepage">
        <div>
            <h1 id="Slogan">..Il tuo acquisto <br>ad
                un click di <br> distanza...</h1>
        </div>
        <div id="SezioneRicerca">
            <h3 style="padding-bottom: 20px;  text-shadow: 4px 4px 4px black;">Inizia subito a cercare</h3>
            <div class="container-fluid">
                <div class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Cerca" aria-label="Search">
                    <button style="background-color: #1a1919;  border-radius:15px;color:white; width:90px;"
                        type="submit">Cerca</button>
                </div>
            </div>
        </div>
    </header>

    <section style= "min-height:80vh; background: linear-gradient(#030604,#1C6F29); position:relative">
        <div>
            <h1 style="position: absolute; top:280px; right: 300px; color:white; font-size:80px">..Scegli <br>tra le migliori  10 categorie</p></h1>
        </div>
        <div style="position: absolute; top:200px; right:1300px" id="carouselExampleSlidesOnly" class="carousel slide "
            data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img style="height: 600px; width:1000px" src="images/Abbigliamento/negozio di abbigliamento.jpg"
                        class="d-block w-95" alt="...">
                </div>
                <div class="carousel-item">
                    <img style="height: 600px; width:1000px" src="images/Auto/auto4.jpg" class="d-block w-95"
                        alt="...">
                </div>
                <div class="carousel-item">
                    <img style="height: 600px; width:1000px" src="images/Telefonia/iphone1.jpg" class="d-block w-90"
                        alt="...">
                </div>
                <div class="carousel-item">
                    <img style="height: 600px; width:1000px" src="images/Giardinaggio/giardinaggio.jpg"
                        class="d-block w-90" alt="...">
                </div>
                <div class="carousel-item">
                    <img style="height: 600px; width:1000px" src="images/Libri/libri.jpg" class="d-block w-90"
                        alt="...">
                </div>
            </div>
        </div>
       
    </section>
    <section style= "min-height:100vh; background-color:#1C6F29">
        <div style="display:flex; align-items:center; justify-content:center;"">
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
        <div class="row m-3">
            @foreach ($announcements as $announcement)
            <div class="card m-4" style="width: 20rem; margin:10px;">
                <div class="card-body">
                    <img style="border-radius:5px;" class="img-fluid" src="" alt="immagine">
                    <h3 class="card-title text-center">{{$announcement->title}}</h3>
                    <h5 class="card-title text-center">{{$announcement->body}}</h5>
                    <p class="card-text">{{$announcement->price}}</p>
                    <p class="card-text">{{$announcement->category->name}}</p>
                    <p class="card-text">{{$announcement->created_at}}</p>
                    <div style="display: flex">
                        <a href="" class="card-link ">
                            <button style="background: #202020" type="submit" class="btn btn-secondary">Dettagli</button>
                            <a href="" class="card-link ">
                                <button style="background: #202020" type="submit" class="btn btn-secondary">Modifica</button>
                            </a>
                            <form style="margin-left:15px;" action=""
                                method="POST">
                                @csrf
                                <button type="submit" class="btn btn-danger">More</button>
                            </form>
                        </a>
                    </div>
                </div>
            </div>
                
            @endforeach
        </div>
        

    </section>


</x-layout>
