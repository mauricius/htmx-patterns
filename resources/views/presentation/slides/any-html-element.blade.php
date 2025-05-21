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
        <h1 style="text-align: center">How does it work &mdash; Elements</h1>

        <ol>
            <li><b>Any HTML element can become interactive with Hypermedia</b> 👈🏻</li>
        </ol>

        <div class="flex-row">
            <div>
            <pre data-lang="html" style="background-color:#1f2329;color:#abb2bf;" class="language-html "><code class="language-html" data-lang="html"><span>&lt;</span><span style="color:#e06c75;">div </span><span style="color:#d19a66;">hx-post</span><span>=</span><span style="color:#98c379;">"/clicked"
</span><span>    </span><span style="color:#d19a66;">hx-trigger</span><span>=</span><span style="color:#98c379;">"click"
</span><span>    </span><span style="color:#d19a66;">hx-target</span><span>=</span><span style="color:#98c379;">"#target"
</span><span>    </span><span style="color:#d19a66;">hx-swap</span><span>=</span><span style="color:#98c379;">"outerHTML"</span><span>&gt;
</span><span>    Click Me!
</span><span>&lt;/</span><span style="color:#e06c75;">div</span><span>&gt;
</span>
<span>&lt;</span><span style="color:#e06c75;">div </span><span style="color:#d19a66;">id</span><span>=</span><span style="color:#98c379;">"target"</span><span>&gt;</span><span>&lt;/</span><span style="color:#e06c75;">div</span><span>&gt;
</span></code></pre>
            </div>
            <div>
                <img src="{{ asset('images/F5iJSBTaQAA-Ss7.jpeg') }}" alt="div">
                <a href="https://x.com/htmx_org/status/1700259958405869711">https://x.com/htmx_org/status/1700259958405869711</a>
            </div>
        </div>

    </div>
@endsection


