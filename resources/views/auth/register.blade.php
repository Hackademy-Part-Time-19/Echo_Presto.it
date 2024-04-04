<x-layout>

    <div style="display:flex; align-items:center;justify-content:center;  height:500px" class="container mt-5">
        <div style="flex:5.3; margin-left:40px; margin-right:10px">
            <img style=" width:100%;  border-top-left-radius:20px;border-bottom-left-radius:20px; box-shadow: 4px 4px 8px rgba(0, 36, 12, 1.5);"
                src="https://static.vecteezy.com/ti/vettori-gratis/p1/3689251-registrazione-online-o-registrazione-login-per-account-su-smartphone-app-interfaccia-utente-con-password-sicura-applicazione-mobile-per-interfaccia-utente-accesso-banner-web-cartoon-persone-illustrazione-vettoriale.jpg" alt="">
        </div>
        <div  style="flex:6.8;display:flex;flex-direction:column;background-color:#6CA7DD;border-top-right-radius:20px;border-bottom-right-radius:20px; padding:20px">
            <form style="color: white;" action="{{ route('register') }}" method="POST">
                @csrf
                <h2 style="font-weight: 600">{{__('ui.reg')}}</h2>
                <div class="form-row ">
                    <div class="form-group col-md-9   ">
                        <label for="name">{{__('ui.name')}}</label>
                        <input type="text" class="form-control " id="name" placeholder="Nome" name="name">
                    </div>
                </div>
                @error('name')
                    <span class=" small text-danger">{{ $message }}</span>
                @enderror
                <div class="form-row">
                    <div class="form-group col-md-9">
                        <label for="inputEmail4">{{__('ui.email')}}</label>
                        <input type="email" class="form-control" id="email" placeholder="Email" name="email">
                    </div>
                    @error('email')
                    <span class=" small text-danger">{{ $message }}</span>
                @enderror
                    <div class="form-group col-md-9">
                        <label for="inputPassword4">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Password"
                            name="password">
                    </div>
                    @error('password')
                    <span class=" small text-danger">{{ $message }}</span>
                @enderror
                    <div class="form-group col-md-9">
                        <label for="inputPassword4"> {{__('ui.pass')}}</label>
                        <input type="password" class="form-control" id="password_confirmation"
                            placeholder="Conferma Password" name="password_confirmation">
                    </div>
                    @error('password_confirmation')
                    <span class="small text-danger">{{ $message }}</span>
                @enderror
                </div>
                <button style="margin-top:20px;background-color: rgb(37, 37, 223); font-weight:bold;border:solid 1px darkblue" type="submit"
                    class="btn btn-success">{{__('ui.reg')}}</button>
            </form>          
        </div>

    </div>



</x-layout>
