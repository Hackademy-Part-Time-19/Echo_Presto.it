<x-layout>
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    <div class="container">
        <h2 class="text-center"
            style="font-size: 50px;font-weight:bold; margin-bottom:30px; text-shadow: 4px 4px 6px rgba(63, 71, 121, 1)">
            {{ __('ui.cart') }}</h2>

        @if ($cart)
            @foreach ($cart->items as $item)
                <div class="card mb-3 ">
                    <div class="card-body">
                        <img style="width: 200px" src={{!$item->announcement->images()->get()->isEmpty() ? $item->announcement->images()->first()->getUrl(400,400) : "https://picsum.photos/400/400"}} class="card-img-top" alt="...">
                        <h5 style="margin-top:5px" class="card-title">{{ $item->announcement->title }}</h5>
                        <p class="card-text">{{ $item->announcement->description }}</p>
                        <p class="card-text">Prezzo: {{ $item->announcement->price }} €</p>
                    </div>
                    <div style="display: flex; align-items:center;">
                        <div>
                            <form method="POST" action="{{ route('cart.remove', ['cartItem' => $item->id]) }}">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn"
                                    style="background: #e80808; width:max-content; border-radius:10px;color:white; margin-left:8px"
                                    type="submit">{{ __('ui.remove') }}</button>
                            </form>
                        </div>

                    </div>
                </div>
            @endforeach

            <form action="{{ route('cart.checkout') }}" method="POST">
                @csrf
                <p class="lead">{{ __('ui.total') }}: {{ $cart->totalPrice() }} €</p>
                <button type="submit" class="btn btn-primary"
                    style="width:20%;background-color: #2414da;">{{ __('ui.checkout') }}</button>
            </form>
            <form action="{{ route('destroy') }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn btn-primary"
                    style="background: #e80808; width:max-content; border-radius:10px;color:white; width:20%; margin-top:10px">{{ __('ui.delete') }}</button>
            </form>
        @else
            <p>{{ __('ui.cart2') }}</p>
        @endif
    </div>
</x-layout>
