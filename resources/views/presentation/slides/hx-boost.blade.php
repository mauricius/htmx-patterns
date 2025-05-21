@extends('presentation.layout')

@section('content')

    <div>
        <h1 style="text-align: center">Attributes: <code>hx-boost</code></h1>

        <p>Changes any regular <code>GET</code> or <code>POST</code> request, triggered by anchor links or forms, to use AJAX and replaces the whole body using the <code>innerHTML</code> strategy.</p>

        <pre data-lang="html" style="background-color:#1f2329;color:#abb2bf;" class="language-html "><code class="language-html" data-lang="html"><span>&lt;</span><span style="color:#e06c75;">div </span><span style="color:#d19a66;">hx-boost</span><span>=</span><span style="color:#98c379;">"true"</span><span>&gt;
</span><span>  &lt;</span><span style="color:#e06c75;">a </span><span style="color:#d19a66;">href</span><span>=</span><span style="color:#98c379;">"/page1"</span><span>&gt;Go To Page 1&lt;/</span><span style="color:#e06c75;">a</span><span>&gt;
</span><span>  &lt;</span><span style="color:#e06c75;">a </span><span style="color:#d19a66;">href</span><span>=</span><span style="color:#98c379;">"/page2"</span><span>&gt;Go To Page 2&lt;/</span><span style="color:#e06c75;">a</span><span>&gt;
</span><span>&lt;/</span><span style="color:#e06c75;">div</span><span>&gt;
</span></code></pre>

    </div>
@endsection


