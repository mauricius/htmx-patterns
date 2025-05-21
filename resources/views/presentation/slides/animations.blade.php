@extends('presentation.layout')

@section('content')
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />

    <style>
        @keyframes fade-in {
            from { opacity: 0; }
        }

        @keyframes fade-out {
            to { opacity: 0; }
        }

        @keyframes slide-from-right {
            from { transform: translateX(90px); }
        }

        @keyframes slide-to-left {
            to { transform: translateX(-90px); }
        }

        .slide-it {
            view-transition-name: slide-it;
        }

        ::view-transition-old(slide-it) {
            animation: 180ms cubic-bezier(0.4, 0, 1, 1) both fade-out,
            600ms cubic-bezier(0.4, 0, 0.2, 1) both slide-to-left;
        }
        ::view-transition-new(slide-it) {
            animation: 420ms cubic-bezier(0, 0, 0.2, 1) 90ms both fade-in,
            600ms cubic-bezier(0.4, 0, 0.2, 1) both slide-from-right;
        }
    </style>

    <h1 style="text-align: center">Animations</h1>

    <p><span style="color: #3364a3">htmx</span> allows you to use CSS transitions in many situations using only HTML and CSS.</p>

    <h2 class="animate__animated"
        hx-on:click="htmx.addClass(this, 'animate__backOutUp');"
        hx-get="/animations" hx-trigger="click delay:1s" hx-swap="outerHTML"
    >Animate Me</h2>

    <pre data-lang="html" style="background-color:#1f2329;color:#abb2bf;" class="language-html "><code class="language-html" data-lang="html"><span>&lt;</span><span style="color:#e06c75;">div </span><span style="color:#d19a66;">class</span><span>=</span><span style="color:#98c379;">"slide-it"</span><span>&gt;
</span><span>   &lt;</span><span style="color:#e06c75;">h1</span><span>&gt;Initial Content&lt;/</span><span style="color:#e06c75;">h1</span><span>&gt;
</span><span>   &lt;</span><span style="color:#e06c75;">button </span><span style="color:#d19a66;">class</span><span>=</span><span style="color:#98c379;">"btn primary" </span><span style="color:#d19a66;">hx-get</span><span>=</span><span style="color:#98c379;">"/new-content" </span><span style="color:#d19a66;">hx-swap</span><span>=</span><span style="color:#98c379;">"innerHTML transition:true" </span><span style="color:#d19a66;">hx-target</span><span>=</span><span style="color:#98c379;">"closest div"</span><span>&gt;
</span><span>     Swap It!
</span><span>   &lt;/</span><span style="color:#e06c75;">button</span><span>&gt;
</span><span>&lt;/</span><span style="color:#e06c75;">div</span><span>&gt;
</span></code></pre>

    <div class="slide-it">
        @include('presentation.examples.initial-content')
    </div>

@endsection


