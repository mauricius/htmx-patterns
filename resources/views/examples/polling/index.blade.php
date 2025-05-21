@php
    use App\Http\Controllers\PollingController;
@endphp

@section('title', 'Polling')

@extends('examples.layout')

@section('content')
    <article>
        <hgroup>
            <h2>Example 6: Polling</h2>
            <p>Demonstrates a job-runner like progress bar</p>
        </hgroup>

        <div hx-target="this" hx-swap="outerHTML">
            <h3>Start Progress</h3>
            <button hx-post="{{ action([PollingController::class, 'start']) }}" hx-include="[name='_token']">
                Start Job
            </button>
            @csrf
        </div>
    </article>

    <script>
        document.body.addEventListener("done", function(evt) {
            alert(evt.detail.value);
        });
    </script>
@endsection
