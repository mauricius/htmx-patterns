@extends('presentation.layout')

@section('content')
    <div>
        <h2>Quick Start</h2>

        <pre data-lang="html" style="background-color:#1f2329;color:#abb2bf;" class="language-html "><code class="language-html" data-lang="html"><span>  &lt;</span><span style="color:#e06c75;">script </span><span style="color:#d19a66;">src</span><span>=</span><span style="color:#98c379;">"https://unpkg.com/htmx.org@2.0.4"</span><span>&gt;&lt;/</span><span style="color:#e06c75;">script</span><span>&gt;
</span><span>  </span><span style="font-style:italic;color:#848da1;">&lt;!-- have a button POST a click via AJAX --&gt;
</span><span>  &lt;</span><span style="color:#e06c75;">button </span><span style="color:#d19a66;">hx-post</span><span>=</span><span style="color:#98c379;">"/clicked" </span><span style="color:#d19a66;">hx-swap</span><span>=</span><span style="color:#98c379;">"outerHTML"</span><span>&gt;
</span><span>    Click Me
</span><span>  &lt;/</span><span style="color:#e06c75;">button</span><span>&gt;
</span></code></pre>

        <button hx-post="/clicked" hx-swap="outerHTML">
            Click Me
        </button>
    </div>
@endsection


