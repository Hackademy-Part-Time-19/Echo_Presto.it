<x-layout>

    <div style="  height: 600px; width:100%;" class="container">

        <div class="row justify-content-center mt-2" style="">
            <div style="flex:3; ">
                <img style=" width:100%; height:100%; border-top-left-radius:20px;border-bottom-left-radius:20px; box-shadow: 4px 4px 8px rgba(0, 36, 12, 1.5);"
                    src="https://knowledgemission.kerala.gov.in/img/official-login.jpg"
                    alt="">
            </div>
            <div style="padding:50px; color:white; background-color:#6CA7DD;border-top-right-radius:20px;border-bottom-right-radius:20px" class="col-md-8">
                <form style="width:900px" action="{{ route('login') }}" method="POST">
                    @csrf
                    <h2 >Accedi su <span style="font-weight: 600">Presto.it</span></h2>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="email">La tua Email</label>
                            <input type="text" class="form-control" id="name" placeholder="Email" name="email">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Password"
                                name="password">
                        </div>
                    </div>
                    <div class="form-group col-md-6 mt-3">
                        <button style="background-color: rgb(37, 37, 223); font-weight:bold;border:solid 1px darkblue; width:100%" type="submit"
                            class="btn btn-success">Accedi</button>
                    </div>
                </form>

            </div>
        </div>
    </div>



</x-layout>
