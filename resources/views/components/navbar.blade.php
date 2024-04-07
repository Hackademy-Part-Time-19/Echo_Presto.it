<nav id="Navbar" class="navbar navbar-expand-lg bg-success-subtle">

    <div style="display:flex; align-items:center; justify-content:space-between" class="container-fluid">
        <div style="display:flex; align-items:center;">
            <a style="color: white; font-size:26px" class="navbar-brand" href="{{ route('home') }}">
                <img src="{{ asset('Images/LogoPrestoNav.png') }}"
                    style="width: 50px; margin-right:1vw; margin-left:2vw;">
            </a>
            <a style="margin-left: 50px" class="nav-link active" aria-current="page"
                href="{{ route('announcement.index') }}">{{ __('ui.ann') }}</a>
            @auth
                <a style="margin-left: 50px" class="nav-link active" aria-current="page"
                    href="{{ route('create') }}">{{ __('ui.insert') }}</a>

                <div class="btn-group" style="margin-left: 50px">
                    <button style="background-color: #2414da; " type="button"
                        class="btn btn-success">{{ __('ui.cat') }}</button>
                    <button style="background-color: #2414da; " type="button"
                        class="btn btn-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <span class="visually-hidden">Toggle Dropdown</span>
                    </button>
                    <ul style="background: #2414da;" class="dropdown-menu">
                        @foreach ($categories as $category)
                            <li>
                                <a style="text-decoration: none;color:white;padding:2px;" class="dropdown-items"
                                    href="{{ route('categoryShow', compact('category')) }}">{{ __("categories.$category->name")}}</a>
                            </li>
                            <li></li>
                            <hr class="dropdown-divider">
                            </li>
                        @endforeach
                    </ul>
                </div>
                @if (Auth::user()->is_revisor)
                    <li style="padding-left: 30px; display:flex; align-items:center; " class="nav-iem">
                        <a class="nav-link btn btn-outline btn-sm position-relative" href="{{ route('revisor.index') }}">
                            {{ __('ui.rev') }}
                            <span style="margin: 12px"
                                class="position-absolute top-20 start-100 translate-middle badge rounded-pill bg-danger">
                                {{ \App\Models\Announcement::ToBeRevisionedCount() }}</span>
                            <span class="visually-hidden">unread messages</span>
                        </a>
                    </li>
                @endif
            @endauth

        </div>


        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

    </div>
    <div style="margin-right: 60px" class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            @guest
                <button style="background-color: #2414da;  border-radius:15px; margin-right:20px"> <a style="color:white;"
                        class="nav-link " href="{{ route('login') }}">Login</a></button>
                <button style="background-color: #2414da;  border-radius:15px; margin-right:20px"> <a style="color:white;" class="nav-link "
                        href="{{ route('register') }}">{{ __('ui.reg') }}</a></button>

            @endguest
            @auth
                <a style="color: white; font-size:20px; width:max-content; margin-right:40px" class="nav-link active"
                    aria-current="page" href="{{ route('user.profile', auth()->user()->id) }}">{{ __('ui.wel') }}
                    {{ auth()->user()->name }}</a>
                @if (Auth::check() && Auth::user()->is_revisor === 0)
                    <a href="{{ route('work') }}"><button style="width: max-content; margin-top:4px" id="btnWork"
                            class="btn btn-success">{{ __('ui.work') }}</button> </a>
                @endif
                <a href="{{ route('cart.index') }}"><button style="background-color: #2414da;  border-radius:15px; margin-right:20px; color:white; width: max-content; "
                    type="submit" class="nav-link" id="btnCart">{{__('ui.cart')}} 
                </button> </a>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button style="background-color: #e81212;  border-radius:15px; margin-right:20px; color:white"
                        type="submit" class="nav-link">Logout</button>
                </form>
            @endauth

            <div
                style="height: 20px;width:100px;display:flex;align-items:center;justify-content:center;flex-direction:row;margin-left:50px;">
                <div style="align-items: center;height: 10px;width:40px;">
                    <x-_locale lang="en" nation="gb" />
                    <img src="{{ asset('Images/ing.png') }}"style="height: 20px;width:30px;">

                </div>
                <div style="align-items: center;height: 10px;width:30px;margin-left:30px;">
                    <x-_locale lang="it" nation="it" />
                    <img src="{{ asset('Images/ita.png') }}" style="height: 20px;width:30px;">
                </div>
                <div style="align-items: center;height: 10px;width:40px;margin-left:30px;">
                    <x-_locale lang="de" nation="de" />
                    <img src="{{ asset('Images/de.jpg') }}" style="height: 20px;width:30px;">
                </div>
            </div> 
        </div>
    </div>
    </div>
</nav>
