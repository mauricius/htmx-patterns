@extends('presentation.layout')

@section('content')

    <div>
        <h1 style="text-align: center">How does it work</h1>

        <ol>
            <li>Any HTML element can become interactive with Hypermedia ✅</li>
            <li>Attributes instruct <span style="color: #3364a3">htmx</span> what to do with what elements ✅</li>
            <li>Server needs to distinguish between regular HTTP requests and <span style="color: #3364a3">htmx</span> requests ✅</li>
            <li>Provide feedback to users during requests ✅</li>
            <li><b>More complex needs: use Events and the JavaScript API</b> 👈🏻</li>
        </ol>
    </div>
@endsection


