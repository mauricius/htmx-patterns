@extends('presentation.layout')

@section('content')

    <style>
        ul.none li {
            list-style: none;
        }

        .flex-row {
            display: flex;
            flex-direction: row;
            align-items: center;
        }

        .flex-row div {
            flex: 1 1 0;
            width: 0;
        }
    </style>

    <div>
        <h1 style="text-align: center">Events</h1>

        <ul>
            <li><b>Swapping</b>: before/after swap occurs, after DOM has settled, etc.</li>
            <li><b>XHR</b>: during the lifecycle of the <code>XmlHttpRequest</code>: progress, loadstart, loadend, etc.</li>
            <li><b>History</b>: using the History API</li>
            <li><b>Errors</b>: errors sending a request, receiving the response, etc.</li>
            <li><b>Validation</b>: triggered when client side is performed, failed, etc.</li>
            <li><b>Requests</b>: configure the request before it's sent to the server, how to process the response</li>
        </ul>

        <div class="flex-row">
            <div>
                <ul class="none">
                    <li><code>htmx:abort</code></li>
                    <li><code>htmx:afterOnLoad</code></li>
                    <li><code>htmx:afterProcessNode</code></li>
                    <li><code>htmx:afterRequest</code></li>
                    <li><code>htmx:afterSettle</code></li>
                    <li><code>htmx:afterSwap</code></li>
                    <li><code>htmx:beforeCleanupElement</code></li>
                    <li><code>htmx:beforeOnLoad</code></li>
                    <li><code>htmx:beforeProcessNode</code></li>
                    <li><code>htmx:beforeRequest</code></li>
                    <li><code>htmx:beforeSwap</code></li>
                    <li><code>htmx:beforeSend</code></li>
                    <li><code>htmx:beforeTransition</code></li>
                    <li><code>htmx:configRequest</code></li>
                    <li><code>htmx:confirm</code></li>
                </ul>
            </div>

            <div>
                <ul class="none">
                    <li><code>htmx:historyCacheError</code></li>
                    <li><code>htmx:historyCacheMiss</code></li>
                    <li><code>htmx:historyCacheMissError</code></li>
                    <li><code>htmx:historyCacheMissLoad</code></li>
                    <li><code>htmx:historyRestore</code></li>
                    <li><code>htmx:beforeHistorySave</code></li>
                    <li><code>htmx:load</code></li>
                    <li><code>htmx:noSSESourceError</code></li>
                    <li><code>htmx:onLoadError</code></li>
                    <li><code>htmx:oobAfterSwap</code></li>
                    <li><code>htmx:oobBeforeSwap</code></li>
                    <li><code>htmx:oobErrorNoTarget</code></li>
                    <li><code>htmx:prompt</code></li>
                    <li><code>htmx:pushedIntoHistory</code></li>
                    <li><code>htmx:replacedInHistory</code></li>
                </ul>
            </div>
            <div>
                <ul class="none">
                    <li><code>htmx:responseError</code></li>
                    <li><code>htmx:sendAbort</code></li>
                    <li><code>htmx:sendError</code></li>
                    <li><code>htmx:sseError</code></li>
                    <li><code>htmx:sseOpen</code></li>
                    <li><code>htmx:swapError</code></li>
                    <li><code>htmx:targetError</code></li>
                    <li><code>htmx:timeout</code></li>
                    <li><code>htmx:validation:validate</code></li>
                    <li><code>htmx:validation:failed</code></li>
                    <li><code>htmx:validation:halted</code></li>
                    <li><code>htmx:xhr:abort</code></li>
                    <li><code>htmx:xhr:loadend</code></li>
                    <li><code>htmx:xhr:loadstart</code></li>
                    <li><code>htmx:xhr:progress</code></li>
                </ul>
            </div>
        </div>
    </div>
@endsection


