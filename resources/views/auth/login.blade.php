<x-layout>

    <div style=" background-image: url('https://assets-global.website-files.com/5a9ee6416e90d20001b20038/64d14feca4cb71202bb97e89_%20-%204.jpg'); background-size:cover; background-repeat: no-repeat; height: 600px; width:100%;" class="container">

        <div class="row justify-content-center mt-2" style="margin-left: 90px;">
            <div style="flex:3; ">
                <img style=" width:100%; height:100%; border-top-left-radius:20px;border-bottom-left-radius:20px; box-shadow: 4px 4px 8px rgba(0, 36, 12, 1.5);"
                    src="https://knowledgemission.kerala.gov.in/img/official-login.jpg"
                    alt="">
            </div>
            <div style="padding:30px; color:white; background-color:rgba(0, 121, 40, 0.5);border-top-right-radius:20px;border-bottom-right-radius:20px" class="col-md-8">
                <form action="{{ route('login') }}" method="POST">
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
                        <button style="background-color: rgb(37, 37, 223); font-weight:bold;border:solid 1px darkblue" type="submit"
                            class="btn btn-success">Accedi</button>
                    </div>
                </form>

            </div>
        </div>
    </div>



</x-layout>
