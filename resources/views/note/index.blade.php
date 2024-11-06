<x-app-layout>
    <div class="note-container py-8">
        <a href="{{ route('note.create') }}" class="new-note-btn">
            New Note
        </a>
        <div class="note-list">
            @foreach ($notes as $note)
                <div class="note">
                    <a href="{{ route('note.show', $note) }}" class="note-title">{{ $note->title }}</a>
                    <div class="note-content">
                        {{ Str::words($note->content, 30) }}
                    </div>
                    <div class="note-buttons">
                        <a href="{{ route('note.edit', $note) }}" class="note-edit-btn">Edit</a>
                        <form action="{{ route('note.destroy', $note) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="note-delete-btn">Delete</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>

        {{ $notes->links() }}
    </div>
</x-app-layout>
