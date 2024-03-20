<x-layout>
    <header
        style="background: url(https://www.ecommercetimes.com/wp-content/uploads/sites/5/2022/03/online-shopping-cart.jpg); height:850px; background-repeat:no-repeat; object-fit:cover; background-position:center; background-size:cover">
        <div>
            <h1 style="position: absolute; top:200px; left: 80px; color:white; font-size:80px">..il tuo acquisto <br>ad
                un click di <br> distanza...</h1>
        </div>
        <div
            style="position: absolute; top:230px; right:260px; border: 3px solid #333; background-color: rgba(25, 142, 41, 0.668);
        color: #fff; width: 550px; height: 280px;  text-align:center; padding-top:80px; border-radius:10px; z-index:1">
            <h3 style="padding-bottom: 20px;  text-shadow: 4px 4px 4px black;">comincia subito a cercare</h3>
            <div class="container-fluid">
                <div class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Cerca" aria-label="Search">
                    <button style="background-color: #2e9940;  border-radius:15px;color:white; width:90px;"
                        type="submit">Cerca</button>
                </div>
            </div>
        </div>
    </header>

    <section style= "min-height:100vh; background: linear-gradient(#030604,#1C6F29)">
        <h2 style="text-align:center; padding-top:80px; color:white; font-size:50px">
            Scegli tra le categorie presenti
        </h2>
        <div style="padding-top:120px; padding-left:460px;" id="carouselExampleSlidesOnly" class="carousel slide "
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

        <div style="display:flex; align-items:center; justify-content:center; padding-top:80px"">
            <h3 style="color:white; font-size:30px; margin-right:40px;">Inizia la tua Ricerca</h3>
            <input style="width:380px; margin-right:30px;" class="form-control me-5 " type="search" placeholder="Cerca"
                aria-label="Search">
            <button style="margin-right:30px; background-color: #2e9940;" class="btn btn-success dropdown-toggle"
                type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Categoria
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
            <button style="margin-right:30px; background-color: #2e9940;" type="button"
                class="btn btn-success">Citta'</button>
            <button style="background-color: #0f551b;" type="button" class="btn btn-success">CERCA</button>
        </div>
        

    </section>


</x-layout>
