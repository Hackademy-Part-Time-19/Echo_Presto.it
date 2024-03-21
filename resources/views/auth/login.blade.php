<x-layout>

    <div style=" background: linear-gradient(#030604,#1C6F29); height: 600px; " class="container">
        <div  class="row justify-content-center mt-5">
            <div style="margin-top:30px; color:white" class="col-md-8">

                <form action="{{ route('login')}}" method="POST">
                    @csrf
                    <h2 class="m-3">Login</h2>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="name" placeholder="Nome" name="email">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Password" name="password">
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
