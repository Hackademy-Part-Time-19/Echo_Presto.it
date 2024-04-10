<x-layout>
    @if (session()->has('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
    @endif
    <div style="background-color: #151515" class="container-fluid p-5  shadow mb-4">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center text-white">{{ __('ui.list') }}</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div style="align-items:center; justify-content:center; " class="row m-2 d-flex  text-center">
                        @forelse ($announcements as $announcement)
                        <div class="card m-4 col-12 col-md-6" style="width: 24rem;  box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px, rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -3px 0px inset; ">
                            <div class="card-body">
                                <img style="border-radius:5px; " class="img-fluid" src="{{ !$announcement->images()->get()->isEmpty() ? $announcement->images()->first()->getUrl(400, 400) : 'https://picsum.photos/400/400' }}" alt="immagine">
                                <h3 class="card-title text-center">{{ $announcement->title }}</h3>
                                <h5 class="card-title text-center">{{ $announcement->body }}</h5>
                                <p class="card-text">{{ $announcement->price }} €</p>
                                <p class="card-text"><a style="text-decoration: none; color:black" href="{{ route('categoryShow', ['category' => $announcement->category]) }}">
                                        {{ __('ui.category') }} :
                                        {{ __('categories.' . $announcement->category->name) }}</a></p>
                                <p style="color: white; background-color:#6CA7DD" class="card-footer">
                                    {{ __('ui.publish') }}: {{ $announcement->created_at->format('d/m/Y') }} <br>
                                    {{ __('ui.author') }}: {{ $announcement->user->name ?? '' }}
                                </p>
                                <div style="display: flex; align-items:center; justify-content:space-between; width:100%;">
                                   
                                        @if (Auth::check() && Auth::user()->is_revisor == 1)
                                        <a href="{{ route('announcement.revision', $announcement->id) }}" class="card-link ">
                                            <button style="width:150px" type="submit" class="btn btn-danger">{{ __('ui.rev2') }}</button>
                                        </a>
                                        @endif
                                        <a href="{{ route('dettaglio', compact('announcement')) }}" class="card-link ">
                                            <button style="background: #2414da; width:150px" type="submit" class="btn btn-secondary">{{ __('ui.more') }}</button>
                                        </a>
                                   
                                </div>
                                <form style="margin-top: 12px" action="{{ route('cart.add', ['announcement' => $announcement->id]) }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $announcement->id }}">
                                    <button style="background: #048cee;; width:100%;" type="submit" class="btn btn-primary">{{ __('ui.buy') }}</button>
                                </form>
                            </div>
                        </div>
                        @empty
                        <div class="col-12">
                            <div class="alert alert-warning py-3 shadow">
                                <p class="lead">{{ __('ui.noAds') }}</p>
                                <p>{{ __('ui.newAdd') }}: <a href="{{ route('create') }}" style="color: #2414da">{{ __('ui.pubb') }}</a></p>
                            </div>
                        </div>
                        @endforelse
                        {{ $announcements->links() }}
                    </div>
                </div>
            </div>
        </div>

</x-layout>