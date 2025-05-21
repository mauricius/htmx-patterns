@extends('presentation.layout')

@section('content')

    <div>
        <h1 style="text-align: center">Attributes: <code>hx-vals</code></h1>

        <p>Allows you to add to the parameters that will be submitted with an AJAX request, in JSON format.</p>

        <pre data-lang="html" style="background-color:#1f2329;color:#abb2bf;" class="language-html "><code class="language-html" data-lang="html"><span>&lt;</span><span style="color:#e06c75;">div </span><span style="color:#d19a66;">hx-get</span><span>=</span><span style="color:#98c379;">"/example" </span><span style="color:#d19a66;">hx-vals</span><span>=</span><span style="color:#98c379;">'{"myVal": "My Value"}'</span><span>&gt;
    Get Some HTML, Including A Value in the Request
&lt;/</span><span style="color:#e06c75;">div</span><span>&gt;
</span></code></pre>
    </div>
@endsection


