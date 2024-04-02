<x-layout>

    <div style="display:flex; align-items:center;justify-content:center; background: linear-gradient(#030604,#1C6F29);"
        class="container mt-5">
        <div style="flex:5; ">
            <img style=" width:100%; height:100%;padding:40px"
                src="https://www.kinetica.it/wp-content/uploads/2018/02/img_tastiera-1170x731.jpg" alt="">
        </div>
        <div class="row justify-content-center mt-3 " style="flex:6;padding:40px; width:100%">
            <form style="color: white;" action="{{ route('register') }}" method="POST">
                @csrf
                <h2 class="m-3">Profilo</h2>
                <div class="form-row ">
                    <div class="form-group col-md-9   ">
                        <label for="name">Name</label>
                        <input type="text" class="form-control " id="name" placeholder="Nome" name="name">
                    </div>
                </div>
                <div class="form-row ">
                    <div class="form-group col-md-9   ">
                        <label for="name">Surname</label>
                        <input type="text" class="form-control " id="surname" name="surname">
                    </div>
                </div>
                <div class="form-row ">
                    <div class="form-group col-md-9   ">
                        <label for="name">City</label>
                        <input type="text" class="form-control " id="city" name="city">
                    </div>
                </div>
                <button style="margin-top:20px;background-color: #389147; font-weight:bold" type="submit"
                    class="btn btn-success">Crea Account</button>
            </form>
        </div>
    </div>
</x-layout>
