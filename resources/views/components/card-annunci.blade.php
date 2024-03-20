<div class="card" style="width: 20rem; margin:10px;">
    <div class="card-body">
        <img style="border-radius:5px;" class="img-fluid" src="" alt="immagine">
        <h3 class="card-title text-center"></h3>
        <h5 class="card-title text-center"></h5>
        <p class="card-text">{{ Str::limit($descrizione), 20 }}</p>
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