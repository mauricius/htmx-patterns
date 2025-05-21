@extends('presentation.layout')

@section('content')

    <style>
        .flex-row {
            display: flex;
            flex-direction: row;
            column-gap: 3em;
        }

        .flex-row div {
            flex: 1 1 0;
            width: 0;
        }
    </style>

    <div>
        <h1 style="text-align: center">How does it work &mdash; Headers</h1>

        <ol>
            <li>Any HTML element can become interactive with Hypermedia ✅</li>
            <li>Attributes instruct <span style="color: #3364a3">htmx</span> what to do with what elements ✅</li>
            <li><b>Server needs to distinguish between regular HTTP requests and <span style="color: #3364a3">htmx</span> requests</b> 👈🏻</li>
        </ol>

        <div class="flex-row">
            <div>
                <h5>Request Headers</h5>

                <ul>
                    <li><code>HX-Request</code> - always "true"</li>
                    <li><code>HX-Boosted</code> - indicates that the request is via an element using <a href="http://htmx-patterns.test/presentation/hx-boost" hx-boost="true">hx-boost</a></li>
                    <li><code>HX-Current-URL</code> - the current URL of the browser</li>
                    <li><code>HX-Prompt</code> - the user response to an <code>hx-prompt</code></li>
                    <li><code>HX-Target</code> - the <code>id</code> of the target element if it exists</li>
                    <li><code>HX-Trigger-Name</code> - the <code>name</code> of the triggered element if it exists</li>
                    <li><code>HX-Trigger</code> - the <code>id</code> of the triggered element if it exists</li>
                </ul>
            </div>
            <div>
                <h5>Response Headers</h5>

                <ul>
                    <li><code>HX-Location</code> - allows you to do a client-side redirect that does not do a full page reload</li>
                    <li><code>HX-Push-Url</code> - pushes a new url into the history stack</li>
                    <li><code>HX-Redirect</code> - can be used to do a client-side redirect to a new location</li>
                    <li><code>HX-Refresh</code> - if set to "true" the client-side will do a full refresh of the page</li>
                    <li><code>HX-Replace-Url</code> - replaces the current URL in the location bar</li>
                    <li><code>HX-Reswap</code> - allows you to specify how the response will be swapped.</li>
                    <li><code>HX-Retarget</code> - a CSS selector that updates the target of the content update to a different element on the page</li>
                    <li><code>HX-Reselect</code> - a CSS selector that allows you to choose which part of the response is used to be swapped in. Overrides an existing
                        <a href="http://htmx-patterns.test/presentation/hx-select" hx-boost="true">hx-select</a> on the triggering element</li>
                    <li><code>HX-Trigger</code> - allows you to trigger client-side events</li>
                </ul>
            </div>
        </div>
    </div>
@endsection


