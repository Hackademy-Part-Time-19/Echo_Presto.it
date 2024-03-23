<x-layout>
    <div class="row m-4  d-flex  text-center">
        <h1 class="text-center text-white ">Elenco annunci</h1></div>
    
    <div style="align-items:center; justify-content:center" class="row m-2  d-flex  text-center">
     
        <div  class="card m-4 col-12 col-md-6" style="width: 26rem; background-color:rgb(153, 185, 152) ">
            <div class="card-body">
                <img style="border-radius:5px; height:150px;" class="img-fluid" src="https://cdn.icon-icons.com/icons2/2334/PNG/512/camera_photography_photo_image_picture_icon_142340.png" alt="immagine">
                <h3 class="card-title text-center">{{$announcement->title}}</h3>
                <h5 class="card-title text-center">{{$announcement->body}}</h5>
                <p class="card-text">{{$announcement->price}} €</p>
                <p class="card-text"><a style="text-decoration: none; color:white" href="{{route('categoryShow',['category'=>$announcement->category])}}"> Categoria : {{$announcement->category->name}}</a></p>
                <p class="card-text">{{$announcement->created_at}}</p>
                
            </div>
        </div>
            
     
    </div>
</x-layout>
