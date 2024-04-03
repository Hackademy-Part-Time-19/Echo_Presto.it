<x-layout>
    <ul class="list-group">
        <li class="list-group-item"><strong>Nome:</strong>
            @if(isset($profile) && $profile->name)
            {{ $profile->name }}
            @endif
        </li>
        <li class="list-group-item"><strong>Cognome:</strong>
            @if(isset($profile) && $profile->surname)
            {{ $profile->surname }}
            @endif
        </li>
        <li class="list-group-item"><strong>Email:</strong> {{ auth()->user()->email }}</li>
        <li class="list-group-item"><strong>Città:</strong>
            @if(isset($profile) && $profile->city)
                {{ $profile->city }}
            @endif
        </li>
        <li class="list-group-item"><strong>Indirizzo:</strong>
            @if(isset($profile) && $profile->address)
                {{ $profile->address }}
            @endif
        </li>
        <li class="list-group-item"><strong>Descrizione:</strong>
             @if(isset($profile) && $profile->description)
                {{ $profile->description }}
            @endif
        </li>
        <li class="list-group-item"><strong>Annunci:</strong>
            @if(isset($profile) && $profile->advertisements_placed )
                {{ $profile->advertisements_placed  }}
            @endif
        </li>
        <li style="margin: 1%;"><a href="{{ route('user.update',['id' => $profile->id] )}}" class="btn btn-info" style="margin-top:20px;background-color: rgb(37, 37, 223); font-weight:bold; border:solid 1px darkblue; color:white">Modifica Profilo</a></li>
        <li style="margin: 1%;"><a href="{{ route('user.delete',['id' => $profile->id] )}}" class="btn btn-danger" style="margin-top:20px;font-weight:bold; border:solid 1px darkblue; color:white">Elimina account</a></li>
    </ul>
</x-layout>