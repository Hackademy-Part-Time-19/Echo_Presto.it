<x-layout>

    <div style="margin-bottom: 60px; margin-top: 60px;" class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-8">

                <form>
                    <h2 class="m-3">Registrazione</h2>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="name">Nome</label>
                            <input type="text" class="form-control" id="name" placeholder="Nome">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="surname">Cognome</label>
                            <input type="text" class="form-control" id="surname" placeholder="Cognome">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Email">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Password">
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="address">Indirizzo</label>
                        <input type="text" class="form-control" id="address" placeholder="Via Paolo Rossi 1">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="city">Città </label>
                            <input type="text" class="form-control" id="city" placeholder="Milano">
                        </div>
                    </div>
                    <div class="form-group col-md-6 mt-3">
                        <button type="submit" class="btn btn-success">Sign in</button>
                    </div>
                </form>

            </div>
        </div>
    </div>



</x-layout>
