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
                <img style="border-radius:5px;" class="img-fluid" src="https://picsum.photos/700/400" alt="immagine">
                <h3 class="card-title text-center">{{$announcement->title}}</h3>
                <h5 class="card-title text-center">{{$announcement->body}}</h5>
                <p class="card-text">{{$announcement->price}} €</p>
                <p class="card-text"><a style="text-decoration: none; color:white" href="{{route('categoryShow',['category'=>$announcement->category])}}"> Categoria : {{$announcement->category->name}}</a></p>
                <p class="card-text">{{$announcement->created_at}}</p>
                
            </div>
        </div>
    </div>
</x-layout>
