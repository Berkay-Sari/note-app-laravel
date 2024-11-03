<x-layout>
    <div class="note-container single-note">
        <h1 class="text-3xl py-4">Edit Note: {{ $note->created_at }}</h1>
        <form action="{{ route('note.update', $note) }}" method="POST" class="note">
            @csrf
            @method('PUT')
            <input type="text" name="title" class="note-title-input" value="{{ $note->title }}" required/>
            <textarea name="content" rows="10" class="note-content" required>{{ $note->content }}</textarea>
            <div class="note-buttons">
                <a href="{{ route('note.show', $note) }}" class="note-cancel-btn">Cancel</a>
                <button type="submit" class="note-submit-btn">Submit</button>
            </div>
        </form>
    </div>
</x-layout>
