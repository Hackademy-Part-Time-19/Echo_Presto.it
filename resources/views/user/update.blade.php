<x-layout>

    <div style="display:flex; align-items:center;justify-content:center;  height:500px" class="container mt-5">
        <div  style="flex:6.8;display:flex;flex-direction:column;background-color:#6CA7DD;border-top-right-radius:20px;border-bottom-right-radius:20px; padding:20px">
            <form style="color: white;" action="{{ route('user.update', [$profile->id]) }}" method="POST">
                @csrf
                <h2 style="font-weight: 600">Modifica profilo</h2>
                <div class="form-row ">
                    <div class="form-group col-md-9   ">
                        <label for="name">Nome</label>
                        <input type="text" class="form-control " id="name" name="name" value="{{$profile->name}}">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-9">
                        <label for="inputEmail4">Cognome</label>
                        <input type="text" class="form-control" id="surname" name="surname" value="{{$profile->surname}}">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-9">
                        <label for="inputEmail4">Città</label>
                        <input type="text" class="form-control" id="city" name="city" value="{{$profile->city}}">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-9">
                        <label for="inputEmail4">Indirizzo</label>
                        <input type="text" class="form-control" id="address" name="address" value="{{$profile->address}}">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-9">
                        <label for="inputEmail4">Descrizione</label>
                        <input type="text" class="form-control" id="description" name="description" value="{{$profile->description}}">
                    </div>
                </div>
                <button style="margin-top:20px;background-color: rgb(37, 37, 223); font-weight:bold;border:solid 1px darkblue" type="submit"
                    class="btn btn-success">Conferma</button>
            </form>
        </div>

    </div>



</x-layout>
