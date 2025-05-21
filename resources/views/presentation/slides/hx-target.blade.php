@extends('presentation.layout')

@section('content')

    <div>
        <h1 style="text-align: center">Attributes: <code>hx-target</code></h1>

        <p>Controls which element in the DOM gets swapped with the returned HTML.</p>

        <pre data-lang="html" style="background-color:#1f2329;color:#abb2bf;" class="language-html "><code class="language-html" data-lang="html"><span>&lt;</span><span style="color:#e06c75;">div </span><span style="color:#d19a66;">id</span><span>=</span><span style="color:#98c379;">"response-div"</span><span>&gt;&lt;/</span><span style="color:#e06c75;">div</span><span>&gt;

</span><span>&lt;</span><span style="color:#e06c75;">button </span><span style="color:#d19a66;">hx-post</span><span>=</span><span style="color:#98c379;">"/register" </span><span style="color:#d19a66;">hx-target</span><span>=</span><span style="color:#98c379;">"#response-div" </span><span style="color:#d19a66;">hx-swap</span><span>=</span><span style="color:#98c379;">"beforeend"</span><span>&gt;
</span><span>   Register!
</span><span>&lt;/</span><span style="color:#e06c75;">button</span><span>&gt;
</span></code></pre>

        <p>Supports more than CSS query selectors</p>

        <ul>
<li><code>this</code> which indicates that the element that the <code>hx-target</code> attribute is on is the target.</li>
<li><code>closest &lt;CSS selector&gt;</code> which will find the closest ancestor element or itself, that matches the given CSS selector.</li>
<li><code>find &lt;CSS selector&gt;</code> which will find the first child descendant element that matches the given CSS selector.</li>
<li><code>next</code> which resolves to <code>element.nextElementSibling</code></li>
<li><code>next &lt;CSS selector&gt;</code> which will scan the DOM forward for the first element that matches the given CSS selector.</li>
<li><code>previous</code> which resolves to <code>element.previousElementSibling</code></li>
<li><code>previous &lt;CSS selector&gt;</code> which will scan the DOM backwards for the first element that matches the given CSS selector.</li>
        </ul>
    </div>
@endsection


