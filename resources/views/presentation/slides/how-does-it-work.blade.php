@extends('presentation.layout')

@section('content')

    <div>
        <h1 style="text-align: center">How does it work</h1>

        <ol>
            <li>Any HTML element can become interactive with Hypermedia</li>
            <li>Attributes instruct HTMX what to do with what elements</li>
            <li>Server needs to distinguish between regular HTTP requests and HTMX requests</li>
            <li>Provide feedback to users during requests</li>
            <li>More complex needs: use events and the JavaScript API</li>
            <li>Extensions</li>
        </ol>
    </div>
@endsection


