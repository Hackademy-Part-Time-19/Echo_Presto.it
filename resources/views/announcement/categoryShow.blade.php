<x-layout>
    <div class="row">
        @foreach($announcements as $announcement)
            <div class="col-md-4 mb-3">
                <x-card-annunci
                    :title="$announcement->title"
                    :body="$announcement->body"
                    :price="$announcement->price"
                    :category="$announcement->category->name"
                    :createdAt="$announcement->created_at"
                />
            </div>
        @endforeach
    </div>
</x-layout>
