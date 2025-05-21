@extends('presentation.layout')

@section('content')

    <style>
        .flex-row {
            display: flex;
            flex-direction: row;
            column-gap: 3em;
        }

        .flex-row div {
            flex: 1 1 0;
            width: 0;
        }
    </style>

    <div>
        <h1 style="text-align: center">HATEOAS</h1>

        <h4>Hypermedia As The Engine Of Application State</h4>

        <ul>
            <li>It's a constraint of the <b>REST application architecture</b> that distinguishes it from other network application architectures.</li>
            <li>A client interacts with a network application whose application servers provide information <u>dynamically</u> through <b>hypermedia</b>.</li>
            <li>A REST client needs little to no prior knowledge about how to interact with an application or server beyond a generic understanding of hypermedia.</li>
            <li>By contrast, today JSON-based web clients typically interact through a <u>fixed</u> interface shared through documentation via a tool such as <b>OpenApi</b>.</li>
            <li>The restrictions imposed by HATEOAS <b>decouples</b> client and server.</li>
        </ul>
    </div>

    <div class="flex-row">
        <div>
            <img src="{{ asset('images/openapi.png') }}" alt="OpenApi" />
        </div>
        <div>
            <img src="{{ asset('images/form.png') }}" alt="Form" />
        </div>
    </div>
@endsection


