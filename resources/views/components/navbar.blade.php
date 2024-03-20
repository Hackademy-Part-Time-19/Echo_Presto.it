<nav class="navbar navbar-expand-lg bg-success-subtle" style="background-color:green !important; color:white !important ">

    <div style="display:flex; align-items:center; justify-content:space-between; bac" class="container-fluid">
        <div style="display:flex; align-items:center; ">
            <a style="color: white; font-size:26px" class="navbar-brand" href="{{ route('home') }}">Presto.it</a>
            <a style="margin-left: 50px" class="nav-link active" aria-current="page" href="#">Annunci</a>
        </div>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

    </div>
    <div style="margin-right: 50px" class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <button style="background-color: #2e9940;  border-radius:15px; margin-right:18px" > <a style="color:white;" class="nav-link " href="{{route('login')}}">Login</a></button>
            <button style="background-color: #2e9940;  border-radius:15px;" > <a style="color:white;" class="nav-link " href="{{route('register')}}">Registrati</a></button>
            @auth
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button style="background-color: #2e9940;  border-radius:15px; margin-right:18px" type="submit" class="nav-link">Logout</button>
            </form>
            @endauth
        </div>
    </div>
    </div>
</nav>
