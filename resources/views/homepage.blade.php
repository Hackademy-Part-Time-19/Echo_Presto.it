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
            <h1 id="Slogan">..IL TUO ACQUISTO AD UN CLICK DI DISTANZA...</h1>
        </div>
        <div id="SezioneRicerca">
            <div class="container-fluid">
                <div class="d-flex m-3" role="search">
                    <form style="margin-left: 30px;  width: 500px;" action="{{ route('announcements.search') }}"
                        method="GET" class="d-flex">
                        <input style="width: 900px" class="form-control me-2" type="search" placeholder="Cerca"
                            aria-label="Search" name="searched">
                        <button style="background-color: #1a1919;  border-radius:15px;color:white; width:90px;"
                            type="submit">Cerca</button>
                    </form>

                </div>
            </div>
        </div>
    </header>

    <section id="SezioneCategorie">
        <div>
            <h1 style=" color:white; font-size:70px">..Scegli tra le migliori categorie</p>
            </h1>
        </div>
        <div class="container" id="prod">

            <div class="row" style="margin-top:20px;">
              <div class="col-12 col-sm-4 col-md-3" style="height: 100vh;position: relative;">
                <div style="position: absolute;top:80px; left:40px;z-index: 1000">
                  <h5 style="color: white;">ABBIGLIAMENTO</h5>
                </div>
                <img
                  class="carosell" src="Images/Abbigliamento/abbigliamentoCarosello.jpg"
                  alt="" style="width: 100%;height: 100%;object-fit: cover;filter:brightness(0.8)">
              </div>
              <div class="col-12 col-sm-4 col-md-3" style="height: 100vh;padding: 0px;position: relative;">
                <div style="position: absolute;top:80px; left:40px;z-index: 1000">
                  <h5 style="color: white;">LAPTOP</h5>
                </div>
                <img
                class="carosell" src="Images/Laptop/laptop.jpg"
                  alt="" style="width: 100%;height: 100%;object-fit: cover;object-fit: cover;filter:brightness(0.8)">
              </div>
              <div class="col-12 col-sm-4 col-md-3" style="height: 100vh;position: relative;">
                <div style="position: absolute;top:80px; left:40px;z-index: 1000">
                  <h5 style="color: white;">SMARTPHONES</h5>
                </div>
                <img
                class="carosell" src="Images/Telefonia/iphone.jpg"
                  alt="" style="width: 100%;height: 100%;object-fit: cover;filter:brightness(0.8)">
              </div>
              <div class="col-12 col-sm-12 col-md-3" style="height: 100vh;padding: 0px;position: relative;">
                <div style="position: absolute;top:80px; left:40px;z-index: 1000">
                  <h5 style="color: white;">CASA</h5>
                </div>
                <img
                class="carosell" src="Images/Arredamento casa/Mobili casa/mobili1.jpg"
                  alt="" style="width: 100%;height: 100%;object-fit: cover;object-fit: cover;filter:brightness(0.8)">
              </div>
              
            </div>

    </section>
    <section style= "min-height:110vh; background-color:#1C6F29; padding:100px">
        <h2 class="text-center" style="font-size: 50px; color:white; font-weight:bold; margin-bottom:30px">Annunci più
            recenti:</h2>
        <div style="align-items:center; justify-content:center; " class="row m-2 d-flex  text-center">
            @foreach ($announcements as $announcement)

                <div class="card m-4 col-12 col-md-6" style="width: 24rem; background-color:rgb(153, 185, 152); box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px, rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -3px 0px inset;">

                    <div class="card-body">
                        <img style="border-radius:5px;" class="img-fluid" src="https://picsum.photos/400/400"
                            alt="immagine">
                        <h3 style="font-weight: 600" class="card-title text-center">{{ $announcement->title }}</h3>
                        <h5 class="card-title text-center">{{ $announcement->body }}</h5>
                        <p class="card-text">{{ $announcement->price }} €</p>
                        <p class="card-text"><a style="text-decoration: none; color:white" href=""> Categoria
                                :
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
