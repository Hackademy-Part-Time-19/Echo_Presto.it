<x-layout>

    <div style="margin-top: 60px;" class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-8">

                <form action="{{ route('login')}}" method="POST">
                    @csrf
                    <h2 class="m-3">Login</h2>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="name" placeholder="Nome">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="surname">Password</label>
                            <input type="text" class="form-control" id="surname" placeholder="Password">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="surname"> Conferma Password</label>
                            <input type="text" class="form-control" id="surname" placeholder="Conferma Password">
                        </div>
                    </div>
                    <div class="form-group col-md-6 mt-3">
                        <button type="submit" class="btn btn-success">Accedi</button>
                    </div>
                </form>

            </div>
        </div>
    </div>



</x-layout>
