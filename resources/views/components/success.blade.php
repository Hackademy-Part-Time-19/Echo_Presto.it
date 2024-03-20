@if(session()->has('succes'))
    <div class="alert alert-success">{{session('succes')}}</div>
@endif