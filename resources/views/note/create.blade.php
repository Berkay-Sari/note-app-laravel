<x-app-layout>
    <div class="note-container single-note">
        <h1 class="text-3xl py-4">Create New Note</h1>
        <form action="{{ route('note.store') }}" method="POST" class="note">
            @csrf
            <input type="text" name="title" class="note-title-input" placeholder="Enter title here..." required>
            <textarea name="content" rows="10" class="note-content" placeholder="Enter your note here..." required></textarea>
            <div class="note-buttons">
                <a href="{{ route('note.index') }}" class="note-cancel-btn">Cancel</a>
                <button class="note-submit-btn">Submit</button>
            </div>
        </form>
    </div>
</x-app-layout>
