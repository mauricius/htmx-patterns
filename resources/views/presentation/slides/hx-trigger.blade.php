@extends('presentation.layout')

@section('content')

    <div>
        <h1 style="text-align: center">Attributes: <code>hx-trigger</code></h1>

        <p>Specifies the event that triggers the request.</p>

        <ul>
            <li>Standard web API events (e.g. <code>click</code>, <code>keydown</code>, <code>mouseup</code>, etc.)
                <pre data-lang="html" style="background-color:#1f2329;color:#abb2bf;" class="language-html "><code class="language-html" data-lang="html"><span>&lt;</span><span style="color:#e06c75;">div </span><span style="color:#d19a66;">hx-get</span><span>=</span><span style="color:#98c379;">"/clicked" </span><span style="color:#d19a66;">hx-trigger</span><span>=</span><span style="color:#98c379;">"click"</span><span>&gt;Click Me&lt;/</span><span style="color:#e06c75;">div</span><span>&gt;
</span></code></pre>
            </li>
            <li>Non-standard Events  (<code>load</code>, <code>reveal</code>, <code>intersect</code>)</li>
            <li>Polling <code>every &lt;timing declaration&gt;</code>
                <pre data-lang="html" style="background-color:#1f2329;color:#abb2bf;" class="language-html "><code class="language-html" data-lang="html"><span>&lt;</span><span style="color:#e06c75;">div </span><span style="color:#d19a66;">hx-get</span><span>=</span><span style="color:#98c379;">"/latest_updates" </span><span style="color:#d19a66;">hx-trigger</span><span>=</span><span style="color:#98c379;">"every 1s"</span><span>&gt;
</span><span>  Nothing Yet!
</span><span>&lt;/</span><span style="color:#e06c75;">div</span><span>&gt;
</span></code></pre>
            </li>
            <li>Multiple triggers (comma-separated)
                <pre data-lang="html" style="background-color:#1f2329;color:#abb2bf;" class="language-html "><code class="language-html" data-lang="html"><span>  &lt;</span><span style="color:#e06c75;">div </span><span style="color:#d19a66;">hx-get</span><span>=</span><span style="color:#98c379;">"/news" </span><span style="color:#d19a66;">hx-trigger</span><span>=</span><span style="color:#98c379;">"load, click delay:1s"</span><span>&gt;&lt;/</span><span style="color:#e06c75;">div</span><span>&gt;
</span></code></pre>
            </li>
            <li>Via JavaScript</li>
        </ul>
    </div>
@endsection


