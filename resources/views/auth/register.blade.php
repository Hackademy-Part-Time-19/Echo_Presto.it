<x-layout>

    <div style=" background: linear-gradient(#030604,#1C6F29) " class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-8">

              <form action="/register" method="POST">
              @csrf
                <h2 class="m-3">Registrazione</h2>
                  <div class="form-row">
                      <div class="form-group col-md-6">
                          <label for="name">Nome</label>
                          <input type="text" class="form-control" id="name" placeholder="Nome" name="name">
                      </div>
                  </div>
                  <div class="form-row">
                      <div class="form-group col-md-6">
                          <label for="inputEmail4">Email</label>
                          <input type="email" class="form-control" id="email" placeholder="Email" name="email">
                      </div>
                      <div class="form-group col-md-6">
                          <label for="inputPassword4">Password</label>
                          <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputPassword4"> Conferma Password</label>
                        <input type="password" class="form-control" id="password_confirmation" placeholder=" conferma Password" name="password_confirmation">
                    </div>
                  </div>
                  <button type="submit" class="btn btn-success">Sign in</button>
              </form>

            </div>
        </div>
    </div>



</x-layout>
