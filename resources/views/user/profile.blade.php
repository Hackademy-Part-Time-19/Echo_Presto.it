<x-layout>
    <ul class="list-group">
        <li class="list-group-item"><strong>Name:</strong> {{ $profile->name }}</li>
        <li class="list-group-item"><strong>Surname:</strong> {{ $profile->surname }}</li>
        <li class="list-group-item"><strong>Email:</strong> {{ auth()->user()->email }}</li>
        <li class="list-group-item"><strong>City:</strong> {{ $profile->city }}</li>
        <li class="list-group-item"><strong>Address:</strong> {{ $profile->address }}</li>
        <li class="list-group-item"><strong>Description:</strong> {{ $profile->description }}</li>
        <li class="list-group-item"><strong>Advertisements:</strong> {{ $profile->advertisements_placed }}</li>
        <li style="margin: 1%;"><a href="{{ route('user.update')}}" class="btn btn-info">Modifica</a></li>
    </ul>
</x-layout>