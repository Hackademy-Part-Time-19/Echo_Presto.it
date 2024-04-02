<x-layout>

    <div style="display:flex; align-items:center;justify-content:center; background-color:#6CA7DD; border-radius:20px"
    class="container mt-5">
    <div style="flex:5; ">
        <img style=" width:100%; height:100%;padding:40px"
            src="https://www.kinetica.it/wp-content/uploads/2018/02/img_tastiera-1170x731.jpg" alt="">
    </div>
    <div class="row justify-content-center mt-3 " style="flex:6;padding:40px; width:100%">
        <form style="color: white;" action="{{ route('register') }}" method="POST">
            @csrf
            <h2>Richiesta per diventare Revisore</h2>
            <div class="form-row ">
                <div class="form-group col-md-9">
                    <label for="name">Nome</label>
                    <input type="text" class="form-control " id="name" placeholder="Nome" name="name">
                </div>
            </div>
            @error('name')
                <span class=" small text-danger">{{ $message }}</span>
            @enderror
            <div class="form-row">
                <div class="form-group col-md-9">
                    <label for="inputEmail4">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Email" name="email">
                </div>
                @error('email')
                <span class=" small text-danger">{{ $message }}</span>
                @enderror
            </div>
            <a href="{{route('work.redirect')}}" class="btn btn-success" style="margin-top:20px; background-color:#2414da">Diventa Revisore</a>
        </form>


    </div>
</div>



</x-layout>