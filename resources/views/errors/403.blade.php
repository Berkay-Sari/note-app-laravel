<x-app-layout>
    <div class="error-container">
        <h1 class="error-title">403 Forbidden</h1>
        <p class="error-message">Sorry, you do not have permission to access this page.</p>
        <a href="{{ route('note.index') }}" class="error-home-link">Go to Notes</a>
    </div>
</x-app-layout>
