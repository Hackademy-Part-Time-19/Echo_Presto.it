<x-layout>
    <h1>Elenco Annunci</h1>
    <div class="card" style="width: 20rem; margin:10px;">
        @foreach ($announcements as $announcement)
            <div class="card" style="width: 20rem; margin:10px;">
                <div class="card-body">
                    <div class="card">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $announcement->title }}</h5>
                            <p class="card-text">{{ $announcement->body }}</p>
                            <p class="card-text">{{ $announcement->price }}</p>

                        </div>
                        <div class="card-footer">
                            <small class="text-body-secondary">Pubblicato il : {{ $announcement->created_at }}</small>
                            <small class="text-body-secondary">Autore: {{ $announcement->user_id->name }}</small>
                        </div>
                    </div>
        @endforeach
    </div>
</x-layout>
