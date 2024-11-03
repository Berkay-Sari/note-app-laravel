<x-layout>
    <div class="note-container single-note">
        <div class="note-header">
            <h1 class="text-3xl py-4">Note: {{ $note->created_at }}</h1>
            <h2 class="text-2xl font-bold py-2">{{ $note->title }}</h2>
            <div class="note-buttons">
                <a href="{{ route('note.edit', $note) }}" class="note-edit-btn">Edit</a>
                <form action="{{ route('note.destroy', $note) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button class="note-delete-btn">Delete</button>
                </form>
            </div>
        </div>
        <div class="note">
            <div class="note-content">
                {{ $note->content }}
            </div>
        </div>
        <div class="note-buttons">
            <a href="{{ route('note.index') }}" class="note-back-btn">Back to All Notes</a> <!-- Link to return to all notes -->
        </div>
    </div>
</x-layout>
