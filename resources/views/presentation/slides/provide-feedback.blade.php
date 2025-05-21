@extends('presentation.layout')

@section('content')

    <div>
        <h1 style="text-align: center">How does it work &mdash; Feedback</h1>

        <ol>
            <li>Any HTML element can become interactive with Hypermedia ✅</li>
            <li>Attributes instruct <span style="color: #3364a3">htmx</span> what to do with what elements ✅</li>
            <li>Server needs to distinguish between regular HTTP requests and <span style="color: #3364a3">htmx</span> requests ✅</li>
            <li>
                <b>Provide feedback to users during requests</b> 👈🏻
                <ul>
                    <li>CSS Classes</li>
                    <li>Animations</li>
                </ul>
            </li>
        </ol>
    </div>
@endsection


