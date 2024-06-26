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
            <h1 id="Slogan" >{{__('ui.welcome')}}</h1>
        </div>
        <div id="SezioneRicerca">
            <div class="container-fluid">
                <div class="d-flex m-3" role="search">
                    <form style="margin-left: 30px;  width: 500px;" action="{{ route('announcements.search') }}"
                        method="GET" class="d-flex">
                        <input style="width: 900px" class="form-control me-2" type="search" placeholder="{{__('ui.search')}}"
                            aria-label="Search" name="searched">
                        <button style="background-color: #1a1919;  border-radius:15px;color:white; width:90px; border:black;"
                            type="submit">{{__('ui.search')}}</button>
                    </form>

                </div>
            </div>
        </div>
    </header>

    <section id="SezioneCategorie">
        <div>
            <h1 style=" font-size:70px; text-shadow: 4px 4px 6px rgba(63, 71, 121, 1);">{{__('ui.best')}}</p>
            </h1>
        </div>
        <div class="container" id="prod">


            <div class="row" style="margin-top:20px;">
              <div class="col-12 col-sm-4 col-md-3" style="height: 70vh;position: relative;">
                <div style="position: absolute;top:80px; left:40px;z-index: 1000">
                  <h5 style="color: white; font-weight: bold;">{{__('ui.clothes')}}</h5>
                </div>
                <a href="{{ route('categoryShow', 9) }}">
                <img
                  class="carosell" src="Images/Abbigliamento/abbigliamentoCarosello.jpg"
                  alt="" style="width: 100%;height: 100%;object-fit: cover; border: 7px solid white;border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 1.5);">
                  </a>
              </div>
              <div class="col-12 col-sm-4 col-md-3" style="height: 70vh;padding: 0px;position: relative;">
                <div style="position: absolute;top:80px; left:40px;z-index: 1000">
                  <h5 style="color: white; font-weight: bold">LAPTOP</h5>
                </div>
                <a href="{{ route('categoryShow', 1) }}">
                <img
                class="carosell" src="Images/Laptop/laptop.jpg"
                  alt="" style="width: 100%;height: 100%;object-fit: cover;object-fit: cover; border: 7px solid white;border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 1.5);">
                </a>
              </div>
              <div class="col-12 col-sm-4 col-md-3" style="height: 70vh;position: relative;">
                <div style="position: absolute;top:80px; left:40px;z-index: 1000">
                  <h5 style="color: white; font-weight: bold">SMARTPHONES</h5>
                </div>
                <a href="{{ route('categoryShow', 8) }}">
                <img
                class="carosell" src="Images/Telefonia/iphone.jpg"
                  alt="" style="width: 100%;height: 100%;object-fit: cover; border: 7px solid white;border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 1.5);">
                </a>
              </div>
              <div class="col-12 col-sm-12 col-md-3" style="height: 70vh;padding: 0px;position: relative;">
                <div style="position: absolute;top:80px; left:40px;z-index: 1000">
                  <h5 style="color: white; font-weight: bold">{{__('ui.catHome')}}</h5>
                </div>
                <a href="{{ route('categoryShow', 2) }}">
                <img
                class="carosell" src="Images/Arredamento casa/Mobili casa/mobili1.jpg"
                  alt="" style="width: 100%;height: 100%;object-fit: cover;object-fit: cover; border: 7px solid white;border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 1.5);">
                </a>
              </div>

            </div>

    </section>
    <section id="sectionCard" style= "min-height:110vh;   background-color: #fffff2;  padding:100px">
        <h2 class="text-center" style="font-size: 50px;font-weight:bold; margin-bottom:30px; text-shadow: 4px 4px 6px rgba(63, 71, 121, 1)">{{__('ui.allAnnouncements')}}</h2>
        <div style="align-items:center; justify-content:center; " class="row m-2 d-flex  text-center">
            @foreach ($announcements as $announcement)

                <div class="card m-4 col-12 col-md-6" style="width: 22rem;  box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px, rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -3px 0px inset; border: 7px solid white;border-radius: 8px; ">

                    <div class="card-body">
                        <img style="border-radius:5px;" class="img-fluid" src={{!$announcement->images()->get()->isEmpty() ? $announcement->images()->first()->getUrl(400,400) : "https://picsum.photos/400/400"}}
                            alt="immagine">
                        <h3 style="font-weight: 600; width:100%" class="card-title text-center">{{ $announcement->title }}</h3>
                        <h5 class="card-title text-center" style=" overflow: hidden; white-space: nowrap; text-overflow: ellipsis;">{{ $announcement->body }}</h5>
                        <p class="card-text">{{ $announcement->price }} €</p>
                        <p class="card-text"><a style="text-decoration: none; color:black" href="{{route('categoryShow',['category'=>$announcement->category])}}"> {{__('ui.category')}}:
                                {{  __("categories." . $announcement->category->name)}}</a></p>
                        <p style="color: white; background-color:#6CA7DD" class="card-footer">{{__('ui.publish')}}: {{ $announcement->created_at->format('d/m/Y') }} <br> {{__('ui.author')}}: {{ $announcement->user->name ?? '' }}
                        </p>
                       
                        <div style="display: flex; align-items:center; justify-content:space-between; width:100%;">
                           
                                <a  href="{{ route('dettaglio', compact('announcement')) }}" class="card-link ">
                                    <button style="background: #2414da; width:max-content;" type="submit"
                                        class="btn btn-secondary">{{__('ui.more')}}</button>
                                </a>
                           
                            <form  action="{{ route('cart.add', ['announcement' => $announcement->id])}}" method="POST">
                              @csrf
                              <input type="hidden" name="id" value="{{ $announcement->id }}">
                              <button style="background: #048cee; width:max-content;" type="submit" class="btn btn-primary">{{__('ui.buy')}}</button>
                          </form>
                        </div>
                        
                    </div>
                </div>
            @endforeach
        </div>

    </section>


</x-layout>
