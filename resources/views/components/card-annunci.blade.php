<div style="align-items:center; justify-content:center" class="row m-2  d-flex  text-center">
    <div class="card m-4 col-12 col-md-6" style="width: 24rem; background-color:rgb(153, 185, 152); box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px, rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -3px 0px inset; ">
        <div class="card-body">
            <img style="border-radius:5px; height:150px;" class="img-fluid"
                src="https://picsum.photos/400/400"
                alt="immagine">
            <h3 class="card-title text-center">{{ $title }}</h3>
            <h5 class="card-title text-center">{{ $body }}</h5>
            <p class="card-text">{{ $price }} €</p>
            <p class="card-text"><a style="text-decoration: none; color:white" href=""> Categoria : {{$category}}</a></p>
            <p style="color: white; background-color:#1C6F29" class="card-footer">Pubblicato il: {{ $created }} <br> Autore: {{$autore}}</p>
            <div style="display: flex;align-items:center; justify-content:end">
                <a href="" class="card-link ">
                        <button style="background: #202020; width:150px" type="submit"
                            class="btn btn-secondary">More</button>
                </a>
            </div>
        </div>
    </div>
</div>
