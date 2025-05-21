@php
    use App\Http\Controllers\PollingController;
@endphp

<div id="progress" hx-trigger="every 1000ms" hx-get="{{ action([PollingController::class, 'progress']) }}" hx-swap="outerHTML" hx-target="this">
    <h3 role="status" tabindex="-1">{{ $message }} ({{ $percentage }}%)</h3>

    <progress id="pb" value="{{ $percentage }}" max="100"></progress>
</div>
