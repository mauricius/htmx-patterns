@extends('presentation.layout')

@section('content')

    <div>
        <h1 style="text-align: center">Extensions</h1>

        <p><span style="color: #3364a3">htmx</span> provides an extensions mechanism that allows you to customize the library's behavior. Extensions are defined in JavaScript and then enabled via the <code>hx-ext</code> attribute.</p>

        <p><span style="color: #3364a3">htmx</span> supports a few "core" extensions, which are supported by the htmx development team:</p>

        <ul>
            <li><code>head-support</code> - support for merging head tag information (styles, etc.) in htmx requests</li>
            <li><code>idiomorph</code> - supports the <code>morph</code> swap strategy using idiomorph</li>
            <li><code>preload</code> - allows you to preload content for better performance</li>
            <li><code>response-targets</code> - allows you to target elements based on HTTP response codes (e.g. 404)</li>
            <li><code>sse</code> - support for Server Sent Events</li>
            <li><code>ws</code> - support for Web Sockets</li>
        </ul>
    </div>
@endsection


