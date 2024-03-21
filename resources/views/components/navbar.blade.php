<nav class="navbar navbar-expand-lg bg-success-subtle" style="background-color:green !important; color:white !important ">

    <div style="display:flex; align-items:center; justify-content:space-between;" class="container-fluid">
        <div style="display:flex; align-items:center;">
            <a style="color: white; font-size:26px" class="navbar-brand" href="{{ route('home') }}">Presto.it</a>
            <a style="margin-left: 50px" class="nav-link active" aria-current="page" href="#">Annunci</a>
            @auth
                <a style="margin-left: 50px" class="nav-link active" aria-current="page"
                    href="{{ route('create') }}">Inserisci Annuncio</a>

                    <div class="btn-group" style="margin-left: 50px" >
                        <button  style="background-color: #2e9940;"  type="button" class="btn btn-success">Categorie</button>
                        <button  style="background-color: #2e9940; " type="button" class="btn btn-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                          <span class="visually-hidden">Toggle Dropdown</span>
                        </button>
                        <ul class="dropdown-menu">
                            @foreach ($categories as $categorie)
                            <li>
                                <a style="text-decoration: none" class="dropdown-items">{{ $categorie->name }}</a>
                            </li>
                        @endforeach
                        </ul>
                      </div>

                <a style="margin-left: 50px; color: white; font-size:20px;" class="nav-link active" href="">Benvenuto
                    {{ auth()->user()->name }}</a>

            @endauth
        </div>


        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

    </div>
    <div style="margin-right: 50px" class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            @guest
                <button style="background-color: #2e9940;  border-radius:15px; margin-right:18px"> <a style="color:white;"
                        class="nav-link " href="{{ route('login') }}">Login</a></button>
                <button style="background-color: #2e9940;  border-radius:15px;"> <a style="color:white;" class="nav-link "
                        href="{{ route('register') }}">Registrati</a></button>
            @endguest
            @auth
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button style="background-color: #2e9940;  border-radius:15px; margin-right:18px" type="submit"
                        class="nav-link">Logout</button>
                </form>
            @endauth
        </div>
    </div>
    </div>
</nav>
