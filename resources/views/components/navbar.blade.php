<nav id="Navbar" class="navbar navbar-expand-lg bg-success-subtle">

    <div style="display:flex; align-items:center; justify-content:space-between" class="container-fluid">
        <div style="display:flex; align-items:center;">
            <a style="color: white; font-size:26px" class="navbar-brand" href="{{ route('home') }}">
                <img src="{{ asset('Images/LogoPresto.png') }}" style="width: 50px; margin-right:1vw; margin-left:2vw;">
            </a>
            <a style="margin-left: 50px" class="nav-link active" aria-current="page" href="{{ route('announcement.index') }}">Annunci</a>
            @auth
            <a style="margin-left: 50px" class="nav-link active" aria-current="page" href="{{ route('create') }}">Inserisci Annuncio</a>

            <div class="btn-group" style="margin-left: 50px">
                <button style="background-color: #2e9940; " type="button" class="btn btn-success">Categorie</button>
                <button style="background-color: #2e9940; " type="button" class="btn btn-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                    <span class="visually-hidden">Toggle Dropdown</span>
                </button>
                <ul style="background: #2e9940;" class="dropdown-menu">
                    @foreach ($categories as $category)
                    <li>
                        <a style="text-decoration: none;color:white;padding:2px;" class="dropdown-items" href="{{ route('categoryShow', compact('category')) }}">{{ $category->name }}</a>
                    </li>
                    <li></li>
                    <hr class="dropdown-divider">
                    </li>
                    @endforeach
                </ul>
            </div>
            @if (Auth::user()->is_revisor)
            <li style="padding-left: 30px; display:flex; align-items:center; " class="nav-iem">
                <a class="nav-link btn btn-outline-success btn-sm position-relative" href="{{ route('revisor.index') }}">
                    Zona Revisore
                    <span style="margin: 12px" class="position-absolute top-20 start-100 translate-middle badge rounded-pill bg-danger">
                        {{ \App\Models\Announcement::ToBeRevisionedCount() }}</span>
                    <span class="visually-hidden">unread messages</span>
                </a>
            </li>
            @endif
            @endauth

        </div>


        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

    </div>
    <div style="margin-right: 50px" class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            @guest
            <button style="background-color: #2e9940;  border-radius:15px; margin-right:18px"> <a style="color:white;" class="nav-link " href="{{ route('login') }}">Login</a></button>
            <button style="background-color: #2e9940;  border-radius:15px;"> <a style="color:white;" class="nav-link " href="{{ route('register') }}">Registrati</a></button>
            @endguest
            @auth
            <a style="color: white; font-size:20px; width:max-content; margin-right:40px" class="nav-link active" aria-current="page" href="{{ route('profile', auth()->user()->id)}}">Benvenuto
                {{ auth()->user()->name }}</a>
            @if (Auth::check() && (Auth::user()->is_revisor === 0 ))
            <a href="{{route('work')}}"><button style="width: max-content; margin-top:4px" id="btnWork" class="btn btn-success">Lavora con noi</button> </a>
            @endif
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button style="background-color: #2e9940;  border-radius:15px; margin-right:18px; color:white" type="submit" class="nav-link">Logout</button>
            </form>
            @endauth
        </div>
    </div>
    </div>
</nav>