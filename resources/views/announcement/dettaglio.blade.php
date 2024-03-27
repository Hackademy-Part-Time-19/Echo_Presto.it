<x-layout>
    <div style="background-color: rgb(29, 111, 29)" class="container-fluid p-5  shadow mb-4">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center text-white">Dettaglio Annunci</h1>
            </div>
        </div>
    </div>
    <div style="align-items:center; justify-content:center" class="row m-2  d-flex  text-center">
     
        <div  class="card m-4 col-12 col-md-6"style="width: 40rem; background-color:rgb(153, 185, 152); box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px, rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -3px 0px inset; ">
            <div class="card-body">
                <div style="padding: 12px" id="carouselExampleIndicators" class="carousel slide">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="https://picsum.photos/900/500" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="https://picsum.photos/900/500" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="https://picsum.photos/900/500" class="d-block w-100" alt="...">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
                <h3 class="card-title text-center">{{$announcement->title}}</h3>
                <h5 class="card-title text-center">{{$announcement->body}}</h5>
                <p class="card-text">{{$announcement->price}} €</p>
                <p class="card-text"><a style="text-decoration: none; color:white" href="{{route('categoryShow',['category'=>$announcement->category])}}"> Categoria : {{$announcement->category->name}}</a></p>
                <p style="color: white; background-color:#0f551b" class="card-footer">Pubblicato il:
                  {{ $announcement->created_at->format('d/m/Y') }} <br> Autore:
                  {{ $announcement->user->name ?? '' }}</p>
                
            </div>
        </div>
    </div>
</x-layout>
