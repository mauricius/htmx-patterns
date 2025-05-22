@extends('presentation.layout')

@section('content')

    <div>
        <h1 style="text-align: center">How does it work &mdash; Attributes</h1>

        <ol>
            <li>Any HTML element can become interactive with Hypermedia ✅</li>
            <li><b>Attributes instruct <span style="color: #3364a3">htmx</span> what to do with what elements</b> 👈🏻</li>
        </ol>

        <div>
            <pre data-lang="html" style="background-color:#1f2329;color:#abb2bf;" class="language-html "><code class="language-html" data-lang="html"><span style="color:#d19a66;">hx-boost</span><span>=</span><span style="color:#98c379;">"true|false"</span>
<span style="color:#d19a66;">hx-get</span><span>=</span><span style="color:#98c379;">"/url"</span>
<span style="color:#d19a66;">hx-post</span><span>=</span><span style="color:#98c379;">"/url"</span>
<span style="color:#d19a66;">hx-put|patch|delete</span><span>=</span><span style="color:#98c379;">"/url"</span>
<span style="color:#d19a66;">hx-swap</span><span>=</span><span style="color:#98c379;">"innerHTML|outerHTML|beforebegin|afterbegin|beforeend|afterend|..."</span>
<span style="color:#d19a66;">hx-target</span><span>=</span><span style="color:#98c379;">"#element"</span>
<span style="color:#d19a66;">hx-trigger</span><span>=</span><span style="color:#98c379;">"load|click|mouseover|keydown|every 1s"</span>
<span style="color:#d19a66;">hx-select</span><span>=</span><span style="color:#98c379;">"#element"</span></code></pre>
        </div>
    </div>
@endsection


