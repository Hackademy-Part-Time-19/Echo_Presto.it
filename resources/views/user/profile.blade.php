<x-layout>
    <div style=" display:flex;  height: 550px; width:100%; background-color:#6CA7DD; border-radius:20px; margin-top:20px" class="container ">
        <div style="flex:3; ">
            <img style=" width:90%; height:90%; border-top-left-radius:20px;border-bottom-left-radius:20px; box-shadow: 4px 4px 8px rgba(0, 36, 12, 1.5);"
                src="https://img.freepik.com/premium-vector/male-profile-flat-blue-simple-icon-with-long-shadowxa_159242-10092.jpg"
                alt="">
        </div>
        <ul class="list-group" style="flex:4; border-radius:20px">
            <li class="list-group-item"><strong>Nome:</strong>
                @if (isset($profile) && $profile->name)
                    {{ $profile->name }}
                @endif
            </li>
            <li class="list-group-item"><strong>Cognome:</strong>
                @if (isset($profile) && $profile->surname)
                    {{ $profile->surname }}
                @endif
            </li>
            <li class="list-group-item"><strong>Email:</strong> {{ auth()->user()->email }}</li>
            <li class="list-group-item"><strong>Città:</strong>
                @if (isset($profile) && $profile->city)
                    {{ $profile->city }}
                @endif
            </li>
            <li class="list-group-item"><strong>Indirizzo:</strong>
                @if (isset($profile) && $profile->address)
                    {{ $profile->address }}
                @endif
            </li>
            <li class="list-group-item"><strong>Descrizione:</strong>
                @if (isset($profile) && $profile->description)
                    {{ $profile->description }}
                @endif
            </li>
            <li class="list-group-item"><strong>Annunci:</strong>
                @if (isset($profile) && $profile->advertisements_placed)
                    {{ $profile->advertisements_placed }}
                @endif
            </li>
            <li style="margin: 1%; list-style:none"><a href="{{ route('user.update', ['id' => $profile->id]) }}" class="btn btn-info"
                    style="margin-top:20px;background-color: rgb(37, 37, 223); font-weight:bold; border:solid 1px darkblue; color:white">Modifica
                    Profilo</a></li>
            <li style="margin: 1%; list-style:none"><a href="{{ route('user.delete', ['id' => $profile->id]) }}" class="btn btn-danger"
                    style="margin-top:20px;font-weight:bold; border:solid 1px darkblue; color:white" onclick="return confirm('Sei sicuro di voler eliminare questo account?')">Elimina account</a>
            </li>
        </ul>
    </div>
</x-layout>
