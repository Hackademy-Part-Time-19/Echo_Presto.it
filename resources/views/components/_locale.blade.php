<form action="{{ route('setlanguagelocale', $lang) }}" method="POST">
    @csrf
    
    <button type="submit" class="nav-link" style="border:none;height: 30px;width:40px;position:absolute;">
        <span class="flag-icon flag-icon-{{ $nation }}"></span>
    </button>
    
</form>        