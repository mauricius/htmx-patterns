@extends('presentation.layout')

@section('content')

    <div>
        <h1 style="text-align: center">Attributes: <code>hx-get</code></h1>

        <p>Issues a <code>GET</code> request to the specified URL and swaps the returned HTML into the DOM using one of the available swap strategies (<code>innerHTML</code> by default).</p>

        <pre data-lang="html" style="background-color:#1f2329;color:#abb2bf;" class="language-html "><code class="language-html" data-lang="html"><span>&lt;</span><span style="color:#e06c75;">button </span><span style="color:#d19a66;">hx-get</span><span>=</span><span style="color:#98c379;">"/clicked"</span><span>&gt;
</span><span>  Click Me
</span><span>&lt;/</span><span style="color:#e06c75;">button</span><span>&gt;
</span></code></pre>

        <p>The Server returns:</p>

        <pre data-lang="html" style="background-color:#1f2329;color:#abb2bf;" class="language-html "><code class="language-html" data-lang="html"><span>&lt;</span><span style="color:#e06c75;">span</span><span>&gt;</span><span>Clicked</span><span>&lt;/</span><span style="color:#e06c75;">span</span><span>&gt;
</span></code></pre>

        <p>The result is:</p>

        <pre data-lang="html" style="background-color:#1f2329;color:#abb2bf;" class="language-html "><code class="language-html" data-lang="html"><span>&lt;</span><span style="color:#e06c75;">button </span><span style="color:#d19a66;">hx-get</span><span>=</span><span style="color:#98c379;">"/clicked"</span><span>&gt;
</span>  <span>&lt;</span><span style="color:#e06c75;">span</span><span>&gt;</span><span>Clicked</span><span>&lt;/</span><span style="color:#e06c75;">span</span><span>&gt;
</span><span>&lt;/</span><span style="color:#e06c75;">button</span><span>&gt;
</span></code></pre>
    </div>
@endsection


