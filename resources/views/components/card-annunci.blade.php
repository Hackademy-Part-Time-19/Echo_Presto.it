<div style="align-items:center; justify-content:center" class="row m-2  d-flex  text-center">
    <div class="card m-4 col-12 col-md-6" style="width: 26rem; background-color:rgb(153, 185, 152) ">
        <div class="card-body">
            <img style="border-radius:5px; height:150px;" class="img-fluid"
                src="https://cdn.icon-icons.com/icons2/2334/PNG/512/camera_photography_photo_image_picture_icon_142340.png"
                alt="immagine">
            <h3 class="card-title text-center">{{ $title }}</h3>
            <h5 class="card-title text-center">{{ $body }}</h5>
            <p class="card-text">{{ $price }} €</p>
            <p class="card-text"><a style="text-decoration: none; color:white" href=""> Categoria : {{$category}}</a></p>
            <p style="color: white; background-color:#1C6F29" class="card-footer">{{ $created }} - Autore: {{$autore}}</p>
            <div style="display: flex;align-items:center; justify-content:end">
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
