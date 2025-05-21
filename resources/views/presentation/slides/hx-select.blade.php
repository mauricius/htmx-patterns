@extends('presentation.layout')

@section('content')

    <div>
        <h1 style="text-align: center">Attributes: <code>hx-select</code></h1>

        <p>Selects the content to swap in from a response. The value of this attribute is a CSS query selector of the element or elements to select from the response.</p>

        <pre data-lang="html" style="background-color:#1f2329;color:#abb2bf;" class="language-html "><code class="language-html" data-lang="html"><span>&lt;</span><span style="color:#e06c75;">button </span><span style="color:#d19a66;">hx-get</span><span>=</span><span style="color:#98c379;">"/info" </span><span style="color:#d19a66;">hx-select</span><span>=</span><span style="color:#98c379;">"#info-detail" </span><span style="color:#d19a66;">hx-swap</span><span>=</span><span style="color:#98c379;">"outerHTML"</span><span>&gt;
</span><span>   Get Info!
</span><span>&lt;/</span><span style="color:#e06c75;">button</span><span>&gt;
</span></code></pre>

        <button hx-get="/info" hx-select="#info-detail" hx-swap="outerHTML">
            Get Info!
        </button>
    </div>
@endsection


