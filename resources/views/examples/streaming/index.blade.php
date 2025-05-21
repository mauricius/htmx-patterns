@php
    use App\Http\Controllers\StreamingController;

    /** @var \Illuminate\Support\MessageBag $errors */
@endphp

@extends('examples.layout')

@push('head')
    <script src="https://unpkg.com/htmx-ext-sse@2.2.2" crossorigin="anonymous"></script>
@endpush

@section('title', 'Streaming')

@section('content')
    <article>
        <hgroup>
            <h2>Example 8: Streaming</h2>
            <p>Demonstrates streaming using Server Sent Events (SSE)</p>
        </hgroup>

        <div>
            <div hx-ext="sse" sse-connect="{{ action([StreamingController::class, 'stream']) }}" sse-swap="message" hx-swap="beforeend"></div>
            <hr>
            <form hx-post="{{ action([StreamingController::class, 'submit']) }}" hx-swap="none" hx-on::after-request="if(event.detail.successful) this.reset()">
                @csrf
                <input type="text" name="request" placeholder="Ask me something..." autocomplete="off" />
                <button>Submit</button>
            </form>
        </div>
  </article>
@endsection
