@extends('presentation.layout')

@section('content')

    <style>
        .flex-row {
            display: flex;
            flex-direction: row;
            align-items: center;
        }

        .flex-row div {
            flex: 1 1 0;
            width: 0;
        }
    </style>

    <div>
        <h1 style="text-align: center">MEMEs marketing strategy</h1>

        <div class="flex-row">
            <div>
                <img src="https://htmx.org/img/memes/bellcurve2.png" alt="" />
            </div>
            <div>
                <img src="https://htmx.org/img/memes/dbtohtml.png" alt="" />
            </div>
            <div>
                <img src="https://htmx.org/img/memes/fullstack.jpg" alt="" />
            </div>
        </div>

    </div>
@endsection


