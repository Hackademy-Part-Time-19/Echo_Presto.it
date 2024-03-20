<x-layout>

    <div style=" background: linear-gradient(#030604,#1C6F29) " class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-8">

              <form action="{{ route('register')}}" method="POST">
              @csrf
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
                      <div class="form-group col-md-6">
                        <label for="inputPassword4"> Conferma Password</label>
                        <input type="password" class="form-control" id="password" placeholder=" conferma Password">
                    </div>
                  </div>
                  <div class="form-group col-md-6">
                      <label for="address">Indirizzo</label>
                      <input type="text" class="form-control" id="address" placeholder="Via Paolo Rossi 1">
                  </div>
                  <div class="form-row">
                      <div class="form-group col-md-6">
                          <label for="city">Citta'</label>
                          <input type="text" class="form-control" id="city" placeholder="Milano">
                      </div>
                  </div>
                  <div class="form-group">
                      <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="gridCheck">
                          <label class="form-check-label" for="gridCheck">
                              Check me out
                          </label>
                      </div>
                  </div>
                  <button type="submit" class="btn btn-success">Sign in</button>
              </form>

            </div>
        </div>
    </div>



</x-layout>
