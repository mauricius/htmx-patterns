@extends('presentation.layout')

@section('content')

    <div>
        <h1 style="text-align: center">JavaScript API</h1>

        <ul>
            <li>Working with classes:<br>
                <code>htmx.addClass(), htmx.removeClass(), htmx.takeClass(), htmx.toggleClass()</code></li>
            <li>Finding elements: <br>
                <code>htmx.closest(), htmx.find(), htmx.findAll()</code></li>
            <li>Working with elements: <br>
                <code>htmx.remove(), htmx.values()</code></li>
            <li>Working with events: <br>
                <code>htmx.on(), htmx.off(), htmx.trigger()</code></li>
            <li>Working with internals: <br>
                <code>htmx.ajax(), htmx.defineExtension(), htmx.removeExtension(), htmx.process()</code></li>
        </ul>
    </div>
@endsection


