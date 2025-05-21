@extends('presentation.layout')

@section('content')

    <style>
        .htmx-indicator{
            display:none;
        }
        .htmx-request .htmx-indicator{
            display:inline;
        }
        .htmx-request.htmx-indicator{
            display:inline;
        }
        .htmx-request {
            border-style: dashed;
        }
    </style>

    <div>
        <h1 style="text-align: center"><span style="color: #3364a3">htmx</span>-specific Classes</h1>

        <ul>
            <li><code>htmx-added</code> - Applied to a new piece of content before it is <b>swapped</b>, removed after it is <b>settled</b>.</li>
            <li><code>htmx-indicator</code> - A dynamically generated class that will toggle visible <code>(opacity:1)</code> when a htmx-request class is present</li>
            <li><code>htmx-request</code> - Applied to either the element or the element specified with <code>hx-indicator</code> while a request is ongoing</li>
            <li><code>htmx-settling</code> - Applied to a target after content is swapped, removed after it is settled.</li>
            <li><code>htmx-swapping</code> - Applied to a target before any content is swapped, removed after it is swapped.</li>
        </ul>

        <button hx-get="/info" hx-select="#info-detail" hx-swap="outerHTML" class="outline contrast">
            <span aria-busy="true" class="htmx-indicator"></span> Get Info!
        </button>


    </div>
@endsection


